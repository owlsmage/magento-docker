<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: search.proto

namespace Magento\SearchStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.searchStorefrontApi.proto.ProductsSearchResult</code>
 */
class ProductsSearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total_count = 1;</code>
     */
    protected $total_count = 0;
    /**
     * response items - at the moment item has only 1 field: product id
     *
     * Generated from protobuf field <code>repeated string items = 2;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>repeated .magento.searchStorefrontApi.proto.Bucket facets = 3;</code>
     */
    private $facets;
    /**
     * Generated from protobuf field <code>.magento.searchStorefrontApi.proto.SearchResultPageInfo page_info = 4;</code>
     */
    protected $page_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_count
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $items
     *           response items - at the moment item has only 1 field: product id
     *     @type \Magento\SearchStorefrontApi\Proto\Bucket[]|\Google\Protobuf\Internal\RepeatedField $facets
     *     @type \Magento\SearchStorefrontApi\Proto\SearchResultPageInfo $page_info
     * }
     */
    public function __construct($data = null)
    {
        \Magento\SearchStorefrontApi\Metadata\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 total_count = 1;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Generated from protobuf field <code>int32 total_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     * response items - at the moment item has only 1 field: product id
     *
     * Generated from protobuf field <code>repeated string items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * response items - at the moment item has only 1 field: product id
     *
     * Generated from protobuf field <code>repeated string items = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.searchStorefrontApi.proto.Bucket facets = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.searchStorefrontApi.proto.Bucket facets = 3;</code>
     * @param \Magento\SearchStorefrontApi\Proto\Bucket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFacets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\SearchStorefrontApi\Proto\Bucket::class);
        $this->facets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.magento.searchStorefrontApi.proto.SearchResultPageInfo page_info = 4;</code>
     * @return \Magento\SearchStorefrontApi\Proto\SearchResultPageInfo
     */
    public function getPageInfo()
    {
        return $this->page_info;
    }

    /**
     * Generated from protobuf field <code>.magento.searchStorefrontApi.proto.SearchResultPageInfo page_info = 4;</code>
     * @param \Magento\SearchStorefrontApi\Proto\SearchResultPageInfo $var
     * @return $this
     */
    public function setPageInfo($var)
    {
        GPBUtil::checkMessage($var, \Magento\SearchStorefrontApi\Proto\SearchResultPageInfo::class);
        $this->page_info = $var;

        return $this;
    }
}