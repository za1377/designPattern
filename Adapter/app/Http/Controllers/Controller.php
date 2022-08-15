<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\CarWrapper;
use App\Http\Controllers\ShipWrapperAdapter;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Test()
    {
        echo "carWrapper";
        echo "<br>";
        $car = new CarWrapper;
        $this->Transport($car);


        echo "<br>";
        echo "shipWrapper";
        echo "<br>";
        $ship = new ShipWrapperAdapter;
        $this->Transport($ship);
    }

    public function Transport($product)
    {
        $product->set();
        return;
    }
}
