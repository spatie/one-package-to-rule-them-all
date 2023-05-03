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

class YoutubeDiscoveryLegosLegosAnnotation extends \Google\Model
{
  protected $entityType = YoutubeDiscoveryLegosLegosEntity::class;
  protected $entityDataType = '';
  protected $formatType = YoutubeDiscoveryLegosLegosFormatRelationship::class;
  protected $formatDataType = '';
  protected $presentType = YoutubeDiscoveryLegosLegosPresentRelationship::class;
  protected $presentDataType = '';
  protected $semanticType = YoutubeDiscoveryLegosLegosSemanticRelationship::class;
  protected $semanticDataType = '';
  protected $taxonomicType = YoutubeDiscoveryLegosLegosTaxonomicRelationship::class;
  protected $taxonomicDataType = '';

  /**
   * @param YoutubeDiscoveryLegosLegosEntity
   */
  public function setEntity(YoutubeDiscoveryLegosLegosEntity $entity)
  {
    $this->entity = $entity;
  }
  /**
   * @return YoutubeDiscoveryLegosLegosEntity
   */
  public function getEntity()
  {
    return $this->entity;
  }
  /**
   * @param YoutubeDiscoveryLegosLegosFormatRelationship
   */
  public function setFormat(YoutubeDiscoveryLegosLegosFormatRelationship $format)
  {
    $this->format = $format;
  }
  /**
   * @return YoutubeDiscoveryLegosLegosFormatRelationship
   */
  public function getFormat()
  {
    return $this->format;
  }
  /**
   * @param YoutubeDiscoveryLegosLegosPresentRelationship
   */
  public function setPresent(YoutubeDiscoveryLegosLegosPresentRelationship $present)
  {
    $this->present = $present;
  }
  /**
   * @return YoutubeDiscoveryLegosLegosPresentRelationship
   */
  public function getPresent()
  {
    return $this->present;
  }
  /**
   * @param YoutubeDiscoveryLegosLegosSemanticRelationship
   */
  public function setSemantic(YoutubeDiscoveryLegosLegosSemanticRelationship $semantic)
  {
    $this->semantic = $semantic;
  }
  /**
   * @return YoutubeDiscoveryLegosLegosSemanticRelationship
   */
  public function getSemantic()
  {
    return $this->semantic;
  }
  /**
   * @param YoutubeDiscoveryLegosLegosTaxonomicRelationship
   */
  public function setTaxonomic(YoutubeDiscoveryLegosLegosTaxonomicRelationship $taxonomic)
  {
    $this->taxonomic = $taxonomic;
  }
  /**
   * @return YoutubeDiscoveryLegosLegosTaxonomicRelationship
   */
  public function getTaxonomic()
  {
    return $this->taxonomic;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeDiscoveryLegosLegosAnnotation::class, 'Google_Service_Contentwarehouse_YoutubeDiscoveryLegosLegosAnnotation');
