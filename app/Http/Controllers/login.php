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
            'txtUsername'      => 'required',
            'txtPassword'   => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        $requestData    = $request->all();
        
        $model  = $this->model->login($requestData['txtUsername'] , $requestData['txtPassword']);
        
        if(isset($model[0]->id)){
            session([
                'userId'=> $model[0]->id,
                'name' => $model[0]->user_name,
                'username' => $model[0]->user_username,
                'role' => $model[0]->user_role,
                'status' => 'Login'
            ]);
            return redirect()->route('dashboard');;
        }else{
            return redirect('/')
                        ->withErrors('Username atau Password salah')
                        ->withInput();
        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
    public function changePassword(){
        $data = array(
            'title'     => 'Profile',
            'header'    => 'Ganti Password',
            'desc'      => 'Perbaharui kata sandi anda',
        );
        return view('resetPassword', $data);
    }
    public function changePasswordPost(Request $request){
        $validator = Validator::make($request->all(), [
            'txtBaru' => 'required',
            'txtLama' => 'required',
        ]);
        if($validator->fails()){
            return redirect(route('login.reset'))
                ->withErrors($validator)
                ->withInput();
        }
        $requestData = $request->all();
        $store = $this->model->resetPassword(
            session()->get('userId'),
            $requestData['txtBaru'],
            $requestData['txtLama']
        );
        if($store != 1){
            return redirect(route('login.reset'))
                ->withErrors('Password Lama Salah');
        }else{
            return redirect(route('logout'))
                ->withErrors(['Password sudah di perbaharui','Silahkan masuk lagi']);                    
        }
    }
}
