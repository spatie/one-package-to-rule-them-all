<?php

namespace Spatie\VeloTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class VeloTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchVeloStationsCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-velo-tile'),
        ], 'dashboard-velo-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-velo-tile');

        Livewire::component('velo-tile', VeloTileComponent::class);
    }
}
