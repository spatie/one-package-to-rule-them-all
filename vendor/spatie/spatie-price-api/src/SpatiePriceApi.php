<?php

namespace Spatie\PriceApi;

use Cache;
use Illuminate\Support\Facades\Http;
use Spatie\PriceApi\Dto\Discount;
use Spatie\PriceApi\Dto\Price;

class SpatiePriceApi
{
    public static function getPriceForPurchasable(int $purchasableId): ?array
    {
        $ip = request()->ip();

        $response = Cache::remember("price-{$purchasableId}-{$ip}", 60, function () use ($ip, $purchasableId) {
            $response = Http::get("https://spatie.be/api/price/{$purchasableId}/{$ip}");

            if (! $response->successful()) {
                return null;
            }

            return $response->json();
        });

        if (is_null($response) || ! array_key_exists('actual', $response)) {
            return [
                'couldFetchPrice' => false,
                'actual' => null,
                'withoutDiscount' => null,
                'discount' => null,
            ];
        }

        return [
            'couldFetchPrice' => true,
            'actual' => Price::createFromResponse($response['actual']),
            'withoutDiscount' => Price::createFromResponse($response['without_discount']),
            'discount' => Discount::createFromResponse($response['discount']),
        ];
    }

    public static function getPriceForBundle(int $bundleId): ?array
    {
        $ip = request()->ip();

        $response = Cache::remember("bundle-price-{$bundleId}-{$ip}", 60, function () use ($bundleId, $ip) {
            $response = Http::get("https://spatie.be/api/bundle-price/{$bundleId}/{$ip}");

            if (! $response->successful()) {
                return null;
            }

            return $response->json();
        });

        if (is_null($response) || ! array_key_exists('actual', $response)) {
            return [
                'couldFetchPrice' => false,
                'actual' => null,
                'withoutDiscount' => null,
                'discount' => null,
            ];
        }

        return [
            'couldFetchPrice' => true,
            'actual' => Price::createFromResponse($response['actual']),
            'withoutDiscount' => Price::createFromResponse($response['without_discount']),
            'discount' => Discount::createFromResponse($response['discount']),
        ];
    }
}
