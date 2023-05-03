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

namespace Google\Service\Contentwarehouse;

class IndexingDocjoinerDataVersion extends \Google\Model
{
  protected $acceleratedShoppingSignalType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $acceleratedShoppingSignalDataType = '';
  protected $chromeCountsType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $chromeCountsDataType = '';
  protected $creatorType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $creatorDataType = '';
  protected $instantNavboostType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $instantNavboostDataType = '';
  protected $localypType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $localypDataType = '';
  protected $modernFormatContentType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $modernFormatContentDataType = '';
  protected $navboostType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $navboostDataType = '';
  protected $rankembedType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $rankembedDataType = '';
  protected $universalFactsType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $universalFactsDataType = '';
  protected $videoScoringSignalType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $videoScoringSignalDataType = '';
  protected $voltType = IndexingDocjoinerDataVersionVersionInfo::class;
  protected $voltDataType = '';

  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setAcceleratedShoppingSignal(IndexingDocjoinerDataVersionVersionInfo $acceleratedShoppingSignal)
  {
    $this->acceleratedShoppingSignal = $acceleratedShoppingSignal;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getAcceleratedShoppingSignal()
  {
    return $this->acceleratedShoppingSignal;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setChromeCounts(IndexingDocjoinerDataVersionVersionInfo $chromeCounts)
  {
    $this->chromeCounts = $chromeCounts;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getChromeCounts()
  {
    return $this->chromeCounts;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setCreator(IndexingDocjoinerDataVersionVersionInfo $creator)
  {
    $this->creator = $creator;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getCreator()
  {
    return $this->creator;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setInstantNavboost(IndexingDocjoinerDataVersionVersionInfo $instantNavboost)
  {
    $this->instantNavboost = $instantNavboost;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getInstantNavboost()
  {
    return $this->instantNavboost;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setLocalyp(IndexingDocjoinerDataVersionVersionInfo $localyp)
  {
    $this->localyp = $localyp;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getLocalyp()
  {
    return $this->localyp;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setModernFormatContent(IndexingDocjoinerDataVersionVersionInfo $modernFormatContent)
  {
    $this->modernFormatContent = $modernFormatContent;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getModernFormatContent()
  {
    return $this->modernFormatContent;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setNavboost(IndexingDocjoinerDataVersionVersionInfo $navboost)
  {
    $this->navboost = $navboost;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getNavboost()
  {
    return $this->navboost;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setRankembed(IndexingDocjoinerDataVersionVersionInfo $rankembed)
  {
    $this->rankembed = $rankembed;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getRankembed()
  {
    return $this->rankembed;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setUniversalFacts(IndexingDocjoinerDataVersionVersionInfo $universalFacts)
  {
    $this->universalFacts = $universalFacts;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getUniversalFacts()
  {
    return $this->universalFacts;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setVideoScoringSignal(IndexingDocjoinerDataVersionVersionInfo $videoScoringSignal)
  {
    $this->videoScoringSignal = $videoScoringSignal;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getVideoScoringSignal()
  {
    return $this->videoScoringSignal;
  }
  /**
   * @param IndexingDocjoinerDataVersionVersionInfo
   */
  public function setVolt(IndexingDocjoinerDataVersionVersionInfo $volt)
  {
    $this->volt = $volt;
  }
  /**
   * @return IndexingDocjoinerDataVersionVersionInfo
   */
  public function getVolt()
  {
    return $this->volt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IndexingDocjoinerDataVersion::class, 'Google_Service_Contentwarehouse_IndexingDocjoinerDataVersion');
