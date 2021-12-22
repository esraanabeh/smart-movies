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
        DB::table('site')->insert([
          'ar_title' => 'تحصيلات',
          'ar_title' => 'Tswaaq',
          'ar_desc' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم',
          'en_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
          'email' => 'info@domain.net',
          'phone' => '9650733441',
          'whatsapp' => '9650733441',
          'ios' => 'https://www.google.com/',
          'ios_version' => '1.0',
          'ios_version_text' => '1.0.0',
          'android' => 'https://www.google.com/',
          'android_version' => '1.0',

      ]);
    }
}
