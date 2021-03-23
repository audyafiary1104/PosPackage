<?php

namespace AudyDev\POS\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PosController extends Controller
{
    public function add($a, $b){
        $result = $a + $b;
        return view('pos::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
