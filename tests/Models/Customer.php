<?php

namespace AbdulkadirBak\LaravelCart\Tests\Models;

use AbdulkadirBak\LaravelCart\Traits\Purchaser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use AbdulkadirBak\LaravelCart\Contracts\Purchaser as PurchaserInterface;

class Customer extends Model implements PurchaserInterface
{
    use SoftDeletes, Purchaser;

    /**
     * The database table name to use.
     *
     * @var string
     */
    protected $table = 'customers';
}
