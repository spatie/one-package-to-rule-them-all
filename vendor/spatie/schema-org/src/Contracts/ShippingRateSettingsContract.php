<?php

namespace Spatie\SchemaOrg\Contracts;

interface ShippingRateSettingsContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function doesNotShip($doesNotShip);

    public function freeShippingThreshold($freeShippingThreshold);

    public function identifier($identifier);

    public function image($image);

    public function isUnlabelledFallback($isUnlabelledFallback);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function shippingDestination($shippingDestination);

    public function shippingLabel($shippingLabel);

    public function shippingRate($shippingRate);

    public function subjectOf($subjectOf);

    public function url($url);
}
