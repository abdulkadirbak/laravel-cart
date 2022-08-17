<?php

namespace App\Logistics;

use AbdulkadirBak\LaravelCart\Checkout;
use AbdulkadirBak\LaravelCart\Contracts\CartLogistics as CartLogisticsInterface;

class CartLogistics implements CartLogisticsInterface
{
    /**
     * Get the purchaseable entity given the type and ID.
     *
     * @param string $type
     * @param mixed $id
     *
     * @return mixed
     */
    public static function getPurchaseable(string $type, mixed $id) : mixed
    {
        return $type::find($id);
    }

    /**
     * Logic which fires immediately prior to an item being added to cart.
     *
     * @param \AbdulkadirBak\LaravelCart\Checkout $checkout
     * @param mixed $purchaseable
     * @param int $qty
     *
     * @return void
     */
    public static function beforeCartItemAdded(Checkout $checkout, mixed $purchaseable, int $qty) : void
    {
    }

    /**
     * Determines if a checkout has all the information required to complete checkout.
     *
     * @param \AbdulkadirBak\LaravelCart\Checkout $checkout
     *
     * @return bool
     */
    public static function hasInfoNeededToCalculateTotal(Checkout $checkout) : bool
    {
        return true;
    }
}
