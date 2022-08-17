<?php

namespace AbdulkadirBak\LaravelCart\Http\Controllers\Checkout;

use Illuminate\Http\Request;
use AbdulkadirBak\LaravelCart\Checkout;
use AbdulkadirBak\LaravelCart\Http\Controllers\Controller;
use AbdulkadirBak\LaravelCart\Http\Requests\CheckoutItemCreateRequest;
use AbdulkadirBak\LaravelCart\Http\Requests\CheckoutItemUpdateRequest;
use AbdulkadirBak\LaravelCart\Exceptions\PurchaseableNotFoundException;

class CheckoutItemController extends Controller
{
    /**
     * Create a new item in the cart.
     *
     * @param \AbdulkadirBak\LaravelCart\Http\Requests\CheckoutItemCreateRequest  $request
     * @param string $checkoutId
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutItemCreateRequest $request, string $checkoutId)
    {
        $checkout = Checkout::findById($checkoutId);

        $purchaseable = Checkout::getPurchaseable(
            $request->purchaseable_type,
            $request->purchaseable_id,
        );

        throw_if(!$purchaseable, PurchaseableNotFoundException::class);

        return $checkout->addItem(
            purchaseable: $purchaseable,
            qty: $request->qty,
            options: $request->options ?? [],
        );
    }

    /**
     * Update an existing item in the cart.
     *
     * @param \AbdulkadirBak\LaravelCart\Http\Requests\CheckoutItemUpdateRequest  $request
     * @param string $checkoutId
     * @param int $itemId
     *
     * @return \Illuminate\Http\Response
     */
    public function update(CheckoutItemUpdateRequest $request, string $checkoutId, int $itemId)
    {
        $checkout = Checkout::findById($checkoutId);

        return $checkout->updateItem(
            cartItemId: $itemId,
            qty: $request->qty,
            options: $request->options ?? [],
        );
    }

    /**
     * Remove an existing item from the cart.
     *
     * @param \Illuminate\Http\Request  $request
     * @param string $checkoutId
     * @param int $itemId
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, string $checkoutId, int $itemId)
    {
        $checkout = Checkout::findById($checkoutId);

        return $checkout->removeItem($itemId);
    }
}
