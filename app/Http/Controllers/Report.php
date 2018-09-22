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
            'header'    => 'Laporan Entry',
            'desc'      => 'Laporan per bulan',
            'act'       => 'default',
            'modeling'  => $this->model,
            'dataTahun' => $this->model->getYear(),
        );
        return view($this->viewPrefix.'.index', $data);
    }
    public function search(Request $request){
        $requestData = $request->all();
        $tahun = $requestData['cmbTahun'];
        $bulan = $requestData['cmbBulan'];
        $data = array(
            'title'     => 'Report',
            'header'    => 'Laporan Barang',
            'desc'      => 'Laporan per bulan',
            'act'       => 'searched',
            'modeling'  => $this->model,
            'dataTahun' => $this->model->getYear(),
            'search'    => $this->model->getData($bulan, $tahun),
        );
        return view($this->viewPrefix.'.index', $data);
    }
}
