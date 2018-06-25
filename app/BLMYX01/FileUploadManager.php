<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/9/17
 * Time: 17:10
 */

namespace BLMYX01;

use Storage;

class FileUploadManager
{
    public function uploadFile($key, $filePath)
    {
        $disk_name = config('filesystems.default');
        $disk = Storage::disk($disk_name);
        if ($disk->put($key, file_get_contents($filePath))) {
            return [true, $disk_name];
        } else {
            return [false, $disk_name];
        }
    }

    public function url($key, $disk_name)
    {
        $disk = Storage::disk($disk_name);
        return $disk->url($key);
    }

    public function deleteFile($key, $disk_name)
    {
        $disk = Storage::disk($disk_name);
        if ($disk->delete($key)) {
            return true;
        } else {
            return false;
        }
    }
}