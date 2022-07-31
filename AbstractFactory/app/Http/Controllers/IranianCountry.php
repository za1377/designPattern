<?php

namespace App\Http\Controllers;

use App\Custom\Country;
use App\Http\Controllers\IranianFood;
use App\Http\Controllers\IranianClimate;

class IranianCountry implements Country
{
    public function CreateFamousFood(){
        $IranFood = new IranianFood();
        $result = $IranFood->food();
        echo $result ;
        return;
    }

    public function CreateClimate(){
        $IranFood = new IranianClimate();

        $result1 = $IranFood->hot();
        $result2 = $IranFood->cold();

        echo $result1 ;
        echo '<br>';
        echo $result2;
        return;
    }
}
