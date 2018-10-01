<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUserAddRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adding role
        Schema::table('users',function (Blueprint $table){
            $table->string('user_role');
        });

        Schema::table('users', function (Blueprint $table){
            $table->renameColumn('NIP', 'user_nip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropColumn('user_role');
        });
    }
}
