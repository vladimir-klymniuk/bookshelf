<?php


namespace App\Services;

/**
 * Interface UnzipFileInterface
 *
 * @package App\Services
 */
interface UnzipFileInterface
{
    /**
     * @param string $pathToFile
     * @param string $extractTo
     *
     * @return bool
     */
    public function unzip(string $pathToFile, string $extractTo): bool;
}
