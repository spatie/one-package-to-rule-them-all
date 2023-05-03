<?php

namespace Spatie\Varnish;

use Illuminate\Support\ServiceProvider;
use Spatie\Varnish\Commands\FlushVarnishCache;

class VarnishServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $configPath = __DIR__.'/../config/varnish.php';

            $publishPath = base_path('config/varnish.php');

            $this->publishes([$configPath => $publishPath], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/varnish.php', 'varnish');

        $this->app->bind('command.varnish:flush', FlushVarnishCache::class);

        $this->commands([
            'command.varnish:flush',
        ]);
    }
}
