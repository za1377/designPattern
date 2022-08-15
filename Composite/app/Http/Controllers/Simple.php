<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Show;

class Simple implements Show
{
    protected $num = 0;

    public function __construct($num)
    {
        $this->num = $num;
    }

    public function getInformation()
    {
        echo "simple";
        echo "<br>";
        echo $this->num;
        echo "<br>";

        return;
    }
}
