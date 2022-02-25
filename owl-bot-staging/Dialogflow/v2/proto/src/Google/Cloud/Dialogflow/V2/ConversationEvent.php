<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_event.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a notification sent to Pub/Sub subscribers for conversation
 * lifecycle events.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ConversationEvent</code>
 */
class ConversationEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the conversation this notification
     * refers to.
     * Format: `projects/<Project ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string conversation = 1;</code>
     */
    protected $conversation = '';
    /**
     * The type of the event that this notification refers to.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationEvent.Type type = 2;</code>
     */
    protected $type = 0;
    /**
     * More detailed information about an error. Only set for type
     * UNRECOVERABLE_ERROR_IN_PHONE_CALL.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 3;</code>
     */
    protected $error_status = null;
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conversation
     *           The unique identifier of the conversation this notification
     *           refers to.
     *           Format: `projects/<Project ID>/conversations/<Conversation ID>`.
     *     @type int $type
     *           The type of the event that this notification refers to.
     *     @type \Google\Rpc\Status $error_status
     *           More detailed information about an error. Only set for type
     *           UNRECOVERABLE_ERROR_IN_PHONE_CALL.
     *     @type \Google\Cloud\Dialogflow\V2\Message $new_message_payload
     *           Payload of NEW_MESSAGE event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the conversation this notification
     * refers to.
     * Format: `projects/<Project ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string conversation = 1;</code>
     * @return string
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    /**
     * The unique identifier of the conversation this notification
     * refers to.
     * Format: `projects/<Project ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string conversation = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConversation($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation = $var;

        return $this;
    }

    /**
     * The type of the event that this notification refers to.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationEvent.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the event that this notification refers to.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationEvent.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\ConversationEvent\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * More detailed information about an error. Only set for type
     * UNRECOVERABLE_ERROR_IN_PHONE_CALL.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getErrorStatus()
    {
        return $this->error_status;
    }

    public function hasErrorStatus()
    {
        return isset($this->error_status);
    }

    public function clearErrorStatus()
    {
        unset($this->error_status);
    }

    /**
     * More detailed information about an error. Only set for type
     * UNRECOVERABLE_ERROR_IN_PHONE_CALL.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setErrorStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error_status = $var;

        return $this;
    }

    /**
     * Payload of NEW_MESSAGE event.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Message new_message_payload = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\Message|null
     */
    public function getNewMessagePayload()
    {
        return $this->readOneof(4);
    }

    public function hasNewMessagePayload()
    {
        return $this->hasOneof(4);
    }

    /**
     * Payload of NEW_MESSAGE event.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Message new_message_payload = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\Message $var
     * @return $this
     */
    public function setNewMessagePayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Message::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

