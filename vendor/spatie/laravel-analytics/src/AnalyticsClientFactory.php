<?php

namespace Spatie\Analytics;

use Google_Client;
use Google_Service_Analytics;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\Cache\Adapter\Psr16Adapter;

class AnalyticsClientFactory
{
    public static function createForConfig(array $analyticsConfig): AnalyticsClient
    {
        $authenticatedClient = self::createAuthenticatedGoogleClient($analyticsConfig);

        $googleService = new Google_Service_Analytics($authenticatedClient);

        return self::createAnalyticsClient($analyticsConfig, $googleService);
    }

    public static function createAuthenticatedGoogleClient(array $config): Google_Client
    {
        $client = new Google_Client();

        $client->setScopes([
            Google_Service_Analytics::ANALYTICS_READONLY,
        ]);

        $client->setAuthConfig($config['service_account_credentials_json']);

        self::configureCache($client, $config['cache']);

        return $client;
    }

    protected static function configureCache(Google_Client $client, $config): void
    {
        $config = collect($config);

        $store = Cache::store($config->get('store'));

        $cache = new Psr16Adapter($store);

        $client->setCache($cache);

        $client->setCacheConfig(
            $config->except('store')->toArray(),
        );
    }

    protected static function createAnalyticsClient(array $analyticsConfig, Google_Service_Analytics $googleService): AnalyticsClient
    {
        $client = new AnalyticsClient($googleService, app(Repository::class));

        $client->setCacheLifeTimeInMinutes($analyticsConfig['cache_lifetime_in_minutes']);

        return $client;
    }
}
