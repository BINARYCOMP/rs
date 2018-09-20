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
    public function hapus($id){
        return DB::table('barang')
            ->where('bara_id','=',$id)
            ->delete();
    }
    public function edit($id,$nama,$jumlah){
        return DB::table('barang')
            ->where('bara_id','=',$id)
            ->update(['bara_name' => $nama , 'bara_jumlah' => $jumlah]);
    }
    public function store($data){
        return DB::table('barang')
            ->insert($data);
    }
    public function getSisa($id, $jumlah){
        $query = DB::table('entry')
            ->where('entr_bara_id','=',$id)
            ->sum('entr_jumlah');
        $return = $jumlah - $query;
        return $return;
    }
}
