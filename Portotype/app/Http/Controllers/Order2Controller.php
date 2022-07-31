<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Prototype;
use App\Models\Order2;

class Order2Controller implements Prototype
{
    public $delivery;
    public $price;
    public $order;

    public function __construct($delivery, $price , $order = null) {
        $this->delivery = $delivery;
        $this->price = $price;
        $this->order = $order !== null ? $order : Order2::all();

        $data = array();
        $data += ['name' => $this->delivery];
        $data += ['price' => $this->price];
        $data += ['order' => $this->order];

        return $data;

    }

    public function clone() {
        $order = $this->order;
        return new Order2Controller($this->delivery, $this->price, $order);
    }

}
