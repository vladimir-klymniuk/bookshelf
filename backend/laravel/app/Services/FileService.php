<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Madnest\Madzipper\Madzipper;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class FileService
 *
 * @package App\Services\
 */
class FileService implements FileServiceInterface, UnzipFileInterface
{
    /**
     * @var Madzipper
     */
    private $zipper;

    /**
     * FileService constructor.
     *
     * @param Madzipper $zipper
     */
    public function __construct(Madzipper $zipper)
    {
        $this->zipper = $zipper;
    }

    /**
     * @inheritDoc
     */
    public function uploadZipAndUnZip(UploadedFile $file, string $path, string $fileName): string
    {
        try {
            $storage = Storage::disk($path);

            if ($file->getClientOriginalExtension() == 'zip') {
                $storage->putFile($path, $file, $fileName);

                $sourcePath = 'app/public/' . $path . '/' . $fileName;

                $destinationPath = 'task-images/' . $path;

                $this->unzip(storage_path($sourcePath), public_path($destinationPath));

                return url($destinationPath . '/' . $this->findImagesFileNameInFolder(public_path($destinationPath)));
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @inheritDoc
     */
    public function unzip(string $pathToFile, string $extractTo): bool
    {
        var_dump($this->zipper);
        die;
        $this->zipper->make($pathToFile)->extractTo($extractTo);
        $this->zipper->close();

        return true;
    }

    /**
     * @param string$pathToFolder
     *
     * @return string|null
     */
    private function findImagesFileNameInFolder(string $pathToFolder): ?string
    {
        foreach (Storage::disk('local')->allFiles($pathToFolder) as $file) {
            if ($file->getExtension() == 'jpg') {
                return $file->getFilename();
            }

            continue;
        }
    }
}
