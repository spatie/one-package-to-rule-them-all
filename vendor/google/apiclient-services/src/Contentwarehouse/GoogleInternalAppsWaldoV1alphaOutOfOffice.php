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

class GoogleInternalAppsWaldoV1alphaOutOfOffice extends \Google\Model
{
  /**
   * @var string
   */
  public $comeBackTime;
  /**
   * @var string
   */
  public $committedUntil;
  /**
   * @var string
   */
  public $eventSummary;

  /**
   * @param string
   */
  public function setComeBackTime($comeBackTime)
  {
    $this->comeBackTime = $comeBackTime;
  }
  /**
   * @return string
   */
  public function getComeBackTime()
  {
    return $this->comeBackTime;
  }
  /**
   * @param string
   */
  public function setCommittedUntil($committedUntil)
  {
    $this->committedUntil = $committedUntil;
  }
  /**
   * @return string
   */
  public function getCommittedUntil()
  {
    return $this->committedUntil;
  }
  /**
   * @param string
   */
  public function setEventSummary($eventSummary)
  {
    $this->eventSummary = $eventSummary;
  }
  /**
   * @return string
   */
  public function getEventSummary()
  {
    return $this->eventSummary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleInternalAppsWaldoV1alphaOutOfOffice::class, 'Google_Service_Contentwarehouse_GoogleInternalAppsWaldoV1alphaOutOfOffice');
