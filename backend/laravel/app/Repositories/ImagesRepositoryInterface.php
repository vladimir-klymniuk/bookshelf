<?php

namespace App\Repositories;

use App\Entities\Image;
use Doctrine\Common\Collections\Collection;

/**
 * Interface ImagesRepositoryInterface
 *
 * @package App\Repositories
 */
interface ImagesRepositoryInterface
{

    /**
     * Get's a image by it's ID
     *
     * @param int
     */
    public function get(int $id);

    /**
     * Get's all images.
     *
     * @return mixed
     */
    public function all();

    /**
     * Get's all images.
     *
     * @return Image[]
     */
    public function allActivePreview(): array;

    /**
     * Deletes an image.
     *
     * @param int
     */
    public function delete(int $id);

    /**
     * Updates an image.
     *
     * @param int
     * @param array
     */
    public function update(int $id, array $userData);
}
