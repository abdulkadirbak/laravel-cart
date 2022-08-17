<?php

namespace AbdulkadirBak\LaravelCart\Contracts;

use AbdulkadirBak\LaravelCart\Checkout;

interface ShippingLogistics
{
    public static function getShippingCost(Checkout $checkout) : float;
}
