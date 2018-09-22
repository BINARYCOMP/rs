<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_report extends Model
{
    //
    public function getYear(){
        $query = "SELECT year(entr_date) as 'tahun' FROM entry group by year(entr_date)";
        return DB::select(DB::raw($query));
    }
    public function getData($bulan, $tahun){
        $query = "SELECT * FROM entry,barang WHERE entr_bara_id = bara_id AND MONTH(entr_date) = $bulan AND YEAR(entr_date) = $tahun";
        return DB::select(DB::raw($query));
    }
    public function getUsers(){
        return DB::table('users')
            ->count();
    }
    public function getEntry($tahun, $bulan, $hari){
        $query = "SELECT count(entr_id) as jumlah FROM entry WHERE DAY(entr_date) = $hari AND MONTH(entr_date) = $bulan AND YEAR(entr_date) = $tahun";
        return DB::select(DB::raw($query));
    }
    public function getBarang(){
        return DB::table('barang')
            ->count();
    }
    public function getStok(){
        $barang = DB::table('barang')
            ->sum('bara_jumlah');
        $entry = DB::table('entry')
            ->sum('entr_jumlah');
        $return = $barang-$entry;
        return $return;
    }
}
