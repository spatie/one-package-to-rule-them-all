<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\SA360;

class GoogleAdsSearchads360V0ResourcesAd extends \Google\Collection
{
  protected $collection_key = 'finalUrls';
  /**
   * @var string
   */
  public $displayUrl;
  /**
   * @var string[]
   */
  public $finalUrls;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $resourceName;
  protected $textAdType = GoogleAdsSearchads360V0CommonSearchAds360TextAdInfo::class;
  protected $textAdDataType = '';
  /**
   * @var string
   */
  public $type;

  /**
   * @param string
   */
  public function setDisplayUrl($displayUrl)
  {
    $this->displayUrl = $displayUrl;
  }
  /**
   * @return string
   */
  public function getDisplayUrl()
  {
    return $this->displayUrl;
  }
  /**
   * @param string[]
   */
  public function setFinalUrls($finalUrls)
  {
    $this->finalUrls = $finalUrls;
  }
  /**
   * @return string[]
   */
  public function getFinalUrls()
  {
    return $this->finalUrls;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * @param GoogleAdsSearchads360V0CommonSearchAds360TextAdInfo
   */
  public function setTextAd(GoogleAdsSearchads360V0CommonSearchAds360TextAdInfo $textAd)
  {
    $this->textAd = $textAd;
  }
  /**
   * @return GoogleAdsSearchads360V0CommonSearchAds360TextAdInfo
   */
  public function getTextAd()
  {
    return $this->textAd;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V0ResourcesAd::class, 'Google_Service_SA360_GoogleAdsSearchads360V0ResourcesAd');
