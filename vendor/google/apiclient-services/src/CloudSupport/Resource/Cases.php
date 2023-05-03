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

namespace Google\Service\CloudSupport\Resource;

use Google\Service\CloudSupport\CloseCaseRequest;
use Google\Service\CloudSupport\CloudsupportCase;
use Google\Service\CloudSupport\EscalateCaseRequest;
use Google\Service\CloudSupport\ListCasesResponse;
use Google\Service\CloudSupport\SearchCasesResponse;

/**
 * The "cases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudsupportService = new Google\Service\CloudSupport(...);
 *   $cases = $cloudsupportService->cases;
 *  </code>
 */
class Cases extends \Google\Service\Resource
{
  /**
   * Close the specified case. (cases.close)
   *
   * @param string $name Required. The fully qualified name of the case resource
   * to be closed.
   * @param CloseCaseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CloudsupportCase
   */
  public function close($name, CloseCaseRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('close', [$params], CloudsupportCase::class);
  }
  /**
   * Create a new case and associate it with the given Cloud resource. The case
   * object must have the following fields set: display_name, description,
   * classification, and severity. (cases.create)
   *
   * @param string $parent Required. The name of the Cloud resource under which
   * the case should be created.
   * @param CloudsupportCase $postBody
   * @param array $optParams Optional parameters.
   * @return CloudsupportCase
   */
  public function create($parent, CloudsupportCase $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], CloudsupportCase::class);
  }
  /**
   * Escalate a case. Escalating a case will initiate the Cloud Support escalation
   * management process. This operation is only available to certain Customer Care
   * tiers. Go to https://cloud.google.com/support and look for 'Technical support
   * escalations' in the feature list to find out which tiers are able to perform
   * escalations. (cases.escalate)
   *
   * @param string $name Required. The fully qualified name of the Case resource
   * to be escalated.
   * @param EscalateCaseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CloudsupportCase
   */
  public function escalate($name, EscalateCaseRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('escalate', [$params], CloudsupportCase::class);
  }
  /**
   * Retrieve the specified case. (cases.get)
   *
   * @param string $name Required. The fully qualified name of a case to be
   * retrieved.
   * @param array $optParams Optional parameters.
   * @return CloudsupportCase
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], CloudsupportCase::class);
  }
  /**
   * Retrieve all cases under the specified parent. Note: Listing cases under an
   * Organization returns only the cases directly parented by that organization.
   * To retrieve all cases under an organization, including cases parented by
   * projects under that organization, use `cases.search`. (cases.listCases)
   *
   * @param string $parent Required. The fully qualified name of parent resource
   * to list cases under.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter An expression written in filter language. If non-
   * empty, the query returns the cases that match the filter. Else, the query
   * doesn't filter the cases. Filter expressions use the following fields with
   * the operators equals (`=`) and `AND`: - `state`: The accepted values are
   * `OPEN` or `CLOSED`. - `priority`: The accepted values are `P0`, `P1`, `P2`,
   * `P3`, or `P4`. You can specify multiple values for priority using the `OR`
   * operator. For example, `priority=P1 OR priority=P2`. - [DEPRECATED]
   * `severity`: The accepted values are `S0`, `S1`, `S2`, `S3`, or `S4`. -
   * `creator.email`: The email address of the case creator. Examples: -
   * `state=CLOSED` - `state=OPEN AND creator.email="tester@example.com"` -
   * `state=OPEN AND (priority=P0 OR priority=P1)`
   * @opt_param int pageSize The maximum number of cases fetched with each
   * request. Defaults to 10.
   * @opt_param string pageToken A token identifying the page of results to
   * return. If unspecified, the first page is retrieved.
   * @return ListCasesResponse
   */
  public function listCases($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListCasesResponse::class);
  }
  /**
   * Update the specified case. Only a subset of fields can be updated.
   * (cases.patch)
   *
   * @param string $name The resource name for the case.
   * @param CloudsupportCase $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask A list of attributes of the case object that
   * should be updated as part of this request. Supported values are severity,
   * display_name, and subscriber_email_addresses. If no fields are specified, all
   * supported fields are updated. WARNING: If you do not provide a field mask,
   * then you may accidentally clear some fields. For example, if you leave field
   * mask empty and do not provide a value for subscriber_email_addresses, then
   * subscriber_email_addresses is updated to empty.
   * @return CloudsupportCase
   */
  public function patch($name, CloudsupportCase $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], CloudsupportCase::class);
  }
  /**
   * Search cases using the specified query. (cases.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of cases fetched with each
   * request. The default page size is 10.
   * @opt_param string pageToken A token identifying the page of results to
   * return. If unspecified, the first page is retrieved.
   * @opt_param string query An expression written in filter language. A query
   * uses the following fields with the operators equals (`=`) and `AND`: -
   * `organization`: An organization name in the form `organizations/`. -
   * `project`: A project name in the form `projects/`. - `state`: The accepted
   * values are `OPEN` or `CLOSED`. - `priority`: The accepted values are `P0`,
   * `P1`, `P2`, `P3`, or `P4`. You can specify multiple values for priority using
   * the `OR` operator. For example, `priority=P1 OR priority=P2`. - [DEPRECATED]
   * `severity`: The accepted values are `S0`, `S1`, `S2`, `S3`, or `S4`. -
   * `creator.email`: The email address of the case creator. - `billingAccount`: A
   * billing account in the form `billingAccounts/` You must specify eitehr
   * `organization` or `project`. To search across `displayName`, `description`,
   * and comments, use a global restriction with no keyword or operator. For
   * example, `"my search"`. To search only cases updated after a certain date,
   * use `update_time` retricted with that particular date, time, and timezone in
   * ISO datetime format. For example, `update_time>"2020-01-01T00:00:00-05:00"`.
   * `update_time` only supports the greater than operator (`>`). Examples: -
   * `organization="organizations/123456789"` - `project="projects/my-project-id"`
   * - `project="projects/123456789"` -
   * `billing_account="billingAccounts/123456-A0B0C0-CUZ789"` -
   * `organization="organizations/123456789" AND state=CLOSED` -
   * `project="projects/my-project-id" AND creator.email="tester@example.com"` -
   * `project="projects/my-project-id" AND (priority=P0 OR priority=P1)`
   * @return SearchCasesResponse
   */
  public function search($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], SearchCasesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Cases::class, 'Google_Service_CloudSupport_Resource_Cases');
