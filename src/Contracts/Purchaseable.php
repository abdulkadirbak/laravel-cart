<?php

namespace AbdulkadirBak\LaravelCart\Contracts;

interface Purchaseable
{
    public function getIdentifier() : mixed;
    public function getType() : string;
    public function getRetailPrice() : float;
    public function getDisplayName() : string;
}
