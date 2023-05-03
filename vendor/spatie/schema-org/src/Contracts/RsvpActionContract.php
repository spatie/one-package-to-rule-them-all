<?php

namespace Spatie\SchemaOrg\Contracts;

interface RsvpActionContract
{
    public function about($about);

    public function actionStatus($actionStatus);

    public function additionalNumberOfGuests($additionalNumberOfGuests);

    public function additionalType($additionalType);

    public function agent($agent);

    public function alternateName($alternateName);

    public function comment($comment);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function endTime($endTime);

    public function error($error);

    public function event($event);

    public function identifier($identifier);

    public function image($image);

    public function inLanguage($inLanguage);

    public function instrument($instrument);

    public function language($language);

    public function location($location);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function object($object);

    public function participant($participant);

    public function potentialAction($potentialAction);

    public function provider($provider);

    public function recipient($recipient);

    public function result($result);

    public function rsvpResponse($rsvpResponse);

    public function sameAs($sameAs);

    public function startTime($startTime);

    public function subjectOf($subjectOf);

    public function target($target);

    public function url($url);
}
