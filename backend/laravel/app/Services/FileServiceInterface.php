<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

/**
 * Interface FileServiceInterface
 *
 * @package App\Services
 */
interface FileServiceInterface
{
    /**
     * @param UploadedFile  $file
     * @param string        $path
     * @param string        $fileName
     *
     * @return string
     */
    public function uploadZipAndUnZip(UploadedFile $file, string $path, string $fileName): string;
}
