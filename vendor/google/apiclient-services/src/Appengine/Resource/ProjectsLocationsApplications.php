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

namespace Google\Service\Appengine\Resource;

use Google\Service\Appengine\Application;
use Google\Service\Appengine\Operation;

/**
 * The "applications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google\Service\Appengine(...);
 *   $applications = $appengineService->projects_locations_applications;
 *  </code>
 */
class ProjectsLocationsApplications extends \Google\Service\Resource
{
  /**
   * Creates an App Engine application for a Google Cloud Platform project.
   * Required fields: id - The ID of the target Cloud Platform project. location -
   * The region (https://cloud.google.com/appengine/docs/locations) where you want
   * the App Engine application located.For more information about App Engine
   * applications, see Managing Projects, Applications, and Billing
   * (https://cloud.google.com/appengine/docs/standard/python/console/).
   * (applications.create)
   *
   * @param string $projectsId Part of `parent`. The project and location in which
   * the application should be created, specified in the format projects/locations
   * @param string $locationsId Part of `parent`. See documentation of
   * `projectsId`.
   * @param Application $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function create($projectsId, $locationsId, Application $postBody, $optParams = [])
  {
    $params = ['projectsId' => $projectsId, 'locationsId' => $locationsId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Gets information about an application. (applications.get)
   *
   * @param string $projectsId Part of `name`. Name of the Application resource to
   * get. Example: apps/myapp.
   * @param string $locationsId Part of `name`. See documentation of `projectsId`.
   * @param string $applicationsId Part of `name`. See documentation of
   * `projectsId`.
   * @param array $optParams Optional parameters.
   * @return Application
   */
  public function get($projectsId, $locationsId, $applicationsId, $optParams = [])
  {
    $params = ['projectsId' => $projectsId, 'locationsId' => $locationsId, 'applicationsId' => $applicationsId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Application::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsApplications::class, 'Google_Service_Appengine_Resource_ProjectsLocationsApplications');
