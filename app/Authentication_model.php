<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Authentication_model extends Model
{
    public function login($email,$password){
        $query = DB::table('users')
            ->where('user_email','=',$email)
            ->where('user_password','=',$password)
            ->get();
        return $query;
    }
}
