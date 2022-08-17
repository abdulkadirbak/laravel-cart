<?php

namespace AbdulkadirBak\LaravelCart\Contracts;

use AbdulkadirBak\LaravelCart\Checkout;

interface TaxLogistics
{
    public static function getTaxes(Checkout $checkout) : float;
}
