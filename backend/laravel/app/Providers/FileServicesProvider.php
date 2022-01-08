<?php

namespace App\Providers;

use App\Services\FileService;
use App\Services\UnzipFileInterface;
use Illuminate\Support\ServiceProvider;
use Madnest\Madzipper\Madzipper;

/**
 * Class FileServicesProvider
 *
 * @package App\Providers
 */
class FileServicesProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Services\UnzipFileInterface',
            'App\Services\FileService',
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
            FileService::class,
            function () {
                return new FileService(
                    new Madzipper()
                );
            });


        $this->app->when(UnzipFileInterface::class)
            ->give(function () {
                return new FileService(
                    new Madzipper()
                );
            });
    }
}
