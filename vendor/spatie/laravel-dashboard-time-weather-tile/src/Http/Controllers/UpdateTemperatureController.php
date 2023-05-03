<?php

namespace Spatie\TimeWeatherTile\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Spatie\TimeWeatherTile\TimeWeatherStore;

class UpdateTemperatureController
{
    use ValidatesRequests;

    public function __invoke(Request $request)
    {
        $temperature = $this->validate($request, [
            'temperature' => 'required|numeric',
        ]);

        $temperature = round($temperature['temperature'], 1);

        TimeWeatherStore::make()->setInsideTemperature($temperature);

        return 'ok';
    }
}
