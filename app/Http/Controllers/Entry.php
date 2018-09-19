<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model_entry;

class Entry extends Controller
{
    //
    function  __construct() {
        $this->viewPrefix = 'entry';
        $this->model = new Model_entry;
    }
    public function index(){
        $data = array(
            'title'     => 'Entry Barang',
            'header'    => 'List Entry Barang',
            'desc'      => 'Data semua entry barang',
            'model'     => $this->model->getAllData(),
        );
        return view($this->viewPrefix.'.index', $data);
    }
}
