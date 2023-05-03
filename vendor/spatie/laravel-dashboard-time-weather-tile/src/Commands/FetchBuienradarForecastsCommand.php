<?php

namespace Spatie\TimeWeatherTile\Commands;

use Illuminate\Console\Command;
use Spatie\TimeWeatherTile\Services\Buienradar;
use Spatie\TimeWeatherTile\TimeWeatherStore;

class FetchBuienradarForecastsCommand extends Command
{
    protected $signature = 'dashboard:fetch-buienradar-forecasts';

    protected $description = 'Fetch Buienradar forecasts';

    public function handle()
    {
        $this->info('Fetching Buienradar forecasts...');

        $forecasts = Buienradar::getForecasts(
            config('dashboard.tiles.time_weather.buienradar_latitude'),
            config('dashboard.tiles.time_weather.buienradar_longitude')
        );

        if (count($forecasts)) {
            TimeWeatherStore::make()->setForecasts($forecasts);
        }

        $this->info('All done!');
    }
}
