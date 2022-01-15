<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
          'ar_title' => 'افلام ذكية',
          'en_title' => 'Smart Movies',
          'package_text' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم',
          'footer_text' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
          'email' => 'admin@admin.net',
        

      ]);
    }
}
