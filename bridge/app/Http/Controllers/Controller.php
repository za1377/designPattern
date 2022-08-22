<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\apartment;
use App\Http\Controllers\Official;
use App\Http\Controllers\Design;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        echo 'for an apartment';
        $apartment = new apartment;
        $apartmentDesign = new Design($apartment);
        $apartmentDesign->price();
        $apartmentDesign->time();

        echo '<br>';
        echo '<br>';
        echo 'for an Official';
        $Official = new Official;
        $OfficialDesign = new Design($Official);
        $OfficialDesign->price();
        $OfficialDesign->time();
    }
}
