<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UpdateOrdersPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->insert(array(
                                              0 =>
                                                  array(
                                                      'id'         => 2372,
                                                      'group_id'   => 2,
                                                      'permission' => 'vendor_orders_edit',
                                                      'created_at' => '2021-08-26 15:25:46',
                                                      'updated_at' => '2021-08-26 15:25:46',
                                                  ),

                                          ));
    }
}
