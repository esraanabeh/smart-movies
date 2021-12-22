<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site')->delete();
        
        \DB::table('site')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ar_title' => 'تسوق',
                'en_title' => 'Tassawaq',
                'ar_desc' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم',
                'en_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
                'tags' => 'tag1 , tag2 , tag3 , tag4',
                'email' => 'info@domain.net',
                'phone' => '9650733441',
                'whatsapp' => '9650733441',
                'ios' => 'https://www.google.com/',
                'ios_version' => '1.0',
                'ios_version_text' => '1.0.0',
                'android' => 'https://www.google.com/',
                'android_version' => '1.0',
                'created_at' => '2018-11-04 10:51:58',
                'updated_at' => '2021-08-18 12:51:21',
            ),
        ));
        
        
    }
}