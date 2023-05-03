<?php

namespace Spatie\TwitterTile\Commands;

use Illuminate\Console\Command;
use Spatie\TwitterStreamingApi\PublicStream;
use Spatie\TwitterTile\TwitterStore;

class ListenForMentionsCommand extends Command
{
    protected $signature = 'dashboard:listen-twitter-mentions {configurationName=default}';

    protected $description = 'Listen for mentions on Twitter';

    public function handle()
    {
        $configurationName = $this->argument('configurationName');

        $configuration = config("dashboard.tiles.twitter.configurations.{$configurationName}");

        if (is_null($configuration)) {
            $this->error("There is no configuration named `{$configurationName}`");

            return -1;
        }

        $this->info("Listening for mentions for configuration named `{$configurationName}`...");


        (new PublicStream(
            $configuration['access_token'],
            $configuration['access_token_secret'],
            $configuration['consumer_key'],
            $configuration['consumer_secret'],
        ))
            ->whenHears(
                $configuration['listen_for'],
                fn (array $tweetProperties) => TwitterStore::make($configurationName)->addTweet($tweetProperties)
            )
            ->startListening();
    }
}
