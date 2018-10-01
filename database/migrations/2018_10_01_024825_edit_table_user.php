<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //rename email to username
        Schema::table('users', function (Blueprint $table){
            $table->renameColumn('user_email', 'user_username');
        });

        // adding column NIK
        Schema::table('users', function (Blueprint $table){
           $table->string('NIP'); 
        });
    }

    public function down()
    {
        //rollback
        Schema::table('users', function (Blueprint $table){
            $table->renameColumn('user_username', 'user_email');
        });
    }
}
