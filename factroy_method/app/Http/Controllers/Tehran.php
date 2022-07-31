<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Custom\TehranInterface;

class Tehran extends OrderController
{
    public function show(){
        $orders = new TehranInterface();
        return $orders ;
    }
}
