<?php

namespace AbdulkadirBak\LaravelCart\Http\Controllers\Checkout;

use AbdulkadirBak\LaravelCart\Checkout;
use AbdulkadirBak\LaravelCart\Http\Controllers\Controller;
use AbdulkadirBak\LaravelCart\Http\Resources\CheckoutResource;
use AbdulkadirBak\LaravelCart\Http\Requests\CheckoutDiscountRequest;

class CheckoutDiscountController extends Controller
{
    /**
     * Apply a discount code to a checkout.
     *
     * @param  \AbdulkadirBak\LaravelCart\Http\Requests\CheckoutDiscountRequest  $request
     * @param  string $checkoutId
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutDiscountRequest $request, string $checkoutId)
    {
        $checkout = Checkout::findById($checkoutId);

        $checkout->applyDiscountCode($request->code);

        return new CheckoutResource($checkout);
    }
}
