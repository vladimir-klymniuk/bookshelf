<?php

namespace App\Services;

use App\Entities\ImageThumbnail;
use Intervention\Image\Image;

/**
 * Class ThumbnailIService
 *
 * @package App\Services
 */
class ThumbnailIService implements ThumbnailIServiceInterface
{
    /**
     * @inheritDoc
     */
    public function extractBase64Contents(Image $image, string $format = 'jpg', int $quantity = self::THUMB_QUANTITY): string
    {
        return base64_encode($image->stream($format, $quantity)->getContents());
    }

    /**
     * @inheritDoc
     */
    public function resizeThumbnails(Image $image, int $width, int $height): Image
    {
        return $image->resize($width, $height);
    }

    /**
     * @inheritDoc
     */
    public function createImageThumbnail(
        Image $image,
        string $name,
        int $width,
        int $height,
        string $format = 'jpg',
        int $quantity = self::THUMB_QUANTITY
    ): ImageThumbnail {
        $short = $this->resizeThumbnails($image, $width, $height);

        return (new ImageThumbnail())
                ->setBase64($this->extractBase64Contents($short, $format, $quantity))
                ->setName($name)
                ->setSize($short->filesize() ?? 0);
    }
}
