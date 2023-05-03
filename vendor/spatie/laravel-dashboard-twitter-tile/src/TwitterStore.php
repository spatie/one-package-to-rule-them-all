<?php

namespace Spatie\TwitterTile;

use Spatie\Dashboard\Models\Tile;

class TwitterStore
{
    private Tile $tile;

    public static function make(string $configurationName)
    {
        return new static($configurationName);
    }

    public function __construct(string $configurationName)
    {
        $this->tile = Tile::firstOrCreateForName("twitter_{$configurationName}");
    }

    public function addTweet(array $tweetProperties)
    {
        $tweets = $this->tile->getData('tweets') ?? [];

        array_unshift($tweets, $tweetProperties);

        $tweets = array_slice($tweets, 0, 50);

        $this->tile->putData('tweets', $tweets);
    }

    public function tweets(): array
    {
        return collect($this->tile->getData('tweets') ?? [])
            ->map(fn (array $tweetAttributes) => new Tweet($tweetAttributes))
            ->reject(fn (Tweet $tweet) => $tweet->bySpatie())
            ->toArray();
    }
}
