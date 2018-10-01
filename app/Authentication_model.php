<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Authentication_model extends Model
{
    public function login($username,$password){
        $query = DB::table('users')
            ->where('user_username','=',$username)
            ->where('user_password','=',$password)
            ->get();
        return $query;
    }
    public function resetPassword($id,$baru,$lama){
        $query = DB::table('users')
            ->where('id','=',$id)
            ->get();
        if($query[0]->user_password == $lama){
            DB::table('users')
                ->where('id','=',$id)
                ->update(['user_password' => $baru]);
            return 1;
        }else{
            return 0;
        }
    }
}
