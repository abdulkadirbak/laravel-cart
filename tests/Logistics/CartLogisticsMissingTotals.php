<?php

namespace AbdulkadirBak\LaravelCart\Tests\Logistics;

use AbdulkadirBak\LaravelCart\Checkout;
use AbdulkadirBak\LaravelCart\Tests\Logistics\CartLogistics;
use AbdulkadirBak\LaravelCart\Contracts\CartLogistics as CartLogisticsInterface;

class CartLogisticsMissingTotals extends CartLogistics implements CartLogisticsInterface
{
    /**
     * Determines if a checkout has all the information required to complete checkout.
     *
     * @param \AbdulkadirBak\LaravelCart\Checkout $checkout
     *
     * @return bool
     */
    public static function hasInfoNeededToCalculateTotal(Checkout $checkout) : bool
    {
        return false;
    }
}
