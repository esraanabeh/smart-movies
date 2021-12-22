<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'group_id' => 1,
                'bank_id' => 114,
                'user_id' => 0,
                'first_name' => 'Ahmed',
                'last_name' => 'Kamal',
                'name' => '',
                'email' => 'info@domain.com',
                'password' => '$2y$10$w2octY95Z4/Kw3x8ALOaPONdQt8F.pMkSARh1efADS7mHCyBKHYq6',
                'phone' => '50733441',
                'active' => 'yes',
                'type' => 'admin',
                'token' => '$2y$10$0hfWGXTtDjp41ytCwX0whuUA7Xp7ltmLUXBSHmwa3yrAqIGnPlKye',
                'remember_token' => 'F32bCrNSDs3TqcEvNnOvj6yHtp6dPCP6bNM9dE3qCPIR5KIjgMKrjre8x6rW',
                'vendor' => 'single',
                'iban' => '',
                'logo' => 0,
                'knet' => 'no',
                'visa' => 'no',
                'master' => 'no',
                'express' => 'no',
                'knet_comission' => 0.0,
                'knet_amount' => 0.0,
                'visa_comission' => 0.0,
                'visa_amount' => 0.0,
                'master_comission' => 0.0,
                'master_amount' => 0.0,
                'express_comission' => 0.0,
                'express_amount' => 0.0,
                'min_order' => 0.0,
                'links' => 'no',
                'api' => 'no',
                'who' => 'user',
                'created_at' => NULL,
                'updated_at' => '2021-08-02 02:24:49',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'group_id' => 0,
                'bank_id' => 114,
                'user_id' => 0,
                'first_name' => 'Alaa',
                'last_name' => 'ali',
                'name' => '',
                'email' => 'user@domain.com',
                'password' => '$2y$10$J4pZqApnQLSsvcDZeJ69i.ikO5x9cAOeUTp4Ji7tXHoj94fjsAT86',
                'phone' => '66554433',
                'active' => 'yes',
                'type' => 'user',
                'token' => '$2y$10$H5a60bvjixWOF2.KWFd8UeSmSgTjUMTFupbqdndD5aQrUTOcQam8W',
                'remember_token' => NULL,
                'vendor' => 'single',
                'iban' => '',
                'logo' => 0,
                'knet' => 'no',
                'visa' => 'no',
                'master' => 'no',
                'express' => 'no',
                'knet_comission' => 0.0,
                'knet_amount' => 0.0,
                'visa_comission' => 0.0,
                'visa_amount' => 0.0,
                'master_comission' => 0.0,
                'master_amount' => 0.0,
                'express_comission' => 0.0,
                'express_amount' => 0.0,
                'min_order' => 0.0,
                'links' => 'no',
                'api' => 'no',
                'who' => 'user',
                'created_at' => '2021-06-08 08:43:28',
                'updated_at' => '2021-06-24 12:22:11',
                'deleted_at' => NULL,
            ),
        ));


    }
}
