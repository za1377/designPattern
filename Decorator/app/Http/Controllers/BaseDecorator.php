<?php

namespace App\Http\Controllers;

use App\Custom\HouseFace;

abstract class BaseDecorator implements HouseFace
{
    protected $House;

    public function __construct($House)
    {
        $this->House = $House;
        return $this->House;
    }

    public function getDescription()
    {
        return $this->House->getDescription();
    }

    public function getPrice()
    {
        return $this->House->getPrice();
    }
}
