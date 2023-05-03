<?php

namespace Spatie\PriceApi\Dto;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class Price
{
    public int $priceInCents;
    public string $currencyCode;
    public ?string $currencySymbol;
    public string $formattedPrice;

    public static function createFromResponse(array $response): self
    {
        return new static(
            $response['price_in_cents'],
            $response['currency_code'],
            $response['currency_symbol'],
            $response['formatted_price'],
        );
    }

    public function __construct(
        int $priceInCents,
        string $currencyCode,
        ?string $currencySymbol,
        string $formattedPrice
    ) {
        $this->priceInCents = $priceInCents;
        $this->currencyCode = $currencyCode;
        $this->currencySymbol = $currencySymbol;
        $this->formattedPrice = $formattedPrice;
    }

    public function formattedPrice(): HtmlString
    {
        $amount = number_format($this->priceInCents / 100, 2, '.', ' ');

        $amount = Str::replaceLast('.00', '', $amount);

        $string = "{$amount} {$this->currencyCode}";

        return new HtmlString($string);
    }
}
