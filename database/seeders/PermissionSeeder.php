<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('permissions')->insert([
        'group_id' => 1,
        'permission' => 'groups_all',
    ]);

    DB::table('permissions')->insert([
      'group_id' => 1,
      'permission' => 'groups_add',
  ]);

  DB::table('permissions')->insert([
    'group_id' => 1,
    'permission' => 'groups_all',
]);

DB::table('permissions')->insert([
  'group_id' => 1,
  'permission' => 'groups_edit',
]);

DB::table('permissions')->insert([
  'group_id' => 1,
  'permission' => 'groups_delete',
]);
    }
}
