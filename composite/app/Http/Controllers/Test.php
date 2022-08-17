<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CompoundOrgan;
use App\Http\Controllers\SimpleOrgan;

class Test extends Controller
{
    public function test()
    {
        $organization = new CompoundOrgan('Main');
        $organization->add(new SimpleOrgan('Alex as Founder'));
        $organization->add(new SimpleOrgan('Morgan as HR'));

        $officers = new CompoundOrgan('Officers');
        $officers->add(new SimpleOrgan('John as CEO'));
        $officers->add(new SimpleOrgan('John as CTO'));
        $organization->add($officers);

        $employees = new CompoundOrgan('Employees');
        $it = new CompoundOrgan('IT');
        $designers = new CompoundOrgan('Desingers');
        $designers->add(new SimpleOrgan('Sarah as Desinger'));
        $designers->add(new SimpleOrgan('John as Desinger'));
        $designers->add(new SimpleOrgan('Emily as Desinger'));
        $designers->add(new SimpleOrgan('Mario as Desinger'));

        $it->add($designers);
        $employees->add($it);

        $organization->add($employees);

        return response()->json($organization->getInformation(), 200);

        // dd($organization->getInformation());
    }
}
