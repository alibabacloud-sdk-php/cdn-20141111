<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainSrcFlowDataResponseBody\srcFlowDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainSrcFlowDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var srcFlowDataPerInterval
     */
    public $srcFlowDataPerInterval;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'           => 'DataInterval',
        'domainName'             => 'DomainName',
        'endTime'                => 'EndTime',
        'requestId'              => 'RequestId',
        'srcFlowDataPerInterval' => 'SrcFlowDataPerInterval',
        'startTime'              => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->srcFlowDataPerInterval) {
            $res['SrcFlowDataPerInterval'] = null !== $this->srcFlowDataPerInterval ? $this->srcFlowDataPerInterval->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSrcFlowDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SrcFlowDataPerInterval'])) {
            $model->srcFlowDataPerInterval = srcFlowDataPerInterval::fromMap($map['SrcFlowDataPerInterval']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
