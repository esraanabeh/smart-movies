<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 2309,
                'group_id' => 1,
                'permission' => 'site_edit',
                'created_at' => '2021-08-26 15:25:44',
                'updated_at' => '2021-08-26 15:25:44',
            ),
            1 =>
            array (
                'id' => 2310,
                'group_id' => 1,
                'permission' => 'social_media_all',
                'created_at' => '2021-08-26 15:25:44',
                'updated_at' => '2021-08-26 15:25:44',
            ),
            2 =>
            array (
                'id' => 2311,
                'group_id' => 1,
                'permission' => 'social_media_edit',
                'created_at' => '2021-08-26 15:25:44',
                'updated_at' => '2021-08-26 15:25:44',
            ),
            3 =>
            array (
                'id' => 2312,
                'group_id' => 1,
                'permission' => 'banks_all',
                'created_at' => '2021-08-26 15:25:44',
                'updated_at' => '2021-08-26 15:25:44',
            ),
            4 =>
            array (
                'id' => 2313,
                'group_id' => 1,
                'permission' => 'banks_add',
                'created_at' => '2021-08-26 15:25:44',
                'updated_at' => '2021-08-26 15:25:44',
            ),
            5 =>
            array (
                'id' => 2314,
                'group_id' => 1,
                'permission' => 'banks_edit',
                'created_at' => '2021-08-26 15:25:44',
                'updated_at' => '2021-08-26 15:25:44',
            ),
            6 =>
            array (
                'id' => 2315,
                'group_id' => 1,
                'permission' => 'banks_delete',
                'created_at' => '2021-08-26 15:25:44',
                'updated_at' => '2021-08-26 15:25:44',
            ),
            7 =>
            array (
                'id' => 2316,
                'group_id' => 1,
                'permission' => 'log_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            8 =>
            array (
                'id' => 2317,
                'group_id' => 1,
                'permission' => 'notifications_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            9 =>
            array (
                'id' => 2318,
                'group_id' => 1,
                'permission' => 'notifications_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            10 =>
            array (
                'id' => 2319,
                'group_id' => 1,
                'permission' => 'groups_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            11 =>
            array (
                'id' => 2320,
                'group_id' => 1,
                'permission' => 'groups_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            12 =>
            array (
                'id' => 2321,
                'group_id' => 1,
                'permission' => 'groups_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            13 =>
            array (
                'id' => 2322,
                'group_id' => 1,
                'permission' => 'groups_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            14 =>
            array (
                'id' => 2323,
                'group_id' => 1,
                'permission' => 'admins_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            15 =>
            array (
                'id' => 2324,
                'group_id' => 1,
                'permission' => 'admins_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            16 =>
            array (
                'id' => 2325,
                'group_id' => 1,
                'permission' => 'admins_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            17 =>
            array (
                'id' => 2326,
                'group_id' => 1,
                'permission' => 'admins_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            18 =>
            array (
                'id' => 2327,
                'group_id' => 1,
                'permission' => 'users_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            19 =>
            array (
                'id' => 2328,
                'group_id' => 1,
                'permission' => 'users_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            20 =>
            array (
                'id' => 2329,
                'group_id' => 1,
                'permission' => 'users_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            21 =>
            array (
                'id' => 2330,
                'group_id' => 1,
                'permission' => 'users_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            22 =>
            array (
                'id' => 2331,
                'group_id' => 1,
                'permission' => 'ads_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            23 =>
            array (
                'id' => 2332,
                'group_id' => 1,
                'permission' => 'ads_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            24 =>
            array (
                'id' => 2333,
                'group_id' => 1,
                'permission' => 'ads_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            25 =>
            array (
                'id' => 2334,
                'group_id' => 1,
                'permission' => 'ads_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            26 =>
            array (
                'id' => 2335,
                'group_id' => 1,
                'permission' => 'product_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            27 =>
            array (
                'id' => 2336,
                'group_id' => 1,
                'permission' => 'product_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            28 =>
            array (
                'id' => 2337,
                'group_id' => 1,
                'permission' => 'product_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            29 =>
            array (
                'id' => 2338,
                'group_id' => 1,
                'permission' => 'product_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            30 =>
            array (
                'id' => 2339,
                'group_id' => 1,
                'permission' => 'tutorials_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            31 =>
            array (
                'id' => 2340,
                'group_id' => 1,
                'permission' => 'tutorials_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            32 =>
            array (
                'id' => 2341,
                'group_id' => 1,
                'permission' => 'tutorials_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            33 =>
            array (
                'id' => 2342,
                'group_id' => 1,
                'permission' => 'tutorials_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            34 =>
            array (
                'id' => 2343,
                'group_id' => 1,
                'permission' => 'mall_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            35 =>
            array (
                'id' => 2344,
                'group_id' => 1,
                'permission' => 'mall_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            36 =>
            array (
                'id' => 2345,
                'group_id' => 1,
                'permission' => 'mall_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            37 =>
            array (
                'id' => 2346,
                'group_id' => 1,
                'permission' => 'mall_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            38 =>
            array (
                'id' => 2347,
                'group_id' => 1,
                'permission' => 'slider_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            39 =>
            array (
                'id' => 2348,
                'group_id' => 1,
                'permission' => 'slider_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            40 =>
            array (
                'id' => 2349,
                'group_id' => 1,
                'permission' => 'slider_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            41 =>
            array (
                'id' => 2350,
                'group_id' => 1,
                'permission' => 'slider_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            42 =>
            array (
                'id' => 2351,
                'group_id' => 1,
                'permission' => 'pages_all',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            43 =>
            array (
                'id' => 2352,
                'group_id' => 1,
                'permission' => 'pages_add',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            44 =>
            array (
                'id' => 2353,
                'group_id' => 1,
                'permission' => 'pages_edit',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            45 =>
            array (
                'id' => 2354,
                'group_id' => 1,
                'permission' => 'pages_delete',
                'created_at' => '2021-08-26 15:25:45',
                'updated_at' => '2021-08-26 15:25:45',
            ),
            46 =>
            array (
                'id' => 2355,
                'group_id' => 1,
                'permission' => 'contact_all',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            47 =>
            array (
                'id' => 2356,
                'group_id' => 1,
                'permission' => 'contact_edit',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            48 =>
            array (
                'id' => 2357,
                'group_id' => 1,
                'permission' => 'contact_delete',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            49 =>
            array (
                'id' => 2358,
                'group_id' => 1,
                'permission' => 'sizes_all',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            50 =>
            array (
                'id' => 2359,
                'group_id' => 1,
                'permission' => 'sizes_add',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            51 =>
            array (
                'id' => 2360,
                'group_id' => 1,
                'permission' => 'sizes_edit',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            52 =>
            array (
                'id' => 2361,
                'group_id' => 1,
                'permission' => 'sizes_delete',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            53 =>
            array (
                'id' => 2362,
                'group_id' => 1,
                'permission' => 'colors_all',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            54 =>
            array (
                'id' => 2363,
                'group_id' => 1,
                'permission' => 'colors_add',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            55 =>
            array (
                'id' => 2364,
                'group_id' => 1,
                'permission' => 'colors_edit',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            56 =>
            array (
                'id' => 2365,
                'group_id' => 1,
                'permission' => 'colors_delete',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
        ));


    }
}
