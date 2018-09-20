<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_entry extends Model
{
    //
    public function getAllData(){
        return DB::table('entry')
            ->join('barang', 'entr_bara_id', '=', 'bara_id')
            ->get();
    }
    public function hapus($id){
        return DB::table('entry')
            ->where('entr_id','=',$id)
            ->delete();
    }
    public function edit($id,$barang,$jumlah){
        return DB::table('entry')
            ->where('entr_id','=',$id)
            ->update(['entr_bara_id' => $barang , 'entr_jumlah' => $jumlah]);
    }
    public function store($data){
        DB::table('entry')
            ->insert($data);
    }
    public function getDataById($id){
        return DB::table('entry')
            ->where('entr_id','=',$id)
            ->get();
    }
}
