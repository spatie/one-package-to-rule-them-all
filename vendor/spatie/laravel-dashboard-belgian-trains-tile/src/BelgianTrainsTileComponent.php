<?php

namespace Spatie\BelgianTrainsTile;

use Livewire\Component;

class BelgianTrainsTileComponent extends Component
{
    protected static $showTile = null;

    public $position;

    public function render()
    {
        $showTile = isset(static::$showTile)
            ? (static::$showTile)()
            : true;

        return view('dashboard-belgian-trains-tile::tile', [
            'showTile' => $showTile,
            'trainConnections' => TrainConnectionsStore::make()->trainConnections(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.belgian_trains.refresh_interval_in_seconds') ?? 60,
        ]);
    }

    public static function showTile(callable $callable): void
    {
        static::$showTile = $callable;
    }
}
