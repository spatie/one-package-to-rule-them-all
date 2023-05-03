<?php

namespace Spatie\ScheduleMonitor\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\ScheduleMonitor\Support\Concerns\UsesScheduleMonitoringModels;

class CleanLogCommand extends Command
{
    use UsesScheduleMonitoringModels;

    public $signature = 'schedule-monitor:clean';

    public $description = 'Clean up old records from the schedule monitor log.';

    public function handle()
    {
        $cutOffInDays = config('schedule-monitor.delete_log_items_older_than_days');

        $this->comment('Deleting all log items older than ' . $cutOffInDays . ' ' . Str::plural('day', $cutOffInDays) . '...');

        $cutOff = now()->subDays(config('schedule-monitor.delete_log_items_older_than_days'));

        $numberOfRecordsDeleted = $this->getMonitoredScheduleTaskLogItemModel()
            ->query()
            ->where('created_at', '<', $cutOff->toDateTimeString())
            ->delete();

        $this->info('Deleted ' . $numberOfRecordsDeleted . ' ' . Str::plural('log item', $numberOfRecordsDeleted) . '!');
    }
}
