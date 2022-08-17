<?php

namespace App\Logistics;

use AbdulkadirBak\LaravelCart\Checkout;
use AbdulkadirBak\LaravelCart\Contracts\ShippingLogistics as ShippingLogisticsInterface;

class ShippingLogistics implements ShippingLogisticsInterface
{
    /**
     * Get the shipping cost given the checkout instance.
     *
     * @param \AbdulkadirBak\LaravelCart\Checkout $checkout
     *
     * @return float
     */
    public static function getShippingCost(Checkout $checkout) : float
    {
        // Determine the taxes as needed. Possibly helpful methods:

        // $checkout->getCustomField('shipping_address')
        // $checkout->getCart()

        return 0;
    }
}
