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
                                       'ar_name'     => 'اسراء',
                                       'en_name'   =>'esraa',
                                       'email'    => 'info@domain.com',
                                       'phone'    => '50733441',
                                       'password' => bcrypt('12345678'),
                                       'active'   => 'yes',
                                       'type'     => 'admin',
                                       'group_id' => 1,
                                   ]);
    }
}
