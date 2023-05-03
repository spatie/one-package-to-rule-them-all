<?php

namespace Spatie\TimeWeatherTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Spatie\TimeWeatherTile\Commands\FetchBuienradarForecastsCommand;
use Spatie\TimeWeatherTile\Commands\FetchOpenWeatherMapDataCommand;

class TimeWeatherTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('time-weather-tile', TimeWeatherTileComponent::class);

        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchBuienradarForecastsCommand::class,
                FetchOpenWeatherMapDataCommand::class,
            ]);
        }

        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-time-weather-tile'),
        ], 'dashboard-time-weather-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-time-weather-tile');
    }
}
