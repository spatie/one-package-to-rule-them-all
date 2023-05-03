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

class AssistantLogsTargetDeviceLog extends \Google\Collection
{
  protected $collection_key = 'devices';
  protected $devicesType = AssistantLogsDeviceInfoLog::class;
  protected $devicesDataType = 'array';
  /**
   * @var string
   */
  public $lowConfidenceReason;
  /**
   * @var string
   */
  public $resultConfidenceLevel;

  /**
   * @param AssistantLogsDeviceInfoLog[]
   */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /**
   * @return AssistantLogsDeviceInfoLog[]
   */
  public function getDevices()
  {
    return $this->devices;
  }
  /**
   * @param string
   */
  public function setLowConfidenceReason($lowConfidenceReason)
  {
    $this->lowConfidenceReason = $lowConfidenceReason;
  }
  /**
   * @return string
   */
  public function getLowConfidenceReason()
  {
    return $this->lowConfidenceReason;
  }
  /**
   * @param string
   */
  public function setResultConfidenceLevel($resultConfidenceLevel)
  {
    $this->resultConfidenceLevel = $resultConfidenceLevel;
  }
  /**
   * @return string
   */
  public function getResultConfidenceLevel()
  {
    return $this->resultConfidenceLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantLogsTargetDeviceLog::class, 'Google_Service_Contentwarehouse_AssistantLogsTargetDeviceLog');
