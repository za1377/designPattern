<?php

namespace App\Http\Controllers;

use App\Custom\HouseFace;

class SimpleHouse implements HouseFace
{
    public function getDescription()
    {
        return 'House has some option like:';
    }

    public function getPrice()
    {
        return 2;
    }
}
