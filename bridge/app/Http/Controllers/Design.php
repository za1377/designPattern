<?php

namespace App\Http\Controllers;

class Design
{
    protected $building;

    public function __construct($building)
    {
        $this->building = $building;
    }

    public function price()
    {
        $meterage = $this->building->meterage();
        $furniture = $this->building->furniture();

        if($furniture){
            $price = $meterage*100000 + 100000000;
        }else{
            $price = $meterage*100000;
        }
        echo '<br>';
        echo 'the price for design this building is' . $price;

        return;
    }

    public function time()
    {
        $meterage = $this->building->meterage();

        $time = $meterage/100;
        echo '<br>';
        echo $time . 'days need for design';
        return;
    }
}
