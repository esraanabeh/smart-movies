<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
                                       'name'     => 'name',
                                     
                                       'email'    => 'admin@admin.com',
                                       'group_id' => 1,
                                       'password' => bcrypt('123456'),
                                       'active'   => 'yes',
                                       'type'     => 'admin',
                                      
                                   ]);
    }
}
