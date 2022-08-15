<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Wrapper;

class CarWrapper implements Wrapper
{
    public function set()
    {
        echo "the wrapper of box is cartoons.";
        return;
    }
}
