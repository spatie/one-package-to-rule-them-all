<?php

namespace Spatie\TimeWeatherTile\Services;

use Illuminate\Support\Facades\Http;

class Buienradar
{
    public static function getForecasts(string $latitude, string $longitude): ?array
    {
        $response = Http::get("https://graphdata.buienradar.nl/forecast/json/?lat={$latitude}&lon={$longitude}");

        if (! $response->ok()) {
            return [];
        }

        $data = $response->json();

        return collect($data['forecasts'] ?? [])
            ->map(function (array $forecast) {
                return [
                    'time' => $forecast['datetime'],
                    'rain' => $forecast['precipitation'],
                ];
            })
            ->take(12)
            ->toArray();
    }
}
