<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: request.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>key_3f0353039e1b2b387140a07447a756407</code>
 */
class key_3f0353039e1b2b387140a07447a756407 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 key15650380edfac20b657f5aeaa9b786fe2 = 1;</code>
     */
    protected $key15650380edfac20b657f5aeaa9b786fe2 = 0;
    /**
     * Generated from protobuf field <code>fixed32 key2ff7c8f5089af51b511c5ea6876960017 = 2;</code>
     */
    protected $key2ff7c8f5089af51b511c5ea6876960017 = 0;
    /**
     * Generated from protobuf field <code>fixed32 key3f0353039e1b2b387140a07447a756407 = 3;</code>
     */
    protected $key3f0353039e1b2b387140a07447a756407 = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $key15650380edfac20b657f5aeaa9b786fe2
     *     @type int $key2ff7c8f5089af51b511c5ea6876960017
     *     @type int $key3f0353039e1b2b387140a07447a756407
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>fixed32 key15650380edfac20b657f5aeaa9b786fe2 = 1;</code>
     * @return int
     */
    public function getKey15650380Edfac20B657F5Aeaa9B786Fe2()
    {
        return $this->key15650380edfac20b657f5aeaa9b786fe2;
    }

    /**
     * Generated from protobuf field <code>fixed32 key15650380edfac20b657f5aeaa9b786fe2 = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKey15650380Edfac20B657F5Aeaa9B786Fe2($var)
    {
        GPBUtil::checkUint32($var);
        $this->key15650380edfac20b657f5aeaa9b786fe2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 key2ff7c8f5089af51b511c5ea6876960017 = 2;</code>
     * @return int
     */
    public function getKey2Ff7C8F5089Af51B511C5Ea6876960017()
    {
        return $this->key2ff7c8f5089af51b511c5ea6876960017;
    }

    /**
     * Generated from protobuf field <code>fixed32 key2ff7c8f5089af51b511c5ea6876960017 = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKey2Ff7C8F5089Af51B511C5Ea6876960017($var)
    {
        GPBUtil::checkUint32($var);
        $this->key2ff7c8f5089af51b511c5ea6876960017 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 key3f0353039e1b2b387140a07447a756407 = 3;</code>
     * @return int
     */
    public function getKey3F0353039E1B2B387140A07447A756407()
    {
        return $this->key3f0353039e1b2b387140a07447a756407;
    }

    /**
     * Generated from protobuf field <code>fixed32 key3f0353039e1b2b387140a07447a756407 = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setKey3F0353039E1B2B387140A07447A756407($var)
    {
        GPBUtil::checkUint32($var);
        $this->key3f0353039e1b2b387140a07447a756407 = $var;

        return $this;
    }

}

