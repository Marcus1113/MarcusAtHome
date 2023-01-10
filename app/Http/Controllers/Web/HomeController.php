<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_index(){

        $entries = array();


        $blade_data = array(
            'entries' => $entries
        );
        return view('web.'. (new \ReflectionClass($this))->getShortName() . '.' . __FUNCTION__, with($blade_data));
    }
}
