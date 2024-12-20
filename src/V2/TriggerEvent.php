<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/generator.proto

namespace Google\Cloud\Dialogflow\V2;

use UnexpectedValueException;

/**
 * The event that triggers the generator and LLM execution.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.TriggerEvent</code>
 */
class TriggerEvent
{
    /**
     * Default value for TriggerEvent.
     *
     * Generated from protobuf enum <code>TRIGGER_EVENT_UNSPECIFIED = 0;</code>
     */
    const TRIGGER_EVENT_UNSPECIFIED = 0;
    /**
     * Triggers when each chat message or voice utterance ends.
     *
     * Generated from protobuf enum <code>END_OF_UTTERANCE = 1;</code>
     */
    const END_OF_UTTERANCE = 1;
    /**
     * Triggers on the conversation manually by API calls, such as
     * Conversations.GenerateStatelessSuggestion and
     * Conversations.GenerateSuggestions.
     *
     * Generated from protobuf enum <code>MANUAL_CALL = 2;</code>
     */
    const MANUAL_CALL = 2;

    private static $valueToName = [
        self::TRIGGER_EVENT_UNSPECIFIED => 'TRIGGER_EVENT_UNSPECIFIED',
        self::END_OF_UTTERANCE => 'END_OF_UTTERANCE',
        self::MANUAL_CALL => 'MANUAL_CALL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
