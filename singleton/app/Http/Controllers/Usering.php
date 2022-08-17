<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usering extends Controller
{
    protected static $data = null;

    private function __construct()
    {
        self::$data = User::all();
        return self::$data;

    }

    public static function getInformation()
    {
        if(self::$data == null){
            new Usering;
        }

        return self::$data;
    }
}
