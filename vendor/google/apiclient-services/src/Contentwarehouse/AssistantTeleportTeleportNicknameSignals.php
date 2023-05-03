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

class AssistantTeleportTeleportNicknameSignals extends \Google\Model
{
  /**
   * @var bool
   */
  public $hasLocationInterpretation;
  /**
   * @var string
   */
  public $installInfo;
  /**
   * @var bool
   */
  public $isGeneric;
  /**
   * @var string
   */
  public $nicknameTier;
  /**
   * @var string
   */
  public $source;

  /**
   * @param bool
   */
  public function setHasLocationInterpretation($hasLocationInterpretation)
  {
    $this->hasLocationInterpretation = $hasLocationInterpretation;
  }
  /**
   * @return bool
   */
  public function getHasLocationInterpretation()
  {
    return $this->hasLocationInterpretation;
  }
  /**
   * @param string
   */
  public function setInstallInfo($installInfo)
  {
    $this->installInfo = $installInfo;
  }
  /**
   * @return string
   */
  public function getInstallInfo()
  {
    return $this->installInfo;
  }
  /**
   * @param bool
   */
  public function setIsGeneric($isGeneric)
  {
    $this->isGeneric = $isGeneric;
  }
  /**
   * @return bool
   */
  public function getIsGeneric()
  {
    return $this->isGeneric;
  }
  /**
   * @param string
   */
  public function setNicknameTier($nicknameTier)
  {
    $this->nicknameTier = $nicknameTier;
  }
  /**
   * @return string
   */
  public function getNicknameTier()
  {
    return $this->nicknameTier;
  }
  /**
   * @param string
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantTeleportTeleportNicknameSignals::class, 'Google_Service_Contentwarehouse_AssistantTeleportTeleportNicknameSignals');
