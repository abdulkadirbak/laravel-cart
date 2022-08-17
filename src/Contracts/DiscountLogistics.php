<?php

namespace AbdulkadirBak\LaravelCart\Contracts;

use AbdulkadirBak\LaravelCart\Checkout;

interface DiscountLogistics
{
    public static function getDiscountFromCode(Checkout $checkout, string $code) : float;
}
