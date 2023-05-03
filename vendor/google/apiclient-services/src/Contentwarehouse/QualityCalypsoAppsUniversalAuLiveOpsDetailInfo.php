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

class QualityCalypsoAppsUniversalAuLiveOpsDetailInfo extends \Google\Collection
{
  protected $collection_key = 'liveOpEvents';
  protected $liveOpEventsType = QualityCalypsoAppsUniversalAuLiveOpDetail::class;
  protected $liveOpEventsDataType = 'array';
  /**
   * @var string
   */
  public $packageName;

  /**
   * @param QualityCalypsoAppsUniversalAuLiveOpDetail[]
   */
  public function setLiveOpEvents($liveOpEvents)
  {
    $this->liveOpEvents = $liveOpEvents;
  }
  /**
   * @return QualityCalypsoAppsUniversalAuLiveOpDetail[]
   */
  public function getLiveOpEvents()
  {
    return $this->liveOpEvents;
  }
  /**
   * @param string
   */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /**
   * @return string
   */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QualityCalypsoAppsUniversalAuLiveOpsDetailInfo::class, 'Google_Service_Contentwarehouse_QualityCalypsoAppsUniversalAuLiveOpsDetailInfo');
