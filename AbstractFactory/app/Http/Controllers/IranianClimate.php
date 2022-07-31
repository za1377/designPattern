<?php

namespace App\Http\Controllers;

use App\Custom\Climate;

class IranianClimate implements Climate
{
    public function hot(){
        $hot = 'Iran has hot weather in 3 monthes of years.';
        return $hot;
    }

    public function cold(){
        $cold = 'Iran has cold weather in 3 monthes of years.';
        return $cold;
    }
}
