<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_barang;

class Barang extends Controller
{
    //
    function  __construct() {
        $this->viewPrefix = 'barang';
        $this->model = new Model_barang;
    }
    public function index(){
        $data = array(
            'title'     => 'Barang',
            'header'    => 'List Barang',
            'desc'      => 'Data semua barang',
            'model'     => $this->model->getAllData(),
        );
        return view($this->viewPrefix.'.index', $data);
    }
}
