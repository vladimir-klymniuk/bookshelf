<?php

namespace App\Providers;

use App\Entities\Image;
use App\Repositories\ImagesRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class ImageRepositoryProvider
 *
 * @package App\Providers
 */
class ImageRepositoryProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\ImagesRepositoryInterface',
            'App\Repositories\ImagesRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'App\Repositories\ImagesRepository',
            function ($app) {
                return new ImagesRepository(
                    $app['em'],
                    $app['em']->getClassMetaData(Image::class)
                );
            });
    }
}
