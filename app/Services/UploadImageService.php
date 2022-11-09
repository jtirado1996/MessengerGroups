<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadImageService
{
    public function do($file, $path)
    {
        if ($file) {
            $fileName = \Str::uuid().'.'.$file->getClientOriginalExtension();
            Storage::disk('public')->put($path.$fileName, File::get($file));

            return $fileName;
        }
    }
}