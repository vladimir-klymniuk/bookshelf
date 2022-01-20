<?php

namespace App\Services;

use Intervention\Image\Facades\Image;


class ImageService
{
    /**
     * @var int
     */
    protected $imageWidth = 300;

    /**
     * @var int
     */
    protected $imageHeight = 250;


    /**
     * @param $image
     * @param $width
     * @param $height
     * @return string
     */
    public function resizeImage($image, int $width, int $height)
    {
        $img = Image::make($image);

        $img->resize($width, $height);

        $img->encode('png');

        return $img->getEncoded();
    }

    /**
     * @param null $rootFolder
     * @param null $imgPrefix
     * @param string $format
     * @return string
     */
    public function basePath($rootFolder = null, $imgPrefix = null, $format = 'png')
    {
        $path = '';

        if (! empty($rootFolder)) {
            $path .= $rootFolder . '/';
        }

        $path .= date('Y-m-d') . '/' . $imgPrefix . time() . '.' . $format;

        return $path;
    }

}
