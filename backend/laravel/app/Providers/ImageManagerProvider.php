<?php

namespace App\Providers;

use App\Entities\Image;
use App\Manager\ImageManager;
use App\Manager\ImageManagerInterface;
use Illuminate\Support\ServiceProvider;
use LaravelDoctrine\ORM\Facades\EntityManager;

/**
 * Class ImageManagerProvider
 *
 * @package App\Providers
 */
class ImageManagerProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->app->bind(
            'App\Manager\ImageManagerInterface',
            'App\Manager\ImageManager',
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->when(ImageManagerInterface::class)
            ->give(function () {
                $em = EntityManager::getRepository(Image::class);

                return new ImageManager($em);
            });
    }
}
