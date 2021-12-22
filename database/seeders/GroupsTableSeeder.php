<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('groups')->delete();

        \DB::table('groups')->insert(array (
            0 =>
            array (
                'id' => 1,
                'ar_name' => 'الإدراة العليا',
                'en_name' => 'Top Management',
                'type' => 'admin',
                'created_at' => NULL,
                'updated_at' => NULL,
                 
            ),
        ));


    }
}
