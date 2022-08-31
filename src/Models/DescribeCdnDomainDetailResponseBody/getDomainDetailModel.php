<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeCdnDomainDetailResponseBody;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel\sourceModels;
use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel\sources;
use AlibabaCloud\Tea\Model;

class getDomainDetailModel extends Model
{
    /**
     * @var string
     */
    public $cdnType;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $httpsCname;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @var sourceModels
     */
    public $sourceModels;

    /**
     * @var int
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var sources
     */
    public $sources;
    protected $_name = [
        'cdnType'                 => 'CdnType',
        'cname'                   => 'Cname',
        'description'             => 'Description',
        'domainName'              => 'DomainName',
        'domainStatus'            => 'DomainStatus',
        'gmtCreated'              => 'GmtCreated',
        'gmtModified'             => 'GmtModified',
        'httpsCname'              => 'HttpsCname',
        'region'                  => 'Region',
        'resourceGroupId'         => 'ResourceGroupId',
        'scope'                   => 'Scope',
        'serverCertificateStatus' => 'ServerCertificateStatus',
        'sourceModels'            => 'SourceModels',
        'sourcePort'              => 'SourcePort',
        'sourceType'              => 'SourceType',
        'sources'                 => 'Sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->httpsCname) {
            $res['HttpsCname'] = $this->httpsCname;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
        }
        if (null !== $this->sourceModels) {
            $res['SourceModels'] = null !== $this->sourceModels ? $this->sourceModels->toMap() : null;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getDomainDetailModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HttpsCname'])) {
            $model->httpsCname = $map['HttpsCname'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }
        if (isset($map['SourceModels'])) {
            $model->sourceModels = sourceModels::fromMap($map['SourceModels']);
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
