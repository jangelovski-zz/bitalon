<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Victim;

class VictimController extends Controller
{
    //
    protected $middleware;

    function all(){

        $victims = Victim::all();

        return $victims;
    }
}
