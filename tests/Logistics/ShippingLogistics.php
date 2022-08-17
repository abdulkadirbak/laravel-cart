<?php

namespace AbdulkadirBak\LaravelCart\Tests\Logistics;

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
        return 5 * $checkout->getCart()->items()->count();
    }
}
