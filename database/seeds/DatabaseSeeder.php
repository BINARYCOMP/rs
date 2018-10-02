<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
        
    }
}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')
            ->insert(['user_username'=>'admin', 'user_password' => 'admin', 'user_name' => 'admin', 'user_role' => 'ADMIN']);
    }

}