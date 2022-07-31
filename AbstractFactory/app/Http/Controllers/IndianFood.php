<?php

namespace App\Http\Controllers;

use App\Custom\famousFood;

class IndianFood implements famousFood
{
    public function food(){
        $food = 'spicy';
        return $food ;
    }
}
