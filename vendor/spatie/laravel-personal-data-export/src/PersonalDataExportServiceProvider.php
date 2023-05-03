<?php

namespace Spatie\PersonalDataExport;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Spatie\PersonalDataExport\Commands\CleanOldPersonalDataExportsCommand;

class PersonalDataExportServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/personal-data-export.php' => config_path('personal-data-export.php'),
            ], 'config');
        }

        Route::macro('personalDataExports', function (string $url) {
            Route::get("$url/{zipFilename}", '\Spatie\PersonalDataExport\Http\Controllers\PersonalDataExportController@export')
                ->name('personal-data-exports');
        });

        $this->commands([
            CleanOldPersonalDataExportsCommand::class,
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/personal-data-export.php', 'personal-data-export');
    }
}
