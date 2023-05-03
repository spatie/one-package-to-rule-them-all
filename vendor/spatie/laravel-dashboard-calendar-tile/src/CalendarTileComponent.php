<?php

namespace Spatie\CalendarTile;

use Livewire\Component;

class CalendarTileComponent extends Component
{
    /** @var string */
    public $calendarId;

    /** @var string */
    public $position;

    /** @var string|null */
    public $title;

    /** @var int|null */
    public $refreshInSeconds;

    public function mount(?string $calendarId = null, string $position, ?string $title = null, int $refreshInSeconds = null)
    {
        $this->calendarId = $calendarId ?? config('dashboard.tiles.calendar.ids')[0];

        $this->position = $position;

        $this->title = $title;

        $this->refreshInSeconds = $refreshInSeconds;
    }

    public function render()
    {
        return view('dashboard-calendar-tile::tile', [
            'events' => CalendarStore::make()->eventsForCalendarId($this->calendarId),
            'refreshIntervalInSeconds' => $this->refreshInSeconds ?? config('dashboard.tiles.calendar.refresh_interval_in_seconds') ?? 60,
        ]);
    }
}
