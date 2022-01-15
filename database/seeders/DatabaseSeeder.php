<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(PermissionSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
      //$this->call(GroupsTableSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(SiteSeeder::class);
      
    }


}
