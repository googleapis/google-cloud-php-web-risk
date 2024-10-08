<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to send a potentially phishy URI to WebRisk.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.CreateSubmissionRequest</code>
 */
class CreateSubmissionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project that is making the submission. This
     * string is in the format "projects/{project_number}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The submission that contains the content of the phishing report.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.Submission submission = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $submission = null;

    /**
     * @param string                              $parent     Required. The name of the project that is making the submission. This
     *                                                        string is in the format "projects/{project_number}". Please see
     *                                                        {@see WebRiskServiceClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\WebRisk\V1\Submission $submission Required. The submission that contains the content of the phishing report.
     *
     * @return \Google\Cloud\WebRisk\V1\CreateSubmissionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\WebRisk\V1\Submission $submission): self
    {
        return (new self())
            ->setParent($parent)
            ->setSubmission($submission);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project that is making the submission. This
     *           string is in the format "projects/{project_number}".
     *     @type \Google\Cloud\WebRisk\V1\Submission $submission
     *           Required. The submission that contains the content of the phishing report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project that is making the submission. This
     * string is in the format "projects/{project_number}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project that is making the submission. This
     * string is in the format "projects/{project_number}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The submission that contains the content of the phishing report.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.Submission submission = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\WebRisk\V1\Submission|null
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    public function hasSubmission()
    {
        return isset($this->submission);
    }

    public function clearSubmission()
    {
        unset($this->submission);
    }

    /**
     * Required. The submission that contains the content of the phishing report.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.Submission submission = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\WebRisk\V1\Submission $var
     * @return $this
     */
    public function setSubmission($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebRisk\V1\Submission::class);
        $this->submission = $var;

        return $this;
    }

}

