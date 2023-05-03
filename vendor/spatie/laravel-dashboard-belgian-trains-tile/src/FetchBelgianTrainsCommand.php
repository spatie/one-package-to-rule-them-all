<?php

namespace Spatie\BelgianTrainsTile;

use Illuminate\Console\Command;

class FetchBelgianTrainsCommand extends Command
{
    protected $signature = 'dashboard:fetch-belgian-trains';

    protected $description = 'Fetch Belgian Trains Information';

    public function handle(IRailApi $iRail)
    {
        $this->info('Fetching trainConnections from iRail...');

        $locale = config('dashboard.tiles.belgian_trains.locale') ?? 'nl';

        $trainConnections = collect(config('dashboard.tiles.belgian_trains.connections') ?? [])
            ->map(function (array $connection) use ($locale, $iRail) {
                $trains = $iRail->getConnections($connection['departure'], $connection['destination'], $locale);

                return ['label' => $connection['label'], 'trains' => $trains];
            })
            ->toArray();

        TrainConnectionsStore::make()->setTrainConnections($trainConnections);

        $this->info('All done!');
    }
}
