<?php

namespace App\Custom;

use App\Custom\CityInterface;
use App\Models\Order;

class YazdInterface implements CityInterface {
    public function list(){
        $list = Order::where('store_name' , 'yazd')->get();
        return $list;
    }
}
