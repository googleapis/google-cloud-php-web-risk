<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about how the threat was discovered.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.ThreatDiscovery</code>
 */
class ThreatDiscovery extends \Google\Protobuf\Internal\Message
{
    /**
     * Platform on which the threat was discovered.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatDiscovery.Platform platform = 1;</code>
     */
    protected $platform = 0;
    /**
     * CLDR region code of the countries/regions the URI poses a threat ordered
     * from most impact to least impact. Example: "US" for United States.
     *
     * Generated from protobuf field <code>repeated string region_codes = 2;</code>
     */
    private $region_codes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $platform
     *           Platform on which the threat was discovered.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $region_codes
     *           CLDR region code of the countries/regions the URI poses a threat ordered
     *           from most impact to least impact. Example: "US" for United States.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * Platform on which the threat was discovered.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatDiscovery.Platform platform = 1;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Platform on which the threat was discovered.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatDiscovery.Platform platform = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebRisk\V1\ThreatDiscovery\Platform::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * CLDR region code of the countries/regions the URI poses a threat ordered
     * from most impact to least impact. Example: "US" for United States.
     *
     * Generated from protobuf field <code>repeated string region_codes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegionCodes()
    {
        return $this->region_codes;
    }

    /**
     * CLDR region code of the countries/regions the URI poses a threat ordered
     * from most impact to least impact. Example: "US" for United States.
     *
     * Generated from protobuf field <code>repeated string region_codes = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegionCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->region_codes = $arr;

        return $this;
    }

}

