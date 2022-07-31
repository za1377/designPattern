<?php

namespace App\Custom;

use App\Custom\CityInterface;
use App\Models\Order;

class TehranInterface implements CityInterface {
    public function list(){
        $list = Order::where('store_name' , 'tehran')->get();
        return $list;
    }
}
