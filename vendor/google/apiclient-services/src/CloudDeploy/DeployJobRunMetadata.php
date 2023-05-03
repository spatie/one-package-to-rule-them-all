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

namespace Google\Service\CloudDeploy;

class DeployJobRunMetadata extends \Google\Model
{
  protected $cloudRunType = CloudRunMetadata::class;
  protected $cloudRunDataType = '';

  /**
   * @param CloudRunMetadata
   */
  public function setCloudRun(CloudRunMetadata $cloudRun)
  {
    $this->cloudRun = $cloudRun;
  }
  /**
   * @return CloudRunMetadata
   */
  public function getCloudRun()
  {
    return $this->cloudRun;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeployJobRunMetadata::class, 'Google_Service_CloudDeploy_DeployJobRunMetadata');
