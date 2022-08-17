<?php

namespace App\Http\Controllers;
use App\Custom\Organ;

class CompoundOrgan implements Organ
{
    protected $name;
    public $children = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getInformation()
    {
        $output = 'This is' . $this->name .' organ' . '<br>';
        $output .= 'It contains'. count($this->children) . 'members' . '<br>';

        foreach($this->children as $organ){
            $output .= $organ->getInformation();
        }
        return $output;
    }

    public function add($Organ)
    {
        array_push($this->children , $Organ);
        return;
    }

}
