<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Simple;
use App\Http\Controllers\Comound;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Test()
    {
        $result1 = new Simple(5);
        $result1->getInformation();
        $result2 = new Comound([1,2,3,[4,5,[6,7,8]]]);
        $result2->getInformation();

        return;
    }
}
