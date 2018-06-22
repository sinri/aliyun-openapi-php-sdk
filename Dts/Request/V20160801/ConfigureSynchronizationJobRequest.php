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

class ConfigureSynchronizationJobRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dts", "2016-08-01", "ConfigureSynchronizationJob");
		$this->setMethod("POST");
	}

	private  $partitionKeyModifyTime_Month;

	private  $dataInitialization;

	private  $destinationEndpointInstanceId;

	private  $partitionKeyModifyTime_Minute;

	private  $structureInitialization;

	private  $sourceEndpointOwnerID;

	private  $sourceEndpointRole;

	private  $partitionKeyModifyTime_Day;

	private  $synchronizationJobId;

	private  $partitionKeyModifyTime_Year;

	private  $synchronizationObjects;

	private  $synchronizationJobName;

	private  $partitionKeyModifyTime_Hour;

	private  $sourceEndpointInstanceId;

	public function getPartitionKeyModifyTime_Month() {
		return $this->partitionKeyModifyTime_Month;
	}

	public function setPartitionKeyModifyTime_Month($partitionKeyModifyTime_Month) {
		$this->partitionKeyModifyTime_Month = $partitionKeyModifyTime_Month;
		$this->queryParameters["PartitionKey.ModifyTime_Month"]=$partitionKeyModifyTime_Month;
	}

	public function getDataInitialization() {
		return $this->dataInitialization;
	}

	public function setDataInitialization($dataInitialization) {
		$this->dataInitialization = $dataInitialization;
		$this->queryParameters["DataInitialization"]=$dataInitialization;
	}

	public function getDestinationEndpointInstanceId() {
		return $this->destinationEndpointInstanceId;
	}

	public function setDestinationEndpointInstanceId($destinationEndpointInstanceId) {
		$this->destinationEndpointInstanceId = $destinationEndpointInstanceId;
		$this->queryParameters["DestinationEndpoint.InstanceId"]=$destinationEndpointInstanceId;
	}

	public function getPartitionKeyModifyTime_Minute() {
		return $this->partitionKeyModifyTime_Minute;
	}

	public function setPartitionKeyModifyTime_Minute($partitionKeyModifyTime_Minute) {
		$this->partitionKeyModifyTime_Minute = $partitionKeyModifyTime_Minute;
		$this->queryParameters["PartitionKey.ModifyTime_Minute"]=$partitionKeyModifyTime_Minute;
	}

	public function getStructureInitialization() {
		return $this->structureInitialization;
	}

	public function setStructureInitialization($structureInitialization) {
		$this->structureInitialization = $structureInitialization;
		$this->queryParameters["StructureInitialization"]=$structureInitialization;
	}

	public function getSourceEndpointOwnerID() {
		return $this->sourceEndpointOwnerID;
	}

	public function setSourceEndpointOwnerID($sourceEndpointOwnerID) {
		$this->sourceEndpointOwnerID = $sourceEndpointOwnerID;
		$this->queryParameters["SourceEndpoint.OwnerID"]=$sourceEndpointOwnerID;
	}

	public function getSourceEndpointRole() {
		return $this->sourceEndpointRole;
	}

	public function setSourceEndpointRole($sourceEndpointRole) {
		$this->sourceEndpointRole = $sourceEndpointRole;
		$this->queryParameters["SourceEndpoint.Role"]=$sourceEndpointRole;
	}

	public function getPartitionKeyModifyTime_Day() {
		return $this->partitionKeyModifyTime_Day;
	}

	public function setPartitionKeyModifyTime_Day($partitionKeyModifyTime_Day) {
		$this->partitionKeyModifyTime_Day = $partitionKeyModifyTime_Day;
		$this->queryParameters["PartitionKey.ModifyTime_Day"]=$partitionKeyModifyTime_Day;
	}

	public function getSynchronizationJobId() {
		return $this->synchronizationJobId;
	}

	public function setSynchronizationJobId($synchronizationJobId) {
		$this->synchronizationJobId = $synchronizationJobId;
		$this->queryParameters["SynchronizationJobId"]=$synchronizationJobId;
	}

	public function getPartitionKeyModifyTime_Year() {
		return $this->partitionKeyModifyTime_Year;
	}

	public function setPartitionKeyModifyTime_Year($partitionKeyModifyTime_Year) {
		$this->partitionKeyModifyTime_Year = $partitionKeyModifyTime_Year;
		$this->queryParameters["PartitionKey.ModifyTime_Year"]=$partitionKeyModifyTime_Year;
	}

	public function getSynchronizationObjects() {
		return $this->synchronizationObjects;
	}

	public function setSynchronizationObjects($synchronizationObjects) {
		$this->synchronizationObjects = $synchronizationObjects;
		$this->queryParameters["SynchronizationObjects"]=$synchronizationObjects;
	}

	public function getSynchronizationJobName() {
		return $this->synchronizationJobName;
	}

	public function setSynchronizationJobName($synchronizationJobName) {
		$this->synchronizationJobName = $synchronizationJobName;
		$this->queryParameters["SynchronizationJobName"]=$synchronizationJobName;
	}

	public function getPartitionKeyModifyTime_Hour() {
		return $this->partitionKeyModifyTime_Hour;
	}

	public function setPartitionKeyModifyTime_Hour($partitionKeyModifyTime_Hour) {
		$this->partitionKeyModifyTime_Hour = $partitionKeyModifyTime_Hour;
		$this->queryParameters["PartitionKey.ModifyTime_Hour"]=$partitionKeyModifyTime_Hour;
	}

	public function getSourceEndpointInstanceId() {
		return $this->sourceEndpointInstanceId;
	}

	public function setSourceEndpointInstanceId($sourceEndpointInstanceId) {
		$this->sourceEndpointInstanceId = $sourceEndpointInstanceId;
		$this->queryParameters["SourceEndpoint.InstanceId"]=$sourceEndpointInstanceId;
	}
	
}