<?php

namespace AbdulkadirBak\LaravelCart\Tests\Logistics;

use AbdulkadirBak\LaravelCart\Checkout;
use AbdulkadirBak\LaravelCart\Contracts\TaxLogistics as TaxLogisticsInterface;

class TaxLogistics implements TaxLogisticsInterface
{
    /**
     * Get the taxes given the checkout instance.
     *
     * @param \AbdulkadirBak\LaravelCart\Checkout $checkout
     *
     * @return float
     */
    public static function getTaxes(Checkout $checkout) : float
    {
        return round(($checkout->getSubtotal() - $checkout->getDiscount()) * 0.18, 2);
    }
}
