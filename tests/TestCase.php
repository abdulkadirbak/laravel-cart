<?php

namespace AbdulkadirBak\LaravelCart\Tests;

use App\Logistics\TaxLogistics;
use App\Logistics\CartLogistics;
use App\Logistics\DiscountLogistics;
use App\Logistics\ShippingLogistics;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use AbdulkadirBak\LaravelCart\Tests\Logistics\TaxLogistics as TaxLogisticsTest;
use AbdulkadirBak\LaravelCart\Tests\Logistics\CartLogistics as CartLogisticsTest;
use AbdulkadirBak\LaravelCart\Tests\Logistics\DiscountLogistics as DiscountLogisticsTest;
use AbdulkadirBak\LaravelCart\Tests\Logistics\ShippingLogistics as ShippingLogisticsTest;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->withFactories(__DIR__ . '/Factories');

        app()->bind(CartLogistics::class, CartLogisticsTest::class);
        app()->bind(TaxLogistics::class, TaxLogisticsTest::class);
        app()->bind(ShippingLogistics::class, ShippingLogisticsTest::class);
        app()->bind(DiscountLogistics::class, DiscountLogisticsTest::class);
    }

    /**
     * Load our custom service provider for test purposes.
     *
     * @param $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'AbdulkadirBak\LaravelCart\ShoppingCartServiceProvider',
            'AbdulkadirBak\LaravelCart\Tests\ShoppingCartTestProvider',
        ];
    }
}
