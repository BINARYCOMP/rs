<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_entry extends Model
{
    //
    public function getAllData(){
        return DB::table('entry')->get();
    }
    public function hapus($id){
        return DB::table('entry')
            ->where('entr_id','=',$id)
            ->delete();
    }
    public function edit($id,$nama,$jumlah){
        return DB::table('entry')
            ->where('entr_id','=',$id)
            ->update(['entr_name' => $nama , 'entr_jumlah' => $jumlah]);
    }
}
