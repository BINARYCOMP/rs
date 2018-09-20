<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model_entry;
use App\Model_barang;
use Validator;

class Entry extends Controller
{
    //
    function  __construct() {
        $this->viewPrefix = 'entry';
        $this->model = new Model_entry;
        $this->barang = new Model_barang;
    }
    public function index(){
        $data = array(
            'title'     => 'Entry',
            'header'    => 'List Entry',
            'desc'      => 'Data semua entry',
            'model'     => $this->model->getAllData(),
        );
        return view($this->viewPrefix.'.index', $data);
    }
    public function tambah(){
        $data = array(
            'title' => 'Entry',
            'header' => 'Tambah Entry',
            'desc' => 'Form penambahan Entry',
            'act' => 'CREATE',
            'barang' => $this->barang->getAllData(),
        );
        return view($this->viewPrefix.".form", $data);
    }
    public function tambah_post(Request $request){
        $validator = Validator::make($request->all(), [
            'cmbBarang' => 'required',
            'txtJumlah' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route($this->viewPrefix . '.store'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $requestData = $request->all();
        $this->model->store(['entr_bara_id' => $requestData['cmbBarang'], 'entr_jumlah' => $requestData['txtJumlah'], 'entr_date' => date('Y-m-d H:i:s')]);
        return redirect()->route('entry');
    }
    public function hapus($id){
        $this->model->hapus($id);
        return redirect()->route('entry')
            ->withErrors('Data berhasil dihapus');
    }
    public function edit_view($id){
        $data = array(
            'title'     => 'Entry',
            'header'    => 'Ubah Entry',
            'desc'      => 'Form ubah entry',
            'act'       => 'UPDATE',
            'barang'    => $this->barang->getAllData(),
            'model'     => $this->model->getDataById($id),
        );
        return view($this->viewPrefix.'.form_edit', $data);
    }
    public function edit_post($id, Request $request){
        $validator = Validator::make($request->all(), [
            'cmbBarang' => 'required',
            'txtJumlah' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route($this->viewPrefix . '.store'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $requestData = $request->all();
        $this->model->edit(
            $id, $requestData['cmbBarang'], $requestData['txtJumlah']
        );
        return redirect()->route('entry');
    }
    
}
