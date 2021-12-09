<?php

namespace App\Support;

use Illuminate\Support\Str;

class Helper
{
    public static function imageUpload($file, String $path)
    {
        $name = Str::random(15) . "." . $file->extension();
        $file->move(public_path($path), $name);
        $model = $path . '/' .  $name;
        return $model;
    }
}
