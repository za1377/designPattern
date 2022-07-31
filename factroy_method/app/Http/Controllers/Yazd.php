<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Custom\YazdInterface;

class Yazd extends OrderController
{
    public function show(){
        $orders = new YazdInterface();
        return $orders ;
    }
}
