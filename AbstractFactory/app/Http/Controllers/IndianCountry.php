<?php

namespace App\Http\Controllers;

use App\Custom\Country;
use App\Http\Controllers\IndianFood;
use App\Http\Controllers\IndianClimate;

class IndianCountry implements Country
{
    public function CreateFamousFood(){
        $IranFood = new IndianFood();
        $result = $IranFood->food();
        echo $result ;
        return;
    }

    public function CreateClimate(){
        $IranFood = new IndianClimate();
        $result1 = $IranFood->hot();
        echo $result1 ;
        return;
    }
}
