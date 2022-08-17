<?php

namespace AbdulkadirBak\LaravelCart\Tests\Factories;

use AbdulkadirBak\LaravelCart\Tests\Models\NonPurchaseable;

$factory->define(NonPurchaseable::class, function () {
    return [
        'price' => 19.95,
    ];
});
