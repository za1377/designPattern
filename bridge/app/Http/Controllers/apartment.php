<?php

namespace App\Http\Controllers;

use App\Custom\Building;

class apartment implements Building
{
    public function meterage(){
        $meterage = 100;
        return $meterage;
    }
    public function furniture(){
        return true;
    }
}
