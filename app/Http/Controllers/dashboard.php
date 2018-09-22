<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_report;
    
class dashboard extends Controller
{
    function  __construct() {
        $this->title = "Dashboard";
        $this->report = new Model_report;
    }
    //
    public function index(){
        $data = array(
            'title' => $this->title,
            'dataUsers' => $this->report->getUsers(),
            'dataNewEntry' => $this->report->getEntry(date('Y'), date('m'), date('d')),
            'dataAllBarang' => $this->report->getBarang(),
            'dataAllStok' => $this->report->getStok(),
        );
        return view('dashboard', $data);
    }
}
