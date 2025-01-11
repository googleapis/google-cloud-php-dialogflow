<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent\Message\ListSelect;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An item in the list.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.ListSelect.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Additional information about this option.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.SelectItemInfo info = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $info = null;
    /**
     * Required. The title of the list item.
     *
     * Generated from protobuf field <code>string title = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $title = '';
    /**
     * Optional. The main text describing the item.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. The image to display.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $image = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\SelectItemInfo $info
     *           Required. Additional information about this option.
     *     @type string $title
     *           Required. The title of the list item.
     *     @type string $description
     *           Optional. The main text describing the item.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\Image $image
     *           Optional. The image to display.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Additional information about this option.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.SelectItemInfo info = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\SelectItemInfo|null
     */
    public function getInfo()
    {
        return $this->info;
    }

    public function hasInfo()
    {
        return isset($this->info);
    }

    public function clearInfo()
    {
        unset($this->info);
    }

    /**
     * Required. Additional information about this option.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.SelectItemInfo info = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\SelectItemInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\SelectItemInfo::class);
        $this->info = $var;

        return $this;
    }

    /**
     * Required. The title of the list item.
     *
     * Generated from protobuf field <code>string title = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Required. The title of the list item.
     *
     * Generated from protobuf field <code>string title = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional. The main text describing the item.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The main text describing the item.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. The image to display.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * Optional. The image to display.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\Image::class);
        $this->image = $var;

        return $this;
    }

}


