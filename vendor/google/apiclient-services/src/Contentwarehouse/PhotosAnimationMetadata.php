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

class PhotosAnimationMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $durationMs;
  /**
   * @var int
   */
  public $loopCount;
  /**
   * @var string
   */
  public $numFrames;

  /**
   * @param string
   */
  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }
  /**
   * @return string
   */
  public function getDurationMs()
  {
    return $this->durationMs;
  }
  /**
   * @param int
   */
  public function setLoopCount($loopCount)
  {
    $this->loopCount = $loopCount;
  }
  /**
   * @return int
   */
  public function getLoopCount()
  {
    return $this->loopCount;
  }
  /**
   * @param string
   */
  public function setNumFrames($numFrames)
  {
    $this->numFrames = $numFrames;
  }
  /**
   * @return string
   */
  public function getNumFrames()
  {
    return $this->numFrames;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PhotosAnimationMetadata::class, 'Google_Service_Contentwarehouse_PhotosAnimationMetadata');
