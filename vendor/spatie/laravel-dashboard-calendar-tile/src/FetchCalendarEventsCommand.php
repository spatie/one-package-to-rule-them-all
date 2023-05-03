<?php

namespace Spatie\CalendarTile;

use Carbon\Carbon;
use DateTime;
use Illuminate\Console\Command;
use Spatie\GoogleCalendar\Event;

class FetchCalendarEventsCommand extends Command
{
    protected $signature = 'dashboard:fetch-calendar-events';

    protected $description = 'Fetch events from a Google Calendar';

    public function handle()
    {
        $this->info('Fetching calendar events...');

        foreach (config('dashboard.tiles.calendar.ids') ?? [] as $calendarId) {
            $events = collect(Event::get(null, null, [], $calendarId))
                ->map(function (Event $event) {
                    $sortDate = $event->getSortDate();

                    return [
                        'name' => $event->name,
                        'date' => Carbon::createFromFormat('Y-m-d H:i:s', $sortDate)->format(DateTime::ATOM),
                    ];
                })
                ->unique('name')
                ->toArray();

            CalendarStore::make()->setEventsForCalendarId($events, $calendarId);
        }

        $this->info('All done!');
    }
}
