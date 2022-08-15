<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Show;

class Comound implements Show
{
    protected $numbers = null;

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function getInformation()
    {
        // echo "It contains";
        // echo count($this->numbers);
        // echo "members";

        echo "<br>";
        echo "the members:";
        print_r($this->numbers);

        foreach($this->numbers as $num){
            $new = new Comound($num);
            $new->getInformation();
        }

        return;
    }
}
