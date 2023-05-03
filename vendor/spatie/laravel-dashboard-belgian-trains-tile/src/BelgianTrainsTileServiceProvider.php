<?php

namespace Spatie\BelgianTrainsTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class BelgianTrainsTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('belgian-trains-tile', BelgianTrainsTileComponent::class);

        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchBelgianTrainsCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-belgian-trains-tile'),
        ], 'dashboard-belgian-trains-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-belgian-trains-tile');
    }
}
