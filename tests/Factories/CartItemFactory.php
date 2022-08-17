<?php

namespace AbdulkadirBak\LaravelCart\Tests\Factories;

use AbdulkadirBak\LaravelCart\Models\Cart;
use AbdulkadirBak\LaravelCart\Models\CartItem;
use AbdulkadirBak\LaravelCart\Tests\Models\Product;

$factory->define(CartItem::class, function () {
    $product = factory(Product::class)->create([
        'price' => 9.95,
    ]);
    return [
        'cart_id' => function () {
            return factory(Cart::class)->create()->id;
        },
        'purchaseable_id' => $product->id,
        'purchaseable_type' => $product->getMorphClass(),
        'qty' => 1,
        'unit_price' => 9.95,
        'price' => 9.95,
    ];
});
