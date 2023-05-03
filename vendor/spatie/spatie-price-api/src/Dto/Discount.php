<?php

namespace Spatie\PriceApi\Dto;

use Carbon\Carbon;

class Discount
{
    public bool $active;

    public ?int $percentage;

    public ?string $name;

    public ?string $expiresAtTimestamp;

    public static function createFromResponse(array $response): self
    {
        return new static(
            $response['active'],
            $response['percentage'],
            $response['name'],
            $response['expires_at'],
        );
    }

    public function __construct(bool $active, ?int $percentage, ?string $name, ?string $expiresAtTimestamp)
    {
        $this->active = $active;

        $this->percentage = $percentage;

        $this->name = $name;

        $this->expiresAtTimestamp = $expiresAtTimestamp;
    }

    public function expiresAt(): Carbon
    {
        return Carbon::createFromTimestamp($this->expiresAtTimestamp);
    }
}
