<?php

namespace Spatie\BelgianTrainsTile;

use Spatie\Dashboard\Models\Tile;

class TrainConnectionsStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName('belgianTrains');
    }

    public function setTrainConnections(array $trains): self
    {
        $this->tile->putData('trainConnections', $trains);

        return $this;
    }

    public function trainConnections(): array
    {
        return $this->tile->getData('trainConnections') ?? [];
    }
}
