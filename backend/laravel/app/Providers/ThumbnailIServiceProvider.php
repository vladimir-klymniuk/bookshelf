<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ThumbnailIServiceProvider
 *
 * @package App\Providers
 */
class ThumbnailIServiceProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\ThumbnailIServiceInterface',
            'App\Services\ThumbnailIService'
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
