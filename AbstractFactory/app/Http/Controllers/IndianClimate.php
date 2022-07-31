<?php

namespace App\Http\Controllers;

use App\Custom\Climate;

class IndianClimate implements Climate
{
    public function hot(){
        $hot = 'India has hot weather in 6 monthes of years.';
        return $hot;
    }

    public function cold(){}
}
