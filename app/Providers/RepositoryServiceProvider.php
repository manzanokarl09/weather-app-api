<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\OpenWeatherMapInterface;
use App\Repositories\OpenWeatherMap\OpenWeatherMapRepository;
use App\Repositories\Interfaces\GeoapifyInterface;
use App\Repositories\Geoapify\GeoapifyRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OpenWeatherMapInterface::class, OpenWeatherMapRepository::class);
        $this->app->bind(GeoapifyInterface::class, GeoapifyRepository::class);
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
