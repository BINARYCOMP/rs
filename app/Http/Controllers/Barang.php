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
    public function edit(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'txtNama' => 'required|max:255',
            'txtJumlah' => 'required|number',
        ]);
        if($validator->fails()){
            return redirect(route($this->viewPrefix.'.create', ['bara_id' => $request->bara_id]))
                ->withErrors($validator)
                ->withInput();
        }
        $reqeustData = $request->all();
        $store = $this->model->edit(
            $requestData['bara_id'],
            $requestData['bara_name'],
            $requestData['bara_jumlah']
        );
        return redirect()->route('barang');
    }
    public function edit_view($id){
        $data = array(
            'title'     => 'Barang',
            'header'    => 'List Barang',
            'desc'      => 'Data semua barang',
            'act'       => 'UPDATE',
            'model'     => $this->model->getAllData(),
        );
        return view($this->viewPrefix.'.form', $data);
    }
    public function hapus($id){
        $this->model->hapus($id);
        return redirect()->route('barang')
            ->withErrors('Data berhasil dihapus');
    }
}
