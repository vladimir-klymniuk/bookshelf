<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

/**
 * Class BackendServiceProvider
 *
 * @package App\Repositories
 */
class BackendServiceProvider extends ServiceProvider
{
    /**
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\ImagesRepositoryInterface',
            'App\Repositories\ImagesRepository'
        );
    }
}
