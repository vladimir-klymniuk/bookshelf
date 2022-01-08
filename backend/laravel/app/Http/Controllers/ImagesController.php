<?php

namespace App\Http\Controllers;

use App\DataTransformer\ImageDataTransformer;
use App\Manager\ImageManagerInterface;
use App\Repositories\ImagesRepositoryInterface;

/**
 * Class ImagesController
 *
 * @package App\Http\Controllers
 */
class ImagesController extends Controller
{
    /**
     * @var ImagesRepositoryInterface
     */
    private $repository;

    /**
     * @var ImageManagerInterface
     */
    private $manager;

    /**
     * ImagesController constructor.
     *
     * @param ImageManagerInterface     $manager
     * @param ImagesRepositoryInterface $repository
     */
    public function __construct(ImageManagerInterface $manager, ImagesRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->manager = $manager;
    }

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Laravel OpenApi Demo Documentation",
     *      description="L5 Swagger OpenApi description",
     *      @OA\Contact(
     *          email="admin@admin.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Demo API Server"
     * )
     *
     * @OA\Tag(
     *     name="Projects",
     *     description="API Endpoints of Projects"
     * )
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showAll()
    {
        $images = $this->repository->allActivePreview();

        return response()
            ->json(
                \array_map(
                    function ($image) {
                        return ImageDataTransformer::toArray($image);
                    },
                    $images
                )
            );
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(int $id)
    {
        $image = $this->manager->load($id);

        return response()->json(ImageDataTransformer::toArray($image));
    }
    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function restore(int $id)
    {
        $image = $this->manager->restore($id);

        return response()->json(ImageDataTransformer::toArray($image));
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function deleteImage(int $id)
    {
        $this->manager->remove($id);

        return response();
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addToFavorite(int $id)
    {
        $image = $this->manager->favorite($id);

        return response()->json(ImageDataTransformer::toArray($image));
    }
}
