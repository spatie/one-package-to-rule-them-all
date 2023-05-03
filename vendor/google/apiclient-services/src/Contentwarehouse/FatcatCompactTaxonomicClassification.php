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

class FatcatCompactTaxonomicClassification extends \Google\Collection
{
  protected $collection_key = 'category';
  protected $categoryType = FatcatCompactTaxonomicClassificationCategory::class;
  protected $categoryDataType = 'array';
  /**
   * @var string
   */
  public $classifierVersion;
  /**
   * @var string
   */
  public $taxonomy;
  /**
   * @var string
   */
  public $taxonomyName;

  /**
   * @param FatcatCompactTaxonomicClassificationCategory[]
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return FatcatCompactTaxonomicClassificationCategory[]
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * @param string
   */
  public function setClassifierVersion($classifierVersion)
  {
    $this->classifierVersion = $classifierVersion;
  }
  /**
   * @return string
   */
  public function getClassifierVersion()
  {
    return $this->classifierVersion;
  }
  /**
   * @param string
   */
  public function setTaxonomy($taxonomy)
  {
    $this->taxonomy = $taxonomy;
  }
  /**
   * @return string
   */
  public function getTaxonomy()
  {
    return $this->taxonomy;
  }
  /**
   * @param string
   */
  public function setTaxonomyName($taxonomyName)
  {
    $this->taxonomyName = $taxonomyName;
  }
  /**
   * @return string
   */
  public function getTaxonomyName()
  {
    return $this->taxonomyName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FatcatCompactTaxonomicClassification::class, 'Google_Service_Contentwarehouse_FatcatCompactTaxonomicClassification');
