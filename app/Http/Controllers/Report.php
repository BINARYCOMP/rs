<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model_report;

class report extends Controller
{
    function  __construct() {
        $this->viewPrefix = 'report';
        $this->model = new Model_report;
    }
    //
    public function index(){
        $data = array(
            'title'     => 'Report',
            'header'    => 'Laporan Barang',
            'desc'      => 'Laporan per bulan',
            'modeling'  => $this->model,
        );
        return view($this->viewPrefix.'.index', $data);
    }
}
