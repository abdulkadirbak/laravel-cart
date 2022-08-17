<?php

namespace AbdulkadirBak\LaravelCart\Contracts;

interface Purchaser
{
    public function getIdentifier() : mixed;
    public function getType() : string;
}
