<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SimpleHouse;
use App\Http\Controllers\Parking;
use App\Http\Controllers\Pool;
use App\Http\Controllers\Store;

class test
{
    public function test()
    {
        echo 'the house has parking and pool.';
        echo '<br>';

        $House = new SimpleHouse;
        $House = new Parking($House);
        $House = new Pool($House);

        echo $House->getDescription();
        echo '<br>';
        echo 'the price of this house:';
        echo $House->getPrice();
        echo '<br>';
        echo '<br>';

        echo 'the house has parking and store.';
        echo '<br>';

        $House = new SimpleHouse;
        $House = new Parking($House);
        $House = new Store($House);

        echo $House->getDescription();
        echo '<br>';
        echo 'the price of this house:';
        echo $House->getPrice();
        echo '<br>';

        return;
    }
}


