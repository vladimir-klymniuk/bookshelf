<?php

namespace App\Services;

use App\DataTransformer\ImageDataTransformer;
use App\Manager\ImageManagerInterface;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Entities\Image as ImageEntity;
use Psr\Log\LoggerInterface;

/**
 * Class ImageUploader
 *
 * @package App\Services
 */
class ImageUploader implements ImageUploaderInterface
{
    /**
     * @var ImageManagerInterface
     */
    private $manager;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var ThumbnailIService
     */
    private $thumbnailIService;

    /**
     * ImageUploader constructor.
     *
     * @param LoggerInterface            $logger
     * @param ImageManagerInterface      $manager
     * @param ThumbnailIServiceInterface $thumbnailIService
     */
    public function __construct(
        LoggerInterface $logger,
        ImageManagerInterface $manager,
        ThumbnailIServiceInterface $thumbnailIService
    ){
        $this->logger = $logger;
        $this->manager = $manager;
        $this->thumbnailIService = $thumbnailIService;
    }

    /**
     * @param string $imagePath
     *
     * @return ImageEntity
     */
    public function uploadByPath(string $imagePath): ImageEntity
    {
        $this->logger->info('Screw that!');
        $file = Storage::get($imagePath);
        $img = Image::make($file);
        $fileName = $img->basename ?? $imagePath;
        $thumbnail = $this->thumbnailIService->createImageThumbnail($img, $fileName, 250, 300);

        $dto = ImageDataTransformer::createCreateImageDTO(
            md5($file),
            $img->basename ?? '',
            $img->basePath() ?? '',
            Storage::url($imagePath),
            $img->filesize(),
            $img->getWidth(),
            $img->getHeight(),
            $img->mime()
        );

        $image = ImageDataTransformer::createImageFromDTO($dto);
        $image->addThumbnails($thumbnail);
        $thumbnail->setImage($image);

        return $this->manager->create($image);
    }
}
