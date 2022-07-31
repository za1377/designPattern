<?php

namespace App\Http\Controllers;

use App\Custom\famousFood;

class IranianFood implements famousFood
{
    public function food(){
        $food = 'kabab';
        return $food ;
    }
}
