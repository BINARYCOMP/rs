<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_barang;
use Validator;

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
            'modeling'  => $this->model,
        );
        return view($this->viewPrefix.'.index', $data);
    }
    public function edit(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'txtNama' => 'required',
            'txtJumlah' => 'required',
        ]);
        if($validator->fails()){
            return redirect(route($this->viewPrefix.'.create', ['bara_id' => $request->bara_id]))
                ->withErrors($validator)
                ->withInput();
        }
        $requestData = $request->all();
        $store = $this->model->edit(
            $id,
            $requestData['txtNama'],
            $requestData['txtJumlah']
        );
        return redirect()->route('barang');
    }
    public function edit_view($id){
        $data = array(
            'title'     => 'Barang',
            'header'    => 'Ubah Barang',
            'desc'      => 'Form ubah barang',
            'act'       => 'UPDATE',
            'model'     => $this->model->getDataById($id),
        );
        return view($this->viewPrefix.'.form_edit', $data);
    }
    public function hapus($id){
        $this->model->hapus($id);
        return redirect()->route('barang')
            ->withErrors('Data berhasil dihapus');
    }
    public function tambah(){
        $data = array(
            'title' => 'Barang',
            'header' => 'Tambah Barang',
            'desc' => 'Form penambahan barang',
            'act' => 'CREATE'
        );
        return view($this->viewPrefix.".form", $data);
    }
    public function tambah_post(Request $request){
        $validator = Validator::make($request->all(), [
            'txtNama' => 'required',
            'txtJumlah' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route($this->viewPrefix . '.store'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $requestData = $request->all();
        $this->model->store(['bara_name' => $requestData['txtNama'], 'bara_jumlah' => $requestData['txtJumlah']]);
        return redirect()->route('barang');
    }
}
