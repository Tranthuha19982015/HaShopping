<?php

namespace App\Traits;

use Storage;

trait StorageImageTrait
{
    public function storageTraitUpload($request, $fileName, $folderName)
    {
        if ($request->hasFile($fileName)) {
            $file = $request->$fileName;
            $filenameOrigin = $file->getClientOriginalName();
            $filenameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
            $filepath = $request->file($fileName)->storeAs('public/' . $folderName . '/' . auth()->id(), $filenameHash);
            $dataUploadTrait = [
                'file_name' => $filenameOrigin,
                'file_path' => Storage::url($filepath)
            ];
            return $dataUploadTrait;
        }
        return null;
    }

    public function storageTraitUploadMultiple($file, $folderName)
    {
        $filenameOrigin = $file->getClientOriginalName();
        $filenameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
        $filepath = $file->storeAs('public/' . $folderName . '/' . auth()->id(), $filenameHash);
        $dataUploadTrait = [
            'file_name' => $filenameOrigin,
            'file_path' => Storage::url($filepath)
        ];
        return $dataUploadTrait;
    }
}
