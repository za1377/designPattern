<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseDecorator;

class Store extends BaseDecorator
{
    public function getDescription()
    {
        return parent::getDescription() . ',Store';
    }

    public function getPrice()
    {
        return parent::getPrice() + 1/2;
    }
}
