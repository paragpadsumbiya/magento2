<?php
/**
 * Google Optimizer Category Block
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\GoogleOptimizer\Block\Code;

use Magento\Framework\DataObject\IdentityInterface;

/**
 * @api
 */
class Category extends \Magento\GoogleOptimizer\Block\AbstractCode implements IdentityInterface
{
    /**
     * @var string Entity name in registry
     */
    protected $_registryName = 'current_category';

    /**
     * Return identifiers for produced content
     *
     * @return array
     */
    public function getIdentities()
    {
        return $this->_getEntity()->getIdentities();
    }
}
