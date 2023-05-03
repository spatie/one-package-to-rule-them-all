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

class GoogleAssistantAccessoryV1ScreenOutConfig extends \Google\Model
{
  protected $dimensionsType = GoogleAssistantAccessoryV1ScreenOutConfigDimensions::class;
  protected $dimensionsDataType = '';
  /**
   * @var float
   */
  public $fontScaleFactor;

  /**
   * @param GoogleAssistantAccessoryV1ScreenOutConfigDimensions
   */
  public function setDimensions(GoogleAssistantAccessoryV1ScreenOutConfigDimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /**
   * @return GoogleAssistantAccessoryV1ScreenOutConfigDimensions
   */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /**
   * @param float
   */
  public function setFontScaleFactor($fontScaleFactor)
  {
    $this->fontScaleFactor = $fontScaleFactor;
  }
  /**
   * @return float
   */
  public function getFontScaleFactor()
  {
    return $this->fontScaleFactor;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAssistantAccessoryV1ScreenOutConfig::class, 'Google_Service_Contentwarehouse_GoogleAssistantAccessoryV1ScreenOutConfig');
