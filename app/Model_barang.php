<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Model_barang extends Model
{
    //
    public function getAllData(){
        return DB::table('barang')->get();
    }
}
