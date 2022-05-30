<?php

namespace DevPac\Calculation1\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculationController extends Controller
{
    public function add($a,$b){
        $result = $a+$b;
        return view('calculation::show',compact('result'));
    }
}
