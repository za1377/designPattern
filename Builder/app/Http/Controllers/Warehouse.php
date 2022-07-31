<?php

namespace App\Http\Controllers;

use App\Custom\OrderBuilder;

class Warehouse implements OrderBuilder
{
    public $order_status;
    public function createOrder($order_id)
    {
        $this->order_status = 'Order'." ".$order_id.' Created by warehouse';
        return $this;
    }
    public function sendOrderEmail()
    {
        $this->order_status = 'Email Sent for'.$this->order_status;
        return $this;
    }
    public function createShipment()
    {
        $this->order_status = 'Shipment Create and'.$this->order_status;
        return $this;
    }
}
