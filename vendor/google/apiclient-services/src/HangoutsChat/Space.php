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

namespace Google\Service\HangoutsChat;

class Space extends \Google\Model
{
  /**
   * @var bool
   */
  public $adminInstalled;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $singleUserBotDm;
  protected $spaceDetailsType = SpaceDetails::class;
  protected $spaceDetailsDataType = '';
  /**
   * @var string
   */
  public $spaceThreadingState;
  /**
   * @var bool
   */
  public $threaded;
  /**
   * @var string
   */
  public $type;

  /**
   * @param bool
   */
  public function setAdminInstalled($adminInstalled)
  {
    $this->adminInstalled = $adminInstalled;
  }
  /**
   * @return bool
   */
  public function getAdminInstalled()
  {
    return $this->adminInstalled;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param bool
   */
  public function setSingleUserBotDm($singleUserBotDm)
  {
    $this->singleUserBotDm = $singleUserBotDm;
  }
  /**
   * @return bool
   */
  public function getSingleUserBotDm()
  {
    return $this->singleUserBotDm;
  }
  /**
   * @param SpaceDetails
   */
  public function setSpaceDetails(SpaceDetails $spaceDetails)
  {
    $this->spaceDetails = $spaceDetails;
  }
  /**
   * @return SpaceDetails
   */
  public function getSpaceDetails()
  {
    return $this->spaceDetails;
  }
  /**
   * @param string
   */
  public function setSpaceThreadingState($spaceThreadingState)
  {
    $this->spaceThreadingState = $spaceThreadingState;
  }
  /**
   * @return string
   */
  public function getSpaceThreadingState()
  {
    return $this->spaceThreadingState;
  }
  /**
   * @param bool
   */
  public function setThreaded($threaded)
  {
    $this->threaded = $threaded;
  }
  /**
   * @return bool
   */
  public function getThreaded()
  {
    return $this->threaded;
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
class_alias(Space::class, 'Google_Service_HangoutsChat_Space');
