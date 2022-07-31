<?php

namespace App\Custom;

Interface OrderBuilder
{
    public function CreateOrder($order_id);
    public function sendOrderEmail();
    public function createShipment();
}
