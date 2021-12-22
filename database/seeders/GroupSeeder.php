<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('groups')->insert([
        'ar_name' => 'الإدارة العليا ',
        'en_name' => 'Top Management',
        'type' => 'admin',

    ]);
    }
}
