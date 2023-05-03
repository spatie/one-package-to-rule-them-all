<?php

namespace Spatie\TwitterTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Spatie\TwitterTile\Commands\ListenForMentionsCommand;
use Spatie\TwitterTile\Commands\SendFakeTweetCommand;

class TwitterTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('twitter-tile', TwitterTileComponent::class);

        if ($this->app->runningInConsole()) {
            $this->commands([
                ListenForMentionsCommand::class,
                SendFakeTweetCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-twitter-tile'),
        ], 'dashboard-calendar-twitter-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-twitter-tile');
    }
}
