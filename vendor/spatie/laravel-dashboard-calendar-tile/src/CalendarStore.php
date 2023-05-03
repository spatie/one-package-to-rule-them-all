<?php

namespace Spatie\CalendarTile;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\Dashboard\Models\Tile;

class CalendarStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName('calendar');
    }

    public function setEventsForCalendarId(array $events, string $calendarId): self
    {
        $this->tile->putData('events_' . $calendarId, $events);

        return $this;
    }

    public function eventsForCalendarId(string $calendarId): Collection
    {
        return collect($this->tile->getData('events_' . $calendarId) ?? [])
            ->map(function (array $event) {
                $carbon = Carbon::createFromTimeString($event['date']);

                $event['date'] = $carbon;
                $event['withinWeek'] = $event['date']->diffInDays() < 7;
                $event['presentableDate'] = $this->getPresentableDate($carbon);

                return $event;
            });
    }

    public function getPresentableDate(Carbon $carbon): string
    {
        if ($carbon->isToday()) {
            return 'Today';
        }

        if ($carbon->isTomorrow()) {
            return 'Tomorrow';
        }

        if ($carbon->diffInDays() < 8) {
            return "In {$carbon->diffInDays()} days";
        }

        if ($carbon->isNextWeek()) {
            return "Next week";
        }

        $dateFormat = config('dashboard.tiles.calendar.date_format') ?? 'd.m.Y';

        return $carbon->format($dateFormat);
    }
}
