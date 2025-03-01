<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a smart reply answer.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SmartReplyAnswer</code>
 */
class SmartReplyAnswer extends \Google\Protobuf\Internal\Message
{
    /**
     * The content of the reply.
     *
     * Generated from protobuf field <code>string reply = 1;</code>
     */
    protected $reply = '';
    /**
     * Smart reply confidence.
     * The system's confidence score that this reply is a good match for
     * this conversation, as a value from 0.0 (completely uncertain) to 1.0
     * (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    protected $confidence = 0.0;
    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 3 [(.google.api.resource_reference) = {</code>
     */
    protected $answer_record = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reply
     *           The content of the reply.
     *     @type float $confidence
     *           Smart reply confidence.
     *           The system's confidence score that this reply is a good match for
     *           this conversation, as a value from 0.0 (completely uncertain) to 1.0
     *           (completely certain).
     *     @type string $answer_record
     *           The name of answer record, in the format of
     *           "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     *           ID>"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The content of the reply.
     *
     * Generated from protobuf field <code>string reply = 1;</code>
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * The content of the reply.
     *
     * Generated from protobuf field <code>string reply = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReply($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply = $var;

        return $this;
    }

    /**
     * Smart reply confidence.
     * The system's confidence score that this reply is a good match for
     * this conversation, as a value from 0.0 (completely uncertain) to 1.0
     * (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Smart reply confidence.
     * The system's confidence score that this reply is a good match for
     * this conversation, as a value from 0.0 (completely uncertain) to 1.0
     * (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAnswerRecord()
    {
        return $this->answer_record;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_record = $var;

        return $this;
    }

}

