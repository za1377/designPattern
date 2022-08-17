<?php

namespace App\Http\Controllers;
use App\Custom\Organ;

class SimpleOrgan implements Organ
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        return $this->name;
    }

    public function getInformation()
    {
        $result = 'my name is' . $this->name . '<br>';
        return $result;
    }
}
