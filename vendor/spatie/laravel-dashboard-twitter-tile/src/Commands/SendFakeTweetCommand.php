<?php

namespace Spatie\TwitterTile\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Spatie\TwitterTile\TwitterStore;

class SendFakeTweetCommand extends Command
{
    protected $signature = 'dashboard:send-fake-tweet {configurationName} {text?} {--Q|quote : Attach a quote to the tweet}';

    protected $description = 'Send a fake tweet';

    public function handle()
    {
        $this->info('Sending fake tweet...');

        $text = $this->argument('text') ?? Inspiring::quote();

        $quote = $this->option('quote')
            ? Inspiring::quote()
            : '';

        $tweetProperties = $this->getFakeTweetProperties($text, $quote);

        TwitterStore::make($this->argument('configurationName'))->addTweet($tweetProperties);

        $this->info('All done!');
    }

    protected function getFakeTweetProperties(string $text, string $quote): array
    {
        $stubName = empty($quote)
            ? 'regularTweet'
            : 'tweetWithQuote';

        $tweetStub = file_get_contents(__DIR__ . "/../../resources/stubs/{$stubName}.json");

        $tweetContent = $this->fillPlaceHolders($tweetStub, [
            '%text%' => $text,
            '%quote%' => $quote,
            '%currentTime%' => Carbon::now()->subHour()->format('D M d H:i:s +0000 Y'),
            '%textLength%' => strlen($text),
        ]);

        return json_decode($tweetContent, true);
    }

    protected function fillPlaceHolders(string $text, array $replacements): string
    {
        return str_replace(
            array_keys($replacements),
            array_values($replacements),
            $text
        );
    }
}
