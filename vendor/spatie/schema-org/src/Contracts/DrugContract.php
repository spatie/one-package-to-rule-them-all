<?php

namespace Spatie\SchemaOrg\Contracts;

interface DrugContract
{
    public function activeIngredient($activeIngredient);

    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function administrationRoute($administrationRoute);

    public function aggregateRating($aggregateRating);

    public function alcoholWarning($alcoholWarning);

    public function alternateName($alternateName);

    public function asin($asin);

    public function audience($audience);

    public function availableStrength($availableStrength);

    public function award($award);

    public function awards($awards);

    public function brand($brand);

    public function breastfeedingWarning($breastfeedingWarning);

    public function category($category);

    public function clincalPharmacology($clincalPharmacology);

    public function clinicalPharmacology($clinicalPharmacology);

    public function code($code);

    public function color($color);

    public function countryOfAssembly($countryOfAssembly);

    public function countryOfLastProcessing($countryOfLastProcessing);

    public function countryOfOrigin($countryOfOrigin);

    public function depth($depth);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function dosageForm($dosageForm);

    public function doseSchedule($doseSchedule);

    public function drugClass($drugClass);

    public function drugUnit($drugUnit);

    public function foodWarning($foodWarning);

    public function funding($funding);

    public function gtin($gtin);

    public function gtin12($gtin12);

    public function gtin13($gtin13);

    public function gtin14($gtin14);

    public function gtin8($gtin8);

    public function guideline($guideline);

    public function hasAdultConsideration($hasAdultConsideration);

    public function hasEnergyConsumptionDetails($hasEnergyConsumptionDetails);

    public function hasMeasurement($hasMeasurement);

    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy);

    public function hasProductReturnPolicy($hasProductReturnPolicy);

    public function height($height);

    public function identifier($identifier);

    public function image($image);

    public function inProductGroupWithID($inProductGroupWithID);

    public function includedInHealthInsurancePlan($includedInHealthInsurancePlan);

    public function interactingDrug($interactingDrug);

    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor);

    public function isAvailableGenerically($isAvailableGenerically);

    public function isConsumableFor($isConsumableFor);

    public function isFamilyFriendly($isFamilyFriendly);

    public function isProprietary($isProprietary);

    public function isRelatedTo($isRelatedTo);

    public function isSimilarTo($isSimilarTo);

    public function isVariantOf($isVariantOf);

    public function itemCondition($itemCondition);

    public function keywords($keywords);

    public function labelDetails($labelDetails);

    public function legalStatus($legalStatus);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function manufacturer($manufacturer);

    public function material($material);

    public function maximumIntake($maximumIntake);

    public function mechanismOfAction($mechanismOfAction);

    public function medicineSystem($medicineSystem);

    public function mobileUrl($mobileUrl);

    public function model($model);

    public function mpn($mpn);

    public function name($name);

    public function negativeNotes($negativeNotes);

    public function nonProprietaryName($nonProprietaryName);

    public function nsn($nsn);

    public function offers($offers);

    public function overdosage($overdosage);

    public function pattern($pattern);

    public function positiveNotes($positiveNotes);

    public function potentialAction($potentialAction);

    public function pregnancyCategory($pregnancyCategory);

    public function pregnancyWarning($pregnancyWarning);

    public function prescribingInfo($prescribingInfo);

    public function prescriptionStatus($prescriptionStatus);

    public function productID($productID);

    public function productionDate($productionDate);

    public function proprietaryName($proprietaryName);

    public function purchaseDate($purchaseDate);

    public function recognizingAuthority($recognizingAuthority);

    public function relatedDrug($relatedDrug);

    public function releaseDate($releaseDate);

    public function relevantSpecialty($relevantSpecialty);

    public function review($review);

    public function reviews($reviews);

    public function rxcui($rxcui);

    public function sameAs($sameAs);

    public function size($size);

    public function sku($sku);

    public function slogan($slogan);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);

    public function warning($warning);

    public function weight($weight);

    public function width($width);
}
