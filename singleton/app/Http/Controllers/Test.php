<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Usering;

class Test extends Controller
{
    public function test()
    {
        echo "frist result";
        echo "<br>";
        $result1 = Usering::getInformation();
        echo (json_encode($result1));
        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "second result";
        echo "<br>";
        $result2 = Usering::getInformation();
        echo (json_encode($result2));
        echo "<br>";

        return;
    }

}
