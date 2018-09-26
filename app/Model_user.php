<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_user extends Model
{
    //
    public function getAllData()
    {
    	return DB::table('users')
    		->get();
    }
    public function store($data)
    {
    	DB::table('users')
    		->insert($data);
    }
    public function getDataById($id)
    {
    	return DB::table('users')
    		->where('id','=',$id)
    		->get();
    }
    public function edit($id, $data)
    {
    	DB::table('users')
    		->where('id','=',$id)
    		->update($data);
    }
    public function hapus($id)
    {
    	DB::table('users')
    		->where('id', '=' ,$id)
    		->delete();
    }
}
