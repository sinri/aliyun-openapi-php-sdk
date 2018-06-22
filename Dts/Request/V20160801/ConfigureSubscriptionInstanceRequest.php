<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Dts\Request\V20160801;

class ConfigureSubscriptionInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dts", "2016-08-01", "ConfigureSubscriptionInstance");
		$this->setMethod("POST");
	}

	private  $subscriptionInstanceId;

	private  $subscriptionDataTypeDML;

	private  $subscriptionDataTypeDDL;

	private  $subscriptionObject;

	private  $sourceEndpointInstanceID;

	private  $sourceEndpointInstanceType;

	private  $subscriptionInstanceName;

	public function getSubscriptionInstanceId() {
		return $this->subscriptionInstanceId;
	}

	public function setSubscriptionInstanceId($subscriptionInstanceId) {
		$this->subscriptionInstanceId = $subscriptionInstanceId;
		$this->queryParameters["SubscriptionInstanceId"]=$subscriptionInstanceId;
	}

	public function getSubscriptionDataTypeDML() {
		return $this->subscriptionDataTypeDML;
	}

	public function setSubscriptionDataTypeDML($subscriptionDataTypeDML) {
		$this->subscriptionDataTypeDML = $subscriptionDataTypeDML;
		$this->queryParameters["SubscriptionDataType.DML"]=$subscriptionDataTypeDML;
	}

	public function getSubscriptionDataTypeDDL() {
		return $this->subscriptionDataTypeDDL;
	}

	public function setSubscriptionDataTypeDDL($subscriptionDataTypeDDL) {
		$this->subscriptionDataTypeDDL = $subscriptionDataTypeDDL;
		$this->queryParameters["SubscriptionDataType.DDL"]=$subscriptionDataTypeDDL;
	}

	public function getSubscriptionObject() {
		return $this->subscriptionObject;
	}

	public function setSubscriptionObject($subscriptionObject) {
		$this->subscriptionObject = $subscriptionObject;
		$this->queryParameters["SubscriptionObject"]=$subscriptionObject;
	}

	public function getSourceEndpointInstanceID() {
		return $this->sourceEndpointInstanceID;
	}

	public function setSourceEndpointInstanceID($sourceEndpointInstanceID) {
		$this->sourceEndpointInstanceID = $sourceEndpointInstanceID;
		$this->queryParameters["SourceEndpoint.InstanceID"]=$sourceEndpointInstanceID;
	}

	public function getSourceEndpointInstanceType() {
		return $this->sourceEndpointInstanceType;
	}

	public function setSourceEndpointInstanceType($sourceEndpointInstanceType) {
		$this->sourceEndpointInstanceType = $sourceEndpointInstanceType;
		$this->queryParameters["SourceEndpoint.InstanceType"]=$sourceEndpointInstanceType;
	}

	public function getSubscriptionInstanceName() {
		return $this->subscriptionInstanceName;
	}

	public function setSubscriptionInstanceName($subscriptionInstanceName) {
		$this->subscriptionInstanceName = $subscriptionInstanceName;
		$this->queryParameters["SubscriptionInstanceName"]=$subscriptionInstanceName;
	}
	
}