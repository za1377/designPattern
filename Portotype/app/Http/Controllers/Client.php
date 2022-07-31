<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Order2Controller;

class Client extends Controller
{
    public function show(){
        $original = new Order2Controller('zA' , '1000');
        $clone = $original->clone();

        echo 'original';
        var_dump('*');
        echo '*****************';
        var_dump($original);

        echo 'clone';
        var_dump('*');
        echo '*****************';
        var_dump($clone);

        return;
    }
}
