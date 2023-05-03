<?php

namespace Spatie\TwitterTile;

use Carbon\Carbon;
use Illuminate\Support\Arr;

class Tweet
{
    private array $tweetProperties;

    private ?Tweet $quotedTweet;

    public function __construct(array $tweetProperties)
    {
        $this->tweetProperties = $tweetProperties;

        if ($this->hasQuote() && $this->tweetProperties['quoted_status'] ?? false) {
            $this->quotedTweet = new Tweet($this->tweetProperties['quoted_status']);
        }
    }

    public function authorScreenName(): string
    {
        return "@{$this->tweetProperties['user']['screen_name']}";
    }

    public function authorName(): string
    {
        return $this->tweetProperties['user']['name'];
    }

    public function authorAvatar(): string
    {
        return $this->tweetProperties['user']['profile_image_url_https'];
    }

    public function image(): string
    {
        return Arr::get($this->tweetProperties, 'extended_entities.media.0.media_url_https', '');
    }

    public function date(): ?Carbon
    {
        $timestamp = strtotime($this->tweetProperties['created_at']);

        if (! $timestamp) {
            return null;
        }

        return Carbon::createFromTimestamp($timestamp);
    }

    public function isRetweet(): bool
    {
        return Arr::has($this->tweetProperties, 'retweeted_status');
    }

    public function bySpatie(): bool
    {
        return $this->authorScreenName() === '@spatie.be';
    }

    public function hasQuote(): bool
    {
        if (! $this->tweetProperties['is_quote_status']) {
            return false;
        }

        if (! Arr::has($this->tweetProperties, 'quoted_status')) {
            return false;
        }

        return true;
    }

    public function quote(): ?Tweet
    {
        return $this->quotedTweet;
    }

    public function text()
    {
        $text = $this->tweetProperties['text'];

        $media = Arr::get($this->tweetProperties, 'extended_entities.media', []);

        $text = collect($media)
            ->map(fn (array $media) => $media['url'])
            ->reduce(fn ($text, $mediaUrl) => str_replace($mediaUrl, '', $text), $text);

        $displayTextRange = $this->tweetProperties['display_text_range'] ?? false;
        if ($displayTextRange) {
            $text = mb_substr($text, $displayTextRange[0], $displayTextRange[1]);
        }

        return $text;
    }

    public function html(): string
    {
        $html = $this->text();

        $html = preg_replace("/(#\w+)/", '<span class="font-bold">$1</span>', $html);
        $html = preg_replace("/(@\w{1,15})/", '<span class="font-bold">$1</span>', $html);

        return $html;
    }
}
