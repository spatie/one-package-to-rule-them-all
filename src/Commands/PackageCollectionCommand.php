<?php

namespace spatie\PackageCollection\Commands;

use Illuminate\Console\Command;

class PackageCollectionCommand extends Command
{
    public $signature = 'one-package-to-rule-them-all';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
