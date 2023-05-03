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

class AppsPeopleOzExternalMergedpeopleapiEvent extends \Google\Model
{
  protected $calendarDayType = GoogleTypeDate::class;
  protected $calendarDayDataType = '';
  /**
   * @var string
   */
  public $formattedType;
  protected $metadataType = AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata::class;
  protected $metadataDataType = '';
  protected $promptType = SocialGraphApiProtoPrompt::class;
  protected $promptDataType = '';
  /**
   * @var string
   */
  public $timestampMillis;
  /**
   * @var string
   */
  public $type;

  /**
   * @param GoogleTypeDate
   */
  public function setCalendarDay(GoogleTypeDate $calendarDay)
  {
    $this->calendarDay = $calendarDay;
  }
  /**
   * @return GoogleTypeDate
   */
  public function getCalendarDay()
  {
    return $this->calendarDay;
  }
  /**
   * @param string
   */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /**
   * @return string
   */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /**
   * @param AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public function setMetadata(AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param SocialGraphApiProtoPrompt
   */
  public function setPrompt(SocialGraphApiProtoPrompt $prompt)
  {
    $this->prompt = $prompt;
  }
  /**
   * @return SocialGraphApiProtoPrompt
   */
  public function getPrompt()
  {
    return $this->prompt;
  }
  /**
   * @param string
   */
  public function setTimestampMillis($timestampMillis)
  {
    $this->timestampMillis = $timestampMillis;
  }
  /**
   * @return string
   */
  public function getTimestampMillis()
  {
    return $this->timestampMillis;
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
class_alias(AppsPeopleOzExternalMergedpeopleapiEvent::class, 'Google_Service_Contentwarehouse_AppsPeopleOzExternalMergedpeopleapiEvent');
