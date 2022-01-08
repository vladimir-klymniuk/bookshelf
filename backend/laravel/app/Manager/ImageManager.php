<?php

namespace App\Manager;

use App\Entities\Image;
use App\Entities\Type\ImageStatusType;
use Doctrine\ORM\EntityManager;

/**
 * Class ImageManager
 *
 * @package App\Manager
 */
class ImageManager implements ImageManagerInterface
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * ImageManager constructor.
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @inheritDoc
     */
    public function save(Image $image): Image
    {
        $this->em->persist($image);
        $this->em->flush();

        return $image;
    }

    /**
     * @inheritDoc
     */
    public function create(Image $image): Image
    {
        $this->em->persist($image);
        $this->em->flush();

        return $image;
    }

    /**
     * @inheritDoc
     */
    public function restore(int $id): Image
    {
        $image = $this->load($id);
        $image->setStatus(ImageStatusType::STATUS_RESTORED);

        return $this->save($image);
    }

    /**
     * @inheritDoc
     */
    public function active(int $id): Image
    {
        $image = $this->load($id);
        $image->setStatus(ImageStatusType::STATUS_ACTIVE);

        return $this->save($image);
    }

    /**
     * @inheritDoc
     */
    public function favorite(int $id): Image
    {
        $image = $this->load($id);
        $image->setStatus(ImageStatusType::STATUS_FAVORITE);

        return $this->save($image);
    }

    /**
     * @inheritDoc
     */
    public function remove(int $id): bool
    {
        $image = $this->load($id);
        $image->setStatus(ImageStatusType::STATUS_REMOVED);

        $this->save($image);

        return true;
    }

    /**
     * @inheritDoc
     */
    public function load(int $id): Image
    {
        return $this->em->find(Image::class, $id);
    }
}
