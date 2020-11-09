<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: search.proto

namespace Magento\SearchStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.searchStorefrontApi.proto.SearchRange</code>
 */
class SearchRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float from = 1;</code>
     */
    protected $from = 0.0;
    /**
     * Generated from protobuf field <code>float to = 2;</code>
     */
    protected $to = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $from
     *     @type float $to
     * }
     */
    public function __construct($data = null)
    {
        \Magento\SearchStorefrontApi\Metadata\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float from = 1;</code>
     * @return float
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Generated from protobuf field <code>float from = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkFloat($var);
        $this->from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float to = 2;</code>
     * @return float
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>float to = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkFloat($var);
        $this->to = $var;

        return $this;
    }
}