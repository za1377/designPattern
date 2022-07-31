<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Tehran;
use App\Http\Controllers\Yazd;

class Test extends Controller
{
    public function yazd(){
        $city = new Yazd();
        $order = $city->accept();
        return response()->json(["message" => $order], 200);
    }

    public function tehran(){
        $city = new Tehran();
        $order = $city->accept();
        return response()->json(["message" => $order], 200);
    }
}
