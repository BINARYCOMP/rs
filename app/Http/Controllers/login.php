<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Authentication_model;

class login extends Controller
{
    function  __construct() {
        $this->viewAuth = "auth";
        $this->title    = "Rumah Sakit";
        $this->model    = new Authentication_model;
    }
    
    public function index(Request $request){
        if(null != $request->session()->get('status')){
            return redirect()->route('dashboard');
        }else{
            $data = array(
                'title' => $this->title,
            );
            return view($this->viewAuth.'/login', $data);
        }
    }
    public function auth(Request $request){
        $validator = Validator::make($request->all(), [
            'txtEmail'      => 'required',
            'txtPassword'   => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        $requestData    = $request->all();
        $model  = $this->model->login(
            $requestData['txtEmail'], 
            $requestData['txtPassword']
        );
        if(isset($model[0]->id)){
            return redirect()->route('dashboard');;
        }else{
            return redirect('/')
                        ->withErrors('Username atau Password salah')
                        ->withInput();
        }
    }
}
