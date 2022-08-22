<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseDecorator;

class Parking extends BaseDecorator
{
    public function getDescription()
    {
        return parent::getDescription() . ',House';
    }

    public function getPrice()
    {
        return parent::getPrice() + 1;
    }
}
