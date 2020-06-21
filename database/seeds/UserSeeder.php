<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Rongon Bairagee',
            'user_name' => 'rongon',
            'email' => 'rongonbairagee@gmail.com',
            'password' => bcrypt('91221143'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Chonchol Bairagee',
            'user_name' => 'chonchol',
            'email' => 'rbchonchol1999@gmail.com',
            'password' => bcrypt('91221143'),
        ]);
    }
}
