<?php

namespace Spatie\SchemaOrg\Contracts;

interface BloodTestContract
{
    public function additionalType($additionalType);

    public function affectedBy($affectedBy);

    public function alternateName($alternateName);

    public function code($code);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function funding($funding);

    public function guideline($guideline);

    public function identifier($identifier);

    public function image($image);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function normalRange($normalRange);

    public function potentialAction($potentialAction);

    public function recognizingAuthority($recognizingAuthority);

    public function relevantSpecialty($relevantSpecialty);

    public function sameAs($sameAs);

    public function signDetected($signDetected);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);

    public function usedToDiagnose($usedToDiagnose);

    public function usesDevice($usesDevice);
}
