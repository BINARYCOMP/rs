<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    function  __construct() {
        $this->title = "Dashboard";
    }
    //
    public function index(){
        $data = array(
            'title' => $this->title,
        );
        return view('dashboard', $data);
    }
}
