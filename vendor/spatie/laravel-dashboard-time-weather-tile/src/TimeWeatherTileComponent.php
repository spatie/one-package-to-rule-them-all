<?php

namespace Spatie\TimeWeatherTile;

use Livewire\Component;

class TimeWeatherTileComponent extends Component
{
    /** @var string */
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        $weatherStore = TimeWeatherStore::make();

        return view('dashboard-time-weather-tile::tile', [
            'city' => $weatherStore->getCity(),
            'countryCode' => $weatherStore->getCountryCode(),
            'forecasts' => $weatherStore->forecasts(),
            'insideTemperature' => $weatherStore->insideTemperature(),
            'outsideTemperature' => $weatherStore->outsideTemperature(),
            'emoji' => $weatherStore->getEmoji(),
            'unit' => config('dashboard.tiles.time_weather.units') ?? 'metric',
        ]);
    }
}
