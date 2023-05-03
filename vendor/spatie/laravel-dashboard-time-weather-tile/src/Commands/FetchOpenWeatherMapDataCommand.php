<?php

namespace Spatie\TimeWeatherTile\Commands;

use Illuminate\Console\Command;
use Spatie\TimeWeatherTile\Services\OpenWeatherMap;
use Spatie\TimeWeatherTile\TimeWeatherStore;

class FetchOpenWeatherMapDataCommand extends Command
{
    protected $signature = 'dashboard:fetch-open-weather-data';

    protected $description = 'Fetch Open Weather Map data';

    public function handle()
    {
        $weatherReport = OpenWeatherMap::getWeatherReport(
            config('dashboard.tiles.time_weather.open_weather_map_key'),
            config('dashboard.tiles.time_weather.open_weather_map_city'),
            config('dashboard.tiles.time_weather.units') ?? 'metric',
        );

        TimeWeatherStore::make()->setWeatherReport($weatherReport);

        $this->info('All done!');
    }
}
