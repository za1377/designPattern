<?php

namespace App\Http\Controllers;

use App\Custom\Building;

class Official implements Building
{
    public function meterage(){
        $meterage = 50;
        return $meterage;
    }
    public function furniture(){
        return false;
    }
}
