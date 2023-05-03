<?php

namespace Spatie\VeloTile;

use Illuminate\Console\Command;

class FetchVeloStationsCommand extends Command
{
    protected $signature = 'dashboard:fetch-velo-stations';

    protected $description = 'Fetch Velo Stations';

    public function handle(VeloApi $velo)
    {
        $this->info('Fetching Velo stations...');

        $stations = $velo->getStations(config('dashboard.tiles.velo.stations') ?? []);

        VeloStore::make()->setStations($stations);

        $this->info('All done!');
    }
}
