<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/answer_record.proto

namespace Google\Cloud\Dialogflow\V2\AgentAssistantFeedback;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Feedback for conversation summarization.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.AgentAssistantFeedback.SummarizationFeedback</code>
 */
class SummarizationFeedback extends \Google\Protobuf\Internal\Message
{
    /**
     * Timestamp when composing of the summary starts.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * Timestamp when the summary was submitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 2;</code>
     */
    protected $submit_time = null;
    /**
     * Text of actual submitted summary.
     *
     * Generated from protobuf field <code>string summary_text = 3;</code>
     */
    protected $summary_text = '';
    /**
     * Optional. Actual text sections of submitted summary.
     *
     * Generated from protobuf field <code>map<string, string> text_sections = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $text_sections;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Timestamp when composing of the summary starts.
     *     @type \Google\Protobuf\Timestamp $submit_time
     *           Timestamp when the summary was submitted.
     *     @type string $summary_text
     *           Text of actual submitted summary.
     *     @type array|\Google\Protobuf\Internal\MapField $text_sections
     *           Optional. Actual text sections of submitted summary.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AnswerRecord::initOnce();
        parent::__construct($data);
    }

    /**
     * Timestamp when composing of the summary starts.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Timestamp when composing of the summary starts.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Timestamp when the summary was submitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSubmitTime()
    {
        return $this->submit_time;
    }

    public function hasSubmitTime()
    {
        return isset($this->submit_time);
    }

    public function clearSubmitTime()
    {
        unset($this->submit_time);
    }

    /**
     * Timestamp when the summary was submitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSubmitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->submit_time = $var;

        return $this;
    }

    /**
     * Text of actual submitted summary.
     *
     * Generated from protobuf field <code>string summary_text = 3;</code>
     * @return string
     */
    public function getSummaryText()
    {
        return $this->summary_text;
    }

    /**
     * Text of actual submitted summary.
     *
     * Generated from protobuf field <code>string summary_text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSummaryText($var)
    {
        GPBUtil::checkString($var, True);
        $this->summary_text = $var;

        return $this;
    }

    /**
     * Optional. Actual text sections of submitted summary.
     *
     * Generated from protobuf field <code>map<string, string> text_sections = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTextSections()
    {
        return $this->text_sections;
    }

    /**
     * Optional. Actual text sections of submitted summary.
     *
     * Generated from protobuf field <code>map<string, string> text_sections = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTextSections($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->text_sections = $arr;

        return $this;
    }

}


