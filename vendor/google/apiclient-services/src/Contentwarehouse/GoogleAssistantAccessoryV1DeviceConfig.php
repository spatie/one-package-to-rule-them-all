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

class GoogleAssistantAccessoryV1DeviceConfig extends \Google\Model
{
  protected $deviceModelCapabilitiesOverrideType = GoogleAssistantEmbeddedV1DeviceModelCapabilitiesOverride::class;
  protected $deviceModelCapabilitiesOverrideDataType = '';
  /**
   * @var string
   */
  public $heterodyneToken;
  protected $surfaceIdentityType = GoogleAssistantEmbeddedV1SurfaceIdentity::class;
  protected $surfaceIdentityDataType = '';

  /**
   * @param GoogleAssistantEmbeddedV1DeviceModelCapabilitiesOverride
   */
  public function setDeviceModelCapabilitiesOverride(GoogleAssistantEmbeddedV1DeviceModelCapabilitiesOverride $deviceModelCapabilitiesOverride)
  {
    $this->deviceModelCapabilitiesOverride = $deviceModelCapabilitiesOverride;
  }
  /**
   * @return GoogleAssistantEmbeddedV1DeviceModelCapabilitiesOverride
   */
  public function getDeviceModelCapabilitiesOverride()
  {
    return $this->deviceModelCapabilitiesOverride;
  }
  /**
   * @param string
   */
  public function setHeterodyneToken($heterodyneToken)
  {
    $this->heterodyneToken = $heterodyneToken;
  }
  /**
   * @return string
   */
  public function getHeterodyneToken()
  {
    return $this->heterodyneToken;
  }
  /**
   * @param GoogleAssistantEmbeddedV1SurfaceIdentity
   */
  public function setSurfaceIdentity(GoogleAssistantEmbeddedV1SurfaceIdentity $surfaceIdentity)
  {
    $this->surfaceIdentity = $surfaceIdentity;
  }
  /**
   * @return GoogleAssistantEmbeddedV1SurfaceIdentity
   */
  public function getSurfaceIdentity()
  {
    return $this->surfaceIdentity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAssistantAccessoryV1DeviceConfig::class, 'Google_Service_Contentwarehouse_GoogleAssistantAccessoryV1DeviceConfig');
