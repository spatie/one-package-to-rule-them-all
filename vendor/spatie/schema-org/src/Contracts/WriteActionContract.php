<?php

namespace Spatie\SchemaOrg\Contracts;

interface WriteActionContract
{
    public function actionStatus($actionStatus);

    public function additionalType($additionalType);

    public function agent($agent);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function endTime($endTime);

    public function error($error);

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

    public function result($result);

    public function sameAs($sameAs);

    public function startTime($startTime);

    public function subjectOf($subjectOf);

    public function target($target);

    public function url($url);
}
