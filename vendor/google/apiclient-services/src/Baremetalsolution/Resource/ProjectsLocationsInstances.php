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

namespace Google\Service\Baremetalsolution\Resource;

use Google\Service\Baremetalsolution\DetachLunRequest;
use Google\Service\Baremetalsolution\DisableInteractiveSerialConsoleRequest;
use Google\Service\Baremetalsolution\EnableInteractiveSerialConsoleRequest;
use Google\Service\Baremetalsolution\Instance;
use Google\Service\Baremetalsolution\ListInstancesResponse;
use Google\Service\Baremetalsolution\Operation;
use Google\Service\Baremetalsolution\RenameInstanceRequest;
use Google\Service\Baremetalsolution\ResetInstanceRequest;
use Google\Service\Baremetalsolution\StartInstanceRequest;
use Google\Service\Baremetalsolution\StopInstanceRequest;

/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $baremetalsolutionService = new Google\Service\Baremetalsolution(...);
 *   $instances = $baremetalsolutionService->projects_locations_instances;
 *  </code>
 */
class ProjectsLocationsInstances extends \Google\Service\Resource
{
  /**
   * Create an Instance. (instances.create)
   *
   * @param string $parent Required. The parent project and location.
   * @param Instance $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function create($parent, Instance $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Detach LUN from Instance. (instances.detachLun)
   *
   * @param string $instance Required. Name of the instance.
   * @param DetachLunRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function detachLun($instance, DetachLunRequest $postBody, $optParams = [])
  {
    $params = ['instance' => $instance, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('detachLun', [$params], Operation::class);
  }
  /**
   * Disable the interactive serial console feature on an instance.
   * (instances.disableInteractiveSerialConsole)
   *
   * @param string $name Required. Name of the resource.
   * @param DisableInteractiveSerialConsoleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function disableInteractiveSerialConsole($name, DisableInteractiveSerialConsoleRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('disableInteractiveSerialConsole', [$params], Operation::class);
  }
  /**
   * Enable the interactive serial console feature on an instance.
   * (instances.enableInteractiveSerialConsole)
   *
   * @param string $name Required. Name of the resource.
   * @param EnableInteractiveSerialConsoleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function enableInteractiveSerialConsole($name, EnableInteractiveSerialConsoleRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enableInteractiveSerialConsole', [$params], Operation::class);
  }
  /**
   * Get details about a single server. (instances.get)
   *
   * @param string $name Required. Name of the resource.
   * @param array $optParams Optional parameters.
   * @return Instance
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Instance::class);
  }
  /**
   * List servers in a given project and location.
   * (instances.listProjectsLocationsInstances)
   *
   * @param string $parent Required. Parent value for ListInstancesRequest.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter List filter.
   * @opt_param int pageSize Requested page size. Server may return fewer items
   * than requested. If unspecified, the server will pick an appropriate default.
   * @opt_param string pageToken A token identifying a page of results from the
   * server.
   * @return ListInstancesResponse
   */
  public function listProjectsLocationsInstances($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListInstancesResponse::class);
  }
  /**
   * Update details of a single server. (instances.patch)
   *
   * @param string $name Immutable. The resource name of this `Instance`. Resource
   * names are schemeless URIs that follow the conventions in
   * https://cloud.google.com/apis/design/resource_names. Format:
   * `projects/{project}/locations/{location}/instances/{instance}`
   * @param Instance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The list of fields to update. The currently
   * supported fields are: `labels` `hyperthreading_enabled` `os_image`
   * @return Operation
   */
  public function patch($name, Instance $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
  /**
   * RenameInstance sets a new name for an instance. Use with caution, previous
   * names become immediately invalidated. (instances.rename)
   *
   * @param string $name Required. The `name` field is used to identify the
   * instance. Format:
   * projects/{project}/locations/{location}/instances/{instance}
   * @param RenameInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Instance
   */
  public function rename($name, RenameInstanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rename', [$params], Instance::class);
  }
  /**
   * Perform an ungraceful, hard reset on a server. Equivalent to shutting the
   * power off and then turning it back on. (instances.reset)
   *
   * @param string $name Required. Name of the resource.
   * @param ResetInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function reset($name, ResetInstanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('reset', [$params], Operation::class);
  }
  /**
   * Starts a server that was shutdown. (instances.start)
   *
   * @param string $name Required. Name of the resource.
   * @param StartInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function start($name, StartInstanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('start', [$params], Operation::class);
  }
  /**
   * Stop a running server. (instances.stop)
   *
   * @param string $name Required. Name of the resource.
   * @param StopInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function stop($name, StopInstanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stop', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsInstances::class, 'Google_Service_Baremetalsolution_Resource_ProjectsLocationsInstances');
