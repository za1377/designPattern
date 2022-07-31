<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Custom\CityInterface;

abstract class OrderController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */

    abstract public function show();

    public function accept(){
        $order = $this->show();
        $result = $order->list();
        return $result;
    }

}
