<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PegawaiRepositoryInterface;
use App\Repositories\PegawaiRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PegawaiRepositoryInterface::class, PegawaiRepository::class);
    }

    public function boot()
    {
        //
    }
}