<?php

namespace Referenzverwaltung\ModelPhoto;

use Illuminate\Support\ServiceProvider;
use Referenzverwaltung\ModelPhoto\Interfaces\PhotoRepositoryInterface;
use Referenzverwaltung\ModelPhoto\Repositories\PhotoRepository;

class PhotoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PhotoRepositoryInterface::class, PhotoRepository::class);
    
    }
}
