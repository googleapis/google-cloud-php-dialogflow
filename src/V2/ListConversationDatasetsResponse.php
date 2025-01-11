<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_dataset.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [ConversationDatasets.ListConversationDatasets][google.cloud.dialogflow.v2.ConversationDatasets.ListConversationDatasets].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ListConversationDatasetsResponse</code>
 */
class ListConversationDatasetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of datasets to return.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationDataset conversation_datasets = 1;</code>
     */
    private $conversation_datasets;
    /**
     * The token to use to retrieve the next page of results, or empty if there
     * are no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\ConversationDataset>|\Google\Protobuf\Internal\RepeatedField $conversation_datasets
     *           The list of datasets to return.
     *     @type string $next_page_token
     *           The token to use to retrieve the next page of results, or empty if there
     *           are no more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationDataset::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of datasets to return.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationDataset conversation_datasets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversationDatasets()
    {
        return $this->conversation_datasets;
    }

    /**
     * The list of datasets to return.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationDataset conversation_datasets = 1;</code>
     * @param array<\Google\Cloud\Dialogflow\V2\ConversationDataset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversationDatasets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\ConversationDataset::class);
        $this->conversation_datasets = $arr;

        return $this;
    }

    /**
     * The token to use to retrieve the next page of results, or empty if there
     * are no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token to use to retrieve the next page of results, or empty if there
     * are no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

