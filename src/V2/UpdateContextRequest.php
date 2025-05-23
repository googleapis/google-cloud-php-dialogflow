<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/context.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Contexts.UpdateContext][google.cloud.dialogflow.v2.Contexts.UpdateContext].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateContextRequest</code>
 */
class UpdateContextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The context to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Context context = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $context = null;
    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Dialogflow\V2\Context $context    Required. The context to update.
     * @param \Google\Protobuf\FieldMask          $updateMask Optional. The mask to control which fields get updated.
     *
     * @return \Google\Cloud\Dialogflow\V2\UpdateContextRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dialogflow\V2\Context $context, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setContext($context)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Context $context
     *           Required. The context to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Context::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The context to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Context context = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Context|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Required. The context to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Context context = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Context $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Context::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

