<?php

namespace App\Providers;

use App\Console\Commands\SeederImagesCommand;
use App\Entities\Image;
use App\Http\Controllers\ImagesController;
use App\Manager\ImageManager;
use App\Manager\ImageManagerInterface;
use App\Repositories\ImagesRepository;
use App\Repositories\ImagesRepositoryInterface;
use App\Services\FileService;
use App\Services\ImageUploader;
use App\Services\ImageUploaderInterface;
use App\Services\ThumbnailIServiceInterface;
use App\Services\UnzipFileInterface;
use Illuminate\Support\ServiceProvider;
use LaravelDoctrine\ORM\Facades\EntityManager;
use Madnest\Madzipper\Madzipper;

/**
 * Class ImageUploadProvider
 *
 * @package App\Providers
 */
class ImageUploadProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\ImageUploaderInterface',
            'App\Services\ImageUploader'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
