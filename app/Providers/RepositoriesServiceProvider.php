<?php

namespace App\Providers;

use App\Repositories\EmailRepository;
use App\Repositories\EmailRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->bind(EmailRepositoryInterface::class,EmailRepository::class);
    }
}
