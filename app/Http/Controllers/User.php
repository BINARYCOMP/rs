<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model_user;

class User extends Controller
{
    //
    function  __construct() {
        $this->viewPrefix = 'user';
        $this->model = new Model_user;
    }
    public function index(){
        $data = array(
            'title'     => 'User',
            'header'    => 'List User',
            'desc'      => 'Data semua user',
            'model'     => $this->model->getAllData(),
            'modeling'  => $this->model,
        );
        return view($this->viewPrefix.'.index', $data);
    }
    public function edit_post(Request $request, $id){
        $requestData = $request->all();
        $password;
        if (isset($requestData['txtPassword'])) {
        	$password = $requestData['txtPassword'];
        }else{
        	$realPassword = $this->model->getDataById($id);
        	$password = $realPassword[0]->user_password;
        }
        $data = array(
        	'user_email' => $requestData['txtEmail'] , 
        	'user_name' => $requestData['txtNama'] , 
        	'user_password' => $password , 
        	'user_address' => $requestData['txtAlamat'] , 
        	'user_phone' => $requestData['txtPhone'] , 
        	);
        $store = $this->model->edit(
            $id,
            $data
        );
        return redirect()->route('user');
    }
    public function edit_view($id){
        $data = array(
            'title'     => 'User',
            'header'    => 'Ubah User',
            'desc'      => 'Form ubah user',
            'act'       => 'UPDATE',
            'model'     => $this->model->getDataById($id),
        );
        return view($this->viewPrefix.'.form_edit', $data);
    }
    public function hapus($id){
        $this->model->hapus($id);
        return redirect()->route('user')
            ->withErrors('Data berhasil dihapus');
    }
    public function tambah(){
        $data = array(
            'title' => 'User',
            'header' => 'Tambah User',
            'desc' => 'Form penambahan user',
            'act' => 'CREATE'
        );
        return view($this->viewPrefix.".form", $data);
    }
    public function tambah_post(Request $request){
        $requestData = $request->all();
        $data = array(
        	'user_email' => $requestData['txtEmail'] , 
        	'user_name' => $requestData['txtNama'] , 
        	'user_password' => $requestData['txtPassword'] , 
        	'user_address' => $requestData['txtAlamat'] , 
        	'user_phone' => $requestData['txtPhone'] , 
        	);
        $this->model->store($data);
        return redirect()->route('user');
    }
}
