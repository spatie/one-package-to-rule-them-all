<?php

namespace Spatie\MediaLibrary\Support;

use Finfo;

class File
{
    public static function getHumanReadableSize(int $sizeInBytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        if ($sizeInBytes == 0) {
            return '0 '.$units[1];
        }

        for ($i = 0; $sizeInBytes > 1024; $i++) {
            $sizeInBytes /= 1024;
        }

        return round($sizeInBytes, 2).' '.$units[$i];
    }

    public static function getMimeType(string $path): string
    {
        $finfo = new Finfo(FILEINFO_MIME_TYPE);

        return $finfo->file($path);
    }
}
