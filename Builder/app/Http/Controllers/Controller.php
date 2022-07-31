<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\DliveryMan;
use App\Http\Controllers\Warehouse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function client($Registrar){
        $result = $Registrar->CreateOrder('1000')
        ->sendOrderEmail()
        ->createShipment();

        return $result;
    }

    public function Delivery(){
        $deliveryman = new DliveryMan();
        $result = $this->client($deliveryman);
        echo($result->order_status) ;
        return;
    }

    public function Warehouse(){
        $warehouse = new Warehouse();
        $result = $this->client($warehouse);
        echo($result->order_status) ;
        return;
    }

}
