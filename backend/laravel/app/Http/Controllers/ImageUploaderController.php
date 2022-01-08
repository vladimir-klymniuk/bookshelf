<?php

namespace App\Http\Controllers;

use App\DataTransformer\ImageDataTransformer;
use App\Manager\ImageManagerInterface;
use App\Services\ImageUploaderInterface;
use Illuminate\Http\Request;

/**
 * Class ImagesController
 *
 * @package App\Http\Controllers
 */
class ImageUploaderController extends Controller
{
    /**
     * @var ImageManagerInterface
     */
    private $uploader;

    /**
     * ImageUploaderController constructor.
     *
     * @param ImageUploaderInterface $uploader
     */
    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }

    /**
     * @TODO implement and test that
     *
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function upload(Request $request)
    {
        $payload = $request->file();

        if (! $payload) {
            return response()->json(null, 400);
        }

        // Only grab the first element because single file uploads
        // are not supported at this time

        $file = reset($payload);

        $path = $file->storePublicly($file->getRealPath(), [
            'disk' => config('public'),
        ]);

        $image = $this->uploader->uploadByPath($path);

        return response()->json(ImageDataTransformer::toArray($image));
    }
}
