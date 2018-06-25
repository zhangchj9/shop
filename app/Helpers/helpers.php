<?php
use App\User;

/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/9/11
 * Time: 1:43
 */

if (!function_exists('isAdmin')) {
    function isAdmin($user)
    {
        return $user != null && $user instanceof User && $user->id === 1;
    }
}

if (!function_exists('isAdminById')) {
    function isAdminById($user_id)
    {
        return $user_id === 1;
    }
}

if (!function_exists('getAdminUser')) {
    function getAdminUser()
    {
        return User::findOrFail(1);
    }
}

if (!function_exists('getMilliseconds')) {
    function getMilliseconds()
    {
        return round(microtime(true) * 1000);
    }
}

if (!function_exists('array_safe_get')) {
    function array_safe_get($array, $key, $default = '')
    {
        if (array_has($array, $key)) {
            return $array[$key];
        }
        return $default;
    }
}

if (!function_exists('getUrlEndWithSlash')) {
    function getUrlEndWithSlash($url)
    {
        if (!ends_with($url, '/')) {
            return $url . '/';
        }
        return $url;
    }
}

if (!function_exists('processImageViewUrl')) {

    function processImageViewUrl($rawImageUrl, $width = null, $height = null, $mode = 1)
    {
        $para = '?imageView2/' . $mode;
        if ($width)
            $para = $para . '/w/' . $width;
        if ($height)
            $para = $para . '/h/' . $height;
        return $rawImageUrl . $para;
    }
}

if (!function_exists('getImageViewUrl')) {
    /**
     * @see http://developer.qiniu.com/code/v6/api/kodo-api/image/imageview2.html
     * @param $url
     * @param null $width
     * @param null $height
     * @param int $mode
     * @return string
     */
    function getImageViewUrl($url, $width = null, $height = null, $mode = 1)
    {
        return processImageViewUrl($url, $width, $height, $mode);
    }
}


if (!function_exists('formatBytes')) {
    function formatBytes($size, $precision = 2)
    {
        if ($size > 0) {
            $size = (int)$size;
            $base = log($size) / log(1024);
            $suffixes = [' bytes', ' KB', ' MB', ' GB', ' TB'];

            return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
        } else {
            return $size;
        }
    }
}

if (!function_exists('getMentionedUsers')) {
    function getMentionedUsers($content)
    {
        preg_match_all("/(\S*)\@([^\r\n\s]*)/i", $content, $atlist_tmp);
        $usernames = [];
        foreach ($atlist_tmp[2] as $k => $v) {
            if ($atlist_tmp[1][$k] || strlen($v) > 25) {
                continue;
            }
            $usernames[] = $v;
        }
        $users = User:: whereIn('name', array_unique($usernames))->get();
        return $users;
    }
}


if (!function_exists('httpUrl')) {
    function httpUrl($url)
    {
        if ($url == null || $url == '')
            return '';
        if (!starts_with($url, 'http'))
            return 'http://' . $url;
        return $url;
    }
}

if (!function_exists('static_resources')) {
    function static_resources($path)
    {
        return $path;
    }
}