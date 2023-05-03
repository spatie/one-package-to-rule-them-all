<?php

use Illuminate\Support\Facades\Route;
use Spatie\TimeWeatherTile\Http\Controllers\UpdateTemperatureController;

Route::post('temperature', UpdateTemperatureController::class);
