<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.webrisk.v1.SearchUrisResponse</code>
 */
class SearchUrisResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The threat list matches. This might be empty if the URI is on no list.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.SearchUrisResponse.ThreatUri threat = 1;</code>
     */
    protected $threat = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\WebRisk\V1\SearchUrisResponse\ThreatUri $threat
     *           The threat list matches. This might be empty if the URI is on no list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The threat list matches. This might be empty if the URI is on no list.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.SearchUrisResponse.ThreatUri threat = 1;</code>
     * @return \Google\Cloud\WebRisk\V1\SearchUrisResponse\ThreatUri|null
     */
    public function getThreat()
    {
        return $this->threat;
    }

    public function hasThreat()
    {
        return isset($this->threat);
    }

    public function clearThreat()
    {
        unset($this->threat);
    }

    /**
     * The threat list matches. This might be empty if the URI is on no list.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.SearchUrisResponse.ThreatUri threat = 1;</code>
     * @param \Google\Cloud\WebRisk\V1\SearchUrisResponse\ThreatUri $var
     * @return $this
     */
    public function setThreat($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebRisk\V1\SearchUrisResponse\ThreatUri::class);
        $this->threat = $var;

        return $this;
    }

}

