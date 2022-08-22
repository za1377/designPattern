<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseDecorator;

class Pool extends BaseDecorator
{
    public function getDescription()
    {
        return parent::getDescription() . ',Pool';
    }

    public function getPrice()
    {
        return parent::getPrice() + 1;
    }
}
