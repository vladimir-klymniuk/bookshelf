<?php

namespace App\Repositories;

use App\Entities\Type\ImageStatusType;
use App\Models\Image;
use LaravelDoctrine\ORM\Facades\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 * Class ImagesRepository
 *
 * @package App\Repositories
 */
class ImagesRepository  extends EntityRepository implements ImagesRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function allActivePreview(): array
    {
        return $this->findBy([
            'status' => ImageStatusType::ALL_ACTIVE,
        ]);
    }

    /**
     * @inheritDoc
     */
    public function get(int $userId)
    {
//        return Image::find($userId);
    }

    /**
     * @inheritDoc
     */
    public function all()
    {
        return Image::all();
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id)
    {
        return Image::destroy($id);
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, array $imageData)
    {
        Image::find($id)->update($imageData);
    }
}
