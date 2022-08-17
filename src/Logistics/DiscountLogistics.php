<?php

namespace App\Logistics;

use AbdulkadirBak\LaravelCart\Checkout;
use AbdulkadirBak\LaravelCart\Contracts\DiscountLogistics as DiscountLogisticsInterface;

class DiscountLogistics implements DiscountLogisticsInterface
{
    /**
     * Get the discount amount for the checkout given the provided
     * discount code.
     *
     * Note: This should always return the **dollar amount** to discount
     * from the checkout, even if a percentage code is applied.
     *
     * @param \AbdulkadirBak\LaravelCart\Checkout $checkout
     * @param string $code
     *
     * @return float
     */
    public static function getDiscountFromCode(Checkout $checkout, string $code) : float
    {
        // Determine the discount amount as needed. Possibly helpful methods:

        // $checkout->getSubtotal()

        return 0;
    }
}
