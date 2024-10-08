<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1\ThreatInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Confidence that a URI is unsafe.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.ThreatInfo.Confidence</code>
 */
class Confidence extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           A decimal representation of confidence in the range of 0
     *           to 1 where 0 indicates no confidence and 1 indicates
     *           complete confidence.
     *     @type int $level
     *           Enum representation of confidence.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * A decimal representation of confidence in the range of 0
     * to 1 where 0 indicates no confidence and 1 indicates
     * complete confidence.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->readOneof(1);
    }

    public function hasScore()
    {
        return $this->hasOneof(1);
    }

    /**
     * A decimal representation of confidence in the range of 0
     * to 1 where 0 indicates no confidence and 1 indicates
     * complete confidence.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Enum representation of confidence.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.Confidence.ConfidenceLevel level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->readOneof(2);
    }

    public function hasLevel()
    {
        return $this->hasOneof(2);
    }

    /**
     * Enum representation of confidence.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.Confidence.ConfidenceLevel level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebRisk\V1\ThreatInfo\Confidence\ConfidenceLevel::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}


