<?php

namespace Spatie\PersonalDataExport\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CleanOldPersonalDataExportsCommand extends Command
{
    protected $signature = 'personal-data-export:clean';

    protected $description = 'Remove old personal downloads';

    public function handle()
    {
        $this->comment('Start deleting old personal downloads...');

        $oldZipFiles = collect($this->getDisk()->allFiles())
            ->filter(fn (string $zipFilename) => Str::endsWith($zipFilename, '.zip'))
            ->filter(function (string $zipFilename) {
                $zipFilenameParts = explode('_', $zipFilename);

                if (! isset($zipFilenameParts[1])) {
                    return false;
                }

                $dateCreated = Carbon::createFromTimestamp($zipFilenameParts[1]);

                $threshold = now()->subDays(config('personal-data-export.delete_after_days'));

                return $dateCreated->isBefore($threshold);
            })
            ->toArray();

        $this->getDisk()->delete($oldZipFiles);

        $this->comment(count($oldZipFiles).' old zip files have been deleted.');

        $this->info('All done!');
    }

    protected function getDisk(): Filesystem
    {
        return Storage::disk(config('personal-data-export.disk'));
    }
}
