<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2\KnowledgeAssistAnswer\KnowledgeAnswer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about source of Generative answer.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.KnowledgeAssistAnswer.KnowledgeAnswer.GenerativeSource</code>
 */
class GenerativeSource extends \Google\Protobuf\Internal\Message
{
    /**
     * All snippets used for this Generative Prediction, with their source URI
     * and data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.KnowledgeAssistAnswer.KnowledgeAnswer.GenerativeSource.Snippet snippets = 1;</code>
     */
    private $snippets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\KnowledgeAssistAnswer\KnowledgeAnswer\GenerativeSource\Snippet>|\Google\Protobuf\Internal\RepeatedField $snippets
     *           All snippets used for this Generative Prediction, with their source URI
     *           and data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * All snippets used for this Generative Prediction, with their source URI
     * and data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.KnowledgeAssistAnswer.KnowledgeAnswer.GenerativeSource.Snippet snippets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnippets()
    {
        return $this->snippets;
    }

    /**
     * All snippets used for this Generative Prediction, with their source URI
     * and data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.KnowledgeAssistAnswer.KnowledgeAnswer.GenerativeSource.Snippet snippets = 1;</code>
     * @param array<\Google\Cloud\Dialogflow\V2\KnowledgeAssistAnswer\KnowledgeAnswer\GenerativeSource\Snippet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnippets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\KnowledgeAssistAnswer\KnowledgeAnswer\GenerativeSource\Snippet::class);
        $this->snippets = $arr;

        return $this;
    }

}


