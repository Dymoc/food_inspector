<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\UploadedFile;

class UploadedService
{
    public function fileUpload(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid('file-') . "." . $extension;
        $urlFile=$file->storeAs('news', $filename, 'public');
        if($urlFile){
            return $urlFile;
        }
        throw new \Exception("File not uploaded");
        
    }
}