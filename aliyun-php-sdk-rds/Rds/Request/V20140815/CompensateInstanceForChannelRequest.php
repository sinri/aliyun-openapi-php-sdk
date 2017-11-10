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

namespace Rds\Request\V20140815;

class CompensateInstanceForChannelRequest extends \RpcAcsRequest
{
    function __construct()
    {
        parent::__construct("Rds", "2014-08-15", "CompensateInstanceForChannel", "rds", "openAPI");
        $this->setMethod("POST");
    }

    private $resourceOwnerId;

    private $resourceOwnerAccount;

    private $zoneId;

    private $subDomain;

    private $dBInstanceId;

    private $ownerId;

    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }

    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }

    public function getZoneId()
    {
        return $this->zoneId;
    }

    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;
        $this->queryParameters["ZoneId"] = $zoneId;
    }

    public function getSubDomain()
    {
        return $this->subDomain;
    }

    public function setSubDomain($subDomain)
    {
        $this->subDomain = $subDomain;
        $this->queryParameters["SubDomain"] = $subDomain;
    }

    public function getDBInstanceId()
    {
        return $this->dBInstanceId;
    }

    public function setDBInstanceId($dBInstanceId)
    {
        $this->dBInstanceId = $dBInstanceId;
        $this->queryParameters["DBInstanceId"] = $dBInstanceId;
    }

    public function getOwnerId()
    {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }

}