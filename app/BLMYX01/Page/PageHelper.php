<?php
namespace BLMYX01\Page;
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 1/23/2017
 * Time: 12:58 PM
 */
trait PageHelper
{
    public function shouldShow($page)
    {
        if (isAdminById(auth()->id())) {
            return true;
        }
        if ($page->configuration && $page->configuration->config['display'] == 'true') {
            return true;
        }
        return false;
    }
}