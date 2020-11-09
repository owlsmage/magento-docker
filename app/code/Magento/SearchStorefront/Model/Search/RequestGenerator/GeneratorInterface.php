<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\SearchStorefront\Model\Search\RequestGenerator;

use Magento\SearchStorefront\Model\Eav\Attribute;

/**
 * Catalog search reguest generator interface.
 *
 * @api
 * @since 100.1.6
 */
interface GeneratorInterface
{
    /**
     * Get filter data for specific attribute.
     *
     * @param Attribute $attribute
     * @param string $filterName
     * @return array
     * @since 100.1.6
     */
    public function getFilterData(Attribute $attribute, $filterName);

    /**
     * Get aggregation data for specific attribute.
     *
     * @param Attribute $attribute
     * @param string $bucketName
     * @return array
     * @since 100.1.6
     */
    public function getAggregationData(Attribute $attribute, $bucketName);
}