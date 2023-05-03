<?php

namespace Spatie\TwitterTile;

use Livewire\Component;

class TwitterTileComponent extends Component
{
    /** @var string */
    public $position;

    /** @var string|null */
    public $title;

    /** @var string */
    public $configurationName;

    public function mount(string $position, ?string $title = null, string $configurationName = 'default')
    {
        $this->position = $position;

        $this->title = $title;

        $this->configurationName = $configurationName;
    }

    public function render()
    {
        return view('dashboard-twitter-tile::tile', [
            'tweets' => TwitterStore::make($this->configurationName)->tweets(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.twitter.refresh_interval_in_seconds') ?? 5,
        ]);
    }
}
