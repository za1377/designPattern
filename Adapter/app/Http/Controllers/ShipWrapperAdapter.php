<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Wrapper;

class ShipWrapperAdapter implements Wrapper
{
    public function box()
    {
        echo "the wrapper of box is cartoons.";
        return;
    }

    public function container()
    {
        echo "all boxes stay on the containers.";
        return;
    }

    public function set()
    {
        $this->box();
        echo "<br>";
        $this->container();
        return;
    }
}
