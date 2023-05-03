<?php

namespace Spatie\DbSnapshots\Commands\Concerns;

use Spatie\DbSnapshots\Snapshot;
use Spatie\DbSnapshots\SnapshotRepository;

trait AsksForSnapshotName
{
    public function askForSnapshotName(): string
    {
        $snapShots = app(SnapshotRepository::class)->getAll();

        $names = $snapShots->map(function (Snapshot $snapshot) {
            return $snapshot->name;
        })->values()->toArray();

        return $this->choice('Which snapshot?', $names, 0);
    }
}
