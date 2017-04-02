<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test($name, $location){
    	return $name.'this is home-15 lakh'.$location;
    }
}
