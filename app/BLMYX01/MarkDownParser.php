<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/9/21
 * Time: 23:00
 */

namespace BLMYX01;

use League\HTMLToMarkdown\HtmlConverter;
use ParsedownExtra;
use DOMDocument;
use DOMXPath;

class MarkDownParser
{
    private $parser;
    private $htmlConverter;

    private $markdown;
    private $convertedHtml;
    private $toc = '';

    private $clean = true;
    private $use_gallery = false;
    private $use_figure = false;
    private $generate_toc = false;

    /**
     * MarkDownParser constructor.
     * @param $markdown string
     */
    public function __construct($markdown = '')
    {
        try {
            $this->parser = new ParsedownExtra();
        } catch (\Exception $e) {
            dd($e);
        }
        $this->htmlConverter = new HtmlConverter();
        $this->markdown = $markdown;
        $this->convertedHtml = '';
    }

    public function with($markdown)
    {
        $this->reset();
        $this->markdown = $markdown;
        return $this;
    }

    public function reset()
    {
        $this->markdown = '';
        $this->convertedHtml = '';

        $this->toc = '';
        $this->clean = true;
        $this->use_gallery = false;
        $this->use_figure = false;
        $this->generate_toc = false;

        return $this;
    }

    public function getToc()
    {
        return $this->toc;
    }

    public function clean($clean = true)
    {
        $this->clean = $clean;
        return $this;
    }

    public function gallery($use_gallery = false)
    {
        $this->use_gallery = $use_gallery;
        return $this;
    }

    public function figure($use_figure = false)
    {
        $this->use_figure = $use_figure;
        return $this;
    }

    public function toc($generate_toc = false)
    {
        $this->generate_toc = $generate_toc;
        return $this;
    }


    public function parse()
    {
        $convertedHtml = $this->parser->setBreaksEnabled(true)->text($this->markdown);
        if ($this->clean) {
            $convertedHtml = clean($convertedHtml, 'user_comment_content');
        }
        if (!$convertedHtml)
            // avoid empty string
            return $convertedHtml;
        $dom = new DOMDocument();
        //To suppress the Warnings
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($convertedHtml, 'HTML-ENTITIES', 'UTF-8'));
        libxml_use_internal_errors(false);
        if ($this->use_gallery) {
            $changed = $this->parseGallery($dom);
            if ($changed) {
                $convertedHtml = $dom->saveHTML();
            }
        }
        if ($this->use_figure) {
            $changed = $this->parseFigure($dom);
            if ($changed) {
                $convertedHtml = $dom->saveHTML();
            }
        }
        if ($this->generate_toc) {
            $toc = $this->generateToc($dom);
            if (strlen($toc) > 0) {
                $convertedHtml = $dom->saveHTML();
                $this->toc = $toc;
            }
        }
        return $convertedHtml;
    }

    /**
     * convert
     * <div class="figure **" caption="caption">
     *     <p><img ..></p>
     *     <p><img ..></p>
     *     ...
     * </div>
     * to
     * <figure class="**">
     *     <div><img ..></div>
     *     <div><img ..></div>
     *     ...
     *     <figcaption>$caption</figcaption>
     * </figure>
     * @param DOMDocument $dom
     * @return bool
     */
    private function parseGallery(DOMDocument $dom)
    {
        $xpath = new DOMXpath($dom);
        $galleries = $xpath->query('//div[contains(@class, "figure")]');
        $changed = false;
        foreach ($galleries as $gallery) {
            $figure = $dom->createElement('figure');
            $figure->setAttribute('class', trim(str_replace('figure', '', $gallery->getAttribute('class'))));
            $frag = $dom->createDocumentFragment();
            $alt = '';
            foreach ($xpath->query('.//img', $gallery) as $image) {
                if (!$alt)
                    $alt = $image->getAttribute('alt');
                //wrapped with div
                $div = $dom->createElement('div');
                // images inside <figure> may not has figure class.
                $imageClasses = $image->getAttribute('class');
                $imageClasses = trim(str_replace('figure', '', $imageClasses));
                if ($imageClasses) {
                    $image->setAttribute('class', $imageClasses);
                } else {
                    $image->removeAttribute('class');
                }
                $div->appendChild($image);
                $frag->appendChild($div);
            }
            //empty string if no attribute with the given name is found.
            $caption = $gallery->getAttribute('caption');
            if (!$caption)
                $caption = $alt;
            $frag->appendXML("<figcaption>$caption</figcaption>");
            $figure->appendChild($frag);
            $gallery->parentNode->replaceChild($figure, $gallery);
            $changed = true;
        }
        return $changed;
    }

    /**
     * convert
     * <img .. alt='alt' class='figure'>
     * to
     * <figure>
     *     <img .. alt='alt'>
     *     <figcaption>$alt</figcaption>
     * </figure>
     * @param DOMDocument $dom
     * @return bool
     */
    private function parseFigure(DOMDocument $dom)
    {
        $xpath = new DOMXpath($dom);
        $images = $xpath->query('//img[contains(@class, "figure")]');
        $changed = false;
        foreach ($images as $image) {
            $src = $image->getAttribute('src');
            $alt = $image->getAttribute('alt');
            $figure = $dom->createElement('figure');
            $frag = $dom->createDocumentFragment(); // create fragment
            $imgNode = $dom->createElement('img');
            $imgNode->setAttribute('src', $src);
            $imgNode->setAttribute('alt', $alt);
            $frag->appendChild($imgNode);
            $frag->appendXML("<figcaption>$alt</figcaption>");
            $figure->appendChild($frag);
            $image->parentNode->replaceChild($figure, $image);
            $changed = true;
        }
        return $changed;

    }

    private function generateToc(DOMDocument $dom, $from = 1, $to = 4, $max_depth = 2, $list = 'ol')
    {
        assert($to - $from + 1 >= $max_depth, 'depth should smaller than to minus from.');
        $tags = '//*[';
        $xpath = new DOMXpath($dom);
        for ($i = $from; $i <= $to; $i++) {
            $tags .= 'self::h' . $i;
            if ($i != $to) {
                $tags .= ' or ';
            } else {
                $tags .= ']';
            }
        }
        // forbid duplicate ids
        $used_ids = [];
        $hs = $xpath->query($tags);
        $init_depth = 0;
        $depth = 0;
        $last_level = -1;
        $toc = '';
        $depth_map = [];

        foreach ($hs as $h) {
            sscanf($h->tagName, 'h%u', $level);
            if ($level > $last_level) {
                $toc .= "<$list>";
                $depth++;
                $depth_map[$level] = $depth;
            } elseif ($level == $last_level) {
                $toc .= '</li>';
            } elseif ($level < $last_level) {
                if (array_has($depth_map, $level)) {
                    $last_depth = $depth_map[$level];
                    $toc .= str_repeat("</li></$list>", $depth - $last_depth);
                    $toc .= "</li>";
                    $depth = $last_depth;
                }
            }
            $id = $h->textContent;
            // remove all spaces
            $id = preg_replace('/\s/', '', $id);
            if (isset($used_ids[$id])) {
                $index = $used_ids[$id];
                $id = $id . '-' . $index;
                $used_ids[$id] = $index + 1;
            } else {
                $used_ids[$id] = 1;
            }

            $h->setAttribute('id', $id);
            $title = $h->textContent;
            $toc .= "<li><a href=#$id>$title</a>";
            $last_level = $level;
        }
        return $toc;
    }
}