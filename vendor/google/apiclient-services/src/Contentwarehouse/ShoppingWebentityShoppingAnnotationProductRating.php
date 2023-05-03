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

class ShoppingWebentityShoppingAnnotationProductRating extends \Google\Model
{
  /**
   * @var string
   */
  public $count;
  /**
   * @var string
   */
  public $maxValueMillis;
  /**
   * @var string
   */
  public $minValueMillis;
  /**
   * @var string
   */
  public $source;
  public $value;
  /**
   * @var string
   */
  public $valueMillis;

  /**
   * @param string
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * @param string
   */
  public function setMaxValueMillis($maxValueMillis)
  {
    $this->maxValueMillis = $maxValueMillis;
  }
  /**
   * @return string
   */
  public function getMaxValueMillis()
  {
    return $this->maxValueMillis;
  }
  /**
   * @param string
   */
  public function setMinValueMillis($minValueMillis)
  {
    $this->minValueMillis = $minValueMillis;
  }
  /**
   * @return string
   */
  public function getMinValueMillis()
  {
    return $this->minValueMillis;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
  /**
   * @param string
   */
  public function setValueMillis($valueMillis)
  {
    $this->valueMillis = $valueMillis;
  }
  /**
   * @return string
   */
  public function getValueMillis()
  {
    return $this->valueMillis;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShoppingWebentityShoppingAnnotationProductRating::class, 'Google_Service_Contentwarehouse_ShoppingWebentityShoppingAnnotationProductRating');
