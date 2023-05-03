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

class VideoContentSearchVideoAnchorRatingScore extends \Google\Collection
{
  protected $collection_key = 'furballUrl';
  /**
   * @var float
   */
  public $averageBookmarkUsefulness;
  /**
   * @var float
   */
  public $averageDescriptionQuality;
  /**
   * @var string[]
   */
  public $furballUrl;

  /**
   * @param float
   */
  public function setAverageBookmarkUsefulness($averageBookmarkUsefulness)
  {
    $this->averageBookmarkUsefulness = $averageBookmarkUsefulness;
  }
  /**
   * @return float
   */
  public function getAverageBookmarkUsefulness()
  {
    return $this->averageBookmarkUsefulness;
  }
  /**
   * @param float
   */
  public function setAverageDescriptionQuality($averageDescriptionQuality)
  {
    $this->averageDescriptionQuality = $averageDescriptionQuality;
  }
  /**
   * @return float
   */
  public function getAverageDescriptionQuality()
  {
    return $this->averageDescriptionQuality;
  }
  /**
   * @param string[]
   */
  public function setFurballUrl($furballUrl)
  {
    $this->furballUrl = $furballUrl;
  }
  /**
   * @return string[]
   */
  public function getFurballUrl()
  {
    return $this->furballUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VideoContentSearchVideoAnchorRatingScore::class, 'Google_Service_Contentwarehouse_VideoContentSearchVideoAnchorRatingScore');
