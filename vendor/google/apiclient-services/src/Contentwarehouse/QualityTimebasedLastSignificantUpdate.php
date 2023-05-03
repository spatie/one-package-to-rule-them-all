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

class QualityTimebasedLastSignificantUpdate extends \Google\Model
{
  protected $adjustmentInfoType = QualityTimebasedLastSignificantUpdateAdjustments::class;
  protected $adjustmentInfoDataType = '';
  /**
   * @var string
   */
  public $date;
  /**
   * @var string
   */
  public $source;

  /**
   * @param QualityTimebasedLastSignificantUpdateAdjustments
   */
  public function setAdjustmentInfo(QualityTimebasedLastSignificantUpdateAdjustments $adjustmentInfo)
  {
    $this->adjustmentInfo = $adjustmentInfo;
  }
  /**
   * @return QualityTimebasedLastSignificantUpdateAdjustments
   */
  public function getAdjustmentInfo()
  {
    return $this->adjustmentInfo;
  }
  /**
   * @param string
   */
  public function setDate($date)
  {
    $this->date = $date;
  }
  /**
   * @return string
   */
  public function getDate()
  {
    return $this->date;
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
class_alias(QualityTimebasedLastSignificantUpdate::class, 'Google_Service_Contentwarehouse_QualityTimebasedLastSignificantUpdate');
