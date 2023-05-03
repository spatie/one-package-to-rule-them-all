<?php

namespace Spatie\BelgianTrainsTile;

use Illuminate\Support\Facades\Http;

class IRailApi
{
    public function getConnections(string $departureStationName, string $destinationStationName, string $locale): array
    {
        $endpoint = "https://api.irail.be/connections?from={$departureStationName}&to={$destinationStationName}&format=json&lang={$locale}";

        $response = Http::get($endpoint)->json();

        $connections = $response['connection'];

        return collect($connections)
            ->map(function (array $connection) {
                $departure = $connection['departure'];

                return [
                    'station' => $departure['direction']['name'],
                    'time' => $departure['time'],
                    'platform' => $departure['platform'],
                    'canceled' => (bool)$departure['canceled'],
                    'delay' => (int)$departure['delay'] / 60,
                ];
            })
            ->toArray();
    }
}
