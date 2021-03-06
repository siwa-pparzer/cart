<?php

namespace Extcode\Cart\Domain\Model\Product;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Product QuantityDiscount
 *
 * @author Daniel Lorenz <ext.cart@extco.de>
 */
class QuantityDiscount extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Price
     *
     * @var float
     * @validate NotEmpty
     */
    protected $price = 0.0;

    /**
     * Quantity (lower bound)
     *
     * @var int
     * @validate NotEmpty
     */
    protected $quantity = 0;

    /**
     * Frontend User Group
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup
     */
    protected $frontendUserGroup;

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'quantity' => $this->quantity,
            'price' => $this->price,
        ];
    }

    /**
     * Returns the Price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the Price
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the Quantity (lower bound)
     *Quantity (lower bound)
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the Quantity (lower bound)
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns the Frontend User Group
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup
     */
    public function getFrontendUserGroup()
    {
        return $this->frontendUserGroup;
    }

    /**
     * Sets the Frontend User Group
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $frontendUserGroup
     */
    public function setFrontendUserGroup($frontendUserGroup)
    {
        $this->setFrontendUserGroup = $frontendUserGroup;
    }
}
