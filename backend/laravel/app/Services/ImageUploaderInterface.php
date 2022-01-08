<?php

namespace App\Services;

use App\DTO\ImageDTO;
use App\Entities\Image as ImageEntity;

/**
 * Interface ImageUploaderInterface
 *
 * @package App\Services
 */
interface ImageUploaderInterface
{
    /**
     * @param string $imagePath
     *
     * @return ImageEntity
     */
    public function uploadByPath(string $imagePath): ImageEntity;
}
