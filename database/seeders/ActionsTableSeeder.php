<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actions')->delete();
        
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:46:24',
                'updated_at' => '2021-06-08 00:46:24',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:46:25',
                'updated_at' => '2021-06-08 00:46:25',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  بيانات حسابه',
                'en_action' => 'update his profile info',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:47:49',
                'updated_at' => '2021-06-08 00:47:49',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  بيانات حسابه',
                'en_action' => 'update his profile info',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:47:54',
                'updated_at' => '2021-06-08 00:47:54',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:47:58',
                'updated_at' => '2021-06-08 00:47:58',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:49:34',
                'updated_at' => '2021-06-08 00:49:34',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل إعدادات الموقع',
                'en_action' => 'Edit site settings ',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:49:53',
                'updated_at' => '2021-06-08 00:49:53',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:49:53',
                'updated_at' => '2021-06-08 00:49:53',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:49:57',
                'updated_at' => '2021-06-08 00:49:57',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:50:45',
                'updated_at' => '2021-06-08 00:50:45',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:51:49',
                'updated_at' => '2021-06-08 00:51:49',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل إعدادات الموقع',
                'en_action' => 'Edit site settings ',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:51:58',
                'updated_at' => '2021-06-08 00:51:58',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:51:59',
                'updated_at' => '2021-06-08 00:51:59',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:52:10',
                'updated_at' => '2021-06-08 00:52:10',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة حساب تواصل إجتماعي جديد https://www.google.com/',
                'en_action' => 'Add new social media accounthttps://www.google.com/',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:52:20',
                'updated_at' => '2021-06-08 00:52:20',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:52:22',
                'updated_at' => '2021-06-08 00:52:22',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:52:27',
                'updated_at' => '2021-06-08 00:52:27',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => '1',
                'ar_action' => 'قام بحذف حساب تواصل إجتماعي حالي https://www.google.com/',
                'en_action' => 'Delete current social media account https://www.google.com/',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:52:29',
                'updated_at' => '2021-06-08 00:52:29',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:52:29',
                'updated_at' => '2021-06-08 00:52:29',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:53:12',
                'updated_at' => '2021-06-08 00:53:12',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة حساب تواصل إجتماعي جديد https://www.google.com/',
                'en_action' => 'Add new social media accounthttps://www.google.com/',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:53:25',
                'updated_at' => '2021-06-08 00:53:25',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:53:28',
                'updated_at' => '2021-06-08 00:53:28',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:53:40',
                'updated_at' => '2021-06-08 00:53:40',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:54:03',
                'updated_at' => '2021-06-08 00:54:03',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => '1',
                'ar_action' => 'قام بحذف حساب تواصل إجتماعي حالي https://www.google.com/',
                'en_action' => 'Delete current social media account https://www.google.com/',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:54:09',
                'updated_at' => '2021-06-08 00:54:09',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:54:09',
                'updated_at' => '2021-06-08 00:54:09',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:58:47',
                'updated_at' => '2021-06-08 00:58:47',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 00:59:24',
                'updated_at' => '2021-06-08 00:59:24',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية ',
                'en_action' => 'Edit current country ',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:02:42',
                'updated_at' => '2021-06-08 01:02:42',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:02:42',
                'updated_at' => '2021-06-08 01:02:42',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:02:49',
                'updated_at' => '2021-06-08 01:02:49',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية ',
                'en_action' => 'Edit current country ',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:02:58',
                'updated_at' => '2021-06-08 01:02:58',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:02:58',
                'updated_at' => '2021-06-08 01:02:58',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:03:39',
                'updated_at' => '2021-06-08 01:03:39',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:04:23',
                'updated_at' => '2021-06-08 01:04:23',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:08:07',
                'updated_at' => '2021-06-08 01:08:07',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة مدينة جديدة حولي',
                'en_action' => 'Add new city Hawaly',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:10:30',
                'updated_at' => '2021-06-08 01:10:30',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:10:32',
                'updated_at' => '2021-06-08 01:10:32',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مدينة حالية حولي',
                'en_action' => 'Edit current city Hawaly',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:11:04',
                'updated_at' => '2021-06-08 01:11:04',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:11:04',
                'updated_at' => '2021-06-08 01:11:04',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:11:08',
                'updated_at' => '2021-06-08 01:11:08',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:16:32',
                'updated_at' => '2021-06-08 01:16:32',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:17:41',
                'updated_at' => '2021-06-08 01:17:41',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:18:14',
                'updated_at' => '2021-06-08 01:18:14',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:18:17',
                'updated_at' => '2021-06-08 01:18:17',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:19:20',
                'updated_at' => '2021-06-08 01:19:20',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:19:44',
                'updated_at' => '2021-06-08 01:19:44',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:20:24',
                'updated_at' => '2021-06-08 01:20:24',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:20:28',
                'updated_at' => '2021-06-08 01:20:28',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد تجربة',
                'en_action' => 'Send new notification test',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:20:46',
                'updated_at' => '2021-06-08 01:20:46',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:20:46',
                'updated_at' => '2021-06-08 01:20:46',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:21:19',
                'updated_at' => '2021-06-08 01:21:19',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:21:37',
                'updated_at' => '2021-06-08 01:21:37',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:21:40',
                'updated_at' => '2021-06-08 01:21:40',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:21:46',
                'updated_at' => '2021-06-08 01:21:46',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 01:21:53',
                'updated_at' => '2021-06-08 01:21:53',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:12:43',
                'updated_at' => '2021-06-08 08:12:43',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:12:44',
                'updated_at' => '2021-06-08 08:12:44',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:13:10',
                'updated_at' => '2021-06-08 08:13:10',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:23:22',
                'updated_at' => '2021-06-08 08:23:22',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:23:22',
                'updated_at' => '2021-06-08 08:23:22',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:23:41',
                'updated_at' => '2021-06-08 08:23:41',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:29:35',
                'updated_at' => '2021-06-08 08:29:35',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:30:58',
                'updated_at' => '2021-06-08 08:30:58',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:31:13',
                'updated_at' => '2021-06-08 08:31:13',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:31:39',
                'updated_at' => '2021-06-08 08:31:39',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:33:07',
                'updated_at' => '2021-06-08 08:33:07',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:33:22',
                'updated_at' => '2021-06-08 08:33:22',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:33:51',
                'updated_at' => '2021-06-08 08:33:51',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة مشرف جديد مشرف اول',
                'en_action' => 'Add new supervisor مشرف اول',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:36:56',
                'updated_at' => '2021-06-08 08:36:56',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:37:33',
                'updated_at' => '2021-06-08 08:37:33',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل مشرف حالي مشرف اول',
                'en_action' => 'Edit current supervisor مشرف اول',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:39:07',
                'updated_at' => '2021-06-08 08:39:07',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:39:07',
                'updated_at' => '2021-06-08 08:39:07',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => '1',
                'ar_action' => 'قام بحذف مشرف حالي مشرف اول',
                'en_action' => 'Delete current supervisor مشرف اول',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:39:26',
                'updated_at' => '2021-06-08 08:39:26',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:39:26',
                'updated_at' => '2021-06-08 08:39:26',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:42:59',
                'updated_at' => '2021-06-08 08:42:59',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة عضو جديد بالتطبيق عضو ١',
                'en_action' => 'Add new application user عضو ١',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:43:28',
                'updated_at' => '2021-06-08 08:43:28',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:43:31',
                'updated_at' => '2021-06-08 08:43:31',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:43:50',
                'updated_at' => '2021-06-08 08:43:50',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  عضو حالي بالتطبيق عضو ١',
                'en_action' => 'Edit current application user عضو ١',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:44:18',
                'updated_at' => '2021-06-08 08:44:18',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-08 08:44:18',
                'updated_at' => '2021-06-08 08:44:18',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-08 13:17:38',
                'updated_at' => '2021-06-08 13:17:38',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-08 13:17:38',
                'updated_at' => '2021-06-08 13:17:38',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-08 13:17:51',
                'updated_at' => '2021-06-08 13:17:51',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة عنوان جديد للعضو عضو ١',
                'en_action' => 'Add new address for user عضو ١',
                'ip' => '::1',
                'created_at' => '2021-06-08 13:22:51',
                'updated_at' => '2021-06-08 13:22:51',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل عنوان للعضو عضو ١',
                'en_action' => ' current address for user عضو ١',
                'ip' => '::1',
                'created_at' => '2021-06-08 13:26:45',
                'updated_at' => '2021-06-08 13:26:45',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة فرع جديد فرع السالمية في الكويت',
                'en_action' => 'Add new branch Salmyia Branch in Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:04:28',
                'updated_at' => '2021-06-08 14:04:28',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل فرع حالي فرع السالمية في الكويت',
                'en_action' => 'Edit current branch Salmyia Branch in Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:07:59',
                'updated_at' => '2021-06-08 14:07:59',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:15:32',
                'updated_at' => '2021-06-08 14:15:32',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:15:48',
                'updated_at' => '2021-06-08 14:15:48',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:15:56',
                'updated_at' => '2021-06-08 14:15:56',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة قسم جديد قسم ١',
                'en_action' => 'Add new category Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:21:21',
                'updated_at' => '2021-06-08 14:21:21',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:21:24',
                'updated_at' => '2021-06-08 14:21:24',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:21:43',
                'updated_at' => '2021-06-08 14:21:43',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل قسم حالي قسم ١',
                'en_action' => 'Edit current category Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:22:03',
                'updated_at' => '2021-06-08 14:22:03',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:22:03',
                'updated_at' => '2021-06-08 14:22:03',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:22:34',
                'updated_at' => '2021-06-08 14:22:34',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:22:47',
                'updated_at' => '2021-06-08 14:22:47',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:22:55',
                'updated_at' => '2021-06-08 14:22:55',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:23:04',
                'updated_at' => '2021-06-08 14:23:04',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:23:19',
                'updated_at' => '2021-06-08 14:23:19',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 14:23:54',
                'updated_at' => '2021-06-08 14:23:54',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 15:01:06',
                'updated_at' => '2021-06-08 15:01:06',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 15:01:23',
                'updated_at' => '2021-06-08 15:01:23',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:45:00',
                'updated_at' => '2021-06-08 19:45:00',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:45:01',
                'updated_at' => '2021-06-08 19:45:01',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:45:15',
                'updated_at' => '2021-06-08 19:45:15',
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:45:21',
                'updated_at' => '2021-06-08 19:45:21',
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:45:21',
                'updated_at' => '2021-06-08 19:45:21',
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:48:27',
                'updated_at' => '2021-06-08 19:48:27',
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية ',
                'en_action' => 'Edit current country ',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:48:34',
                'updated_at' => '2021-06-08 19:48:34',
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:48:35',
                'updated_at' => '2021-06-08 19:48:35',
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية ',
                'en_action' => 'Edit current country ',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:58:24',
                'updated_at' => '2021-06-08 19:58:24',
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 19:58:25',
                'updated_at' => '2021-06-08 19:58:25',
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:00:25',
                'updated_at' => '2021-06-08 20:00:25',
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:03:16',
                'updated_at' => '2021-06-08 20:03:16',
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة دولة فروع جديدة الكويت',
                'en_action' => 'Add new country of branches Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:05:03',
                'updated_at' => '2021-06-08 20:05:03',
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:05:06',
                'updated_at' => '2021-06-08 20:05:06',
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:05:30',
                'updated_at' => '2021-06-08 20:05:30',
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة دولة فروع جديدة السعودية',
                'en_action' => 'Add new country of branches Saudia',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:05:53',
                'updated_at' => '2021-06-08 20:05:53',
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:05:55',
                'updated_at' => '2021-06-08 20:05:55',
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل دولة فروع حالية السعودية',
                'en_action' => 'Edit current country of brances Saudia',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:06:52',
                'updated_at' => '2021-06-08 20:06:52',
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:06:53',
                'updated_at' => '2021-06-08 20:06:53',
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة السعودية',
                'en_action' => 'Show branches for country of Saudia',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:08:32',
                'updated_at' => '2021-06-08 20:08:32',
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:09:27',
                'updated_at' => '2021-06-08 20:09:27',
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة دولة فروع جديدة الإمارات',
                'en_action' => 'Add new country of branches UAE',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:09:43',
                'updated_at' => '2021-06-08 20:09:43',
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة فرع جديد فرع ١ في السعودية',
                'en_action' => 'Add new branch Branch 1 in Saudia',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:10:56',
                'updated_at' => '2021-06-08 20:10:56',
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل فرع حالي فرع ١ في السعودية',
                'en_action' => 'Edit current branch Branch 1 in Saudia',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:11:06',
                'updated_at' => '2021-06-08 20:11:06',
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:11:13',
                'updated_at' => '2021-06-08 20:11:13',
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة السعودية',
                'en_action' => 'Show branches for country of Saudia',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:11:17',
                'updated_at' => '2021-06-08 20:11:17',
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => '1',
                'ar_action' => 'قام بحذف دولة فروع حالية السعودية',
                'en_action' => 'Delete current country of branches Saudia',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:11:25',
                'updated_at' => '2021-06-08 20:11:25',
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:11:26',
                'updated_at' => '2021-06-08 20:11:26',
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:12:02',
                'updated_at' => '2021-06-08 20:12:02',
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:12:23',
                'updated_at' => '2021-06-08 20:12:23',
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:12:31',
                'updated_at' => '2021-06-08 20:12:31',
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الإمارات',
                'en_action' => 'Show branches for country of UAE',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:12:34',
                'updated_at' => '2021-06-08 20:12:34',
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الكويت',
                'en_action' => 'Show branches for country of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:12:38',
                'updated_at' => '2021-06-08 20:12:38',
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:17:50',
                'updated_at' => '2021-06-08 20:17:50',
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:18:28',
                'updated_at' => '2021-06-08 20:18:28',
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:18:49',
                'updated_at' => '2021-06-08 20:18:49',
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد منتج ١',
                'en_action' => 'Add new product Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:29:56',
                'updated_at' => '2021-06-08 20:29:56',
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:29:59',
                'updated_at' => '2021-06-08 20:29:59',
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => '1',
                'ar_action' => 'قام بحذف منتج حالي منتج ١',
                'en_action' => 'Delete current product Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:30:08',
                'updated_at' => '2021-06-08 20:30:08',
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:30:08',
                'updated_at' => '2021-06-08 20:30:08',
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:31:41',
                'updated_at' => '2021-06-08 20:31:41',
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:31:43',
                'updated_at' => '2021-06-08 20:31:43',
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي منتج ١',
                'en_action' => 'Edit current product Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:34:35',
                'updated_at' => '2021-06-08 20:34:35',
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:34:35',
                'updated_at' => '2021-06-08 20:34:35',
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي منتج ١',
                'en_action' => 'Edit current product Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:34:47',
                'updated_at' => '2021-06-08 20:34:47',
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:34:48',
                'updated_at' => '2021-06-08 20:34:48',
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي منتج ١',
                'en_action' => 'Edit current product Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:35:40',
                'updated_at' => '2021-06-08 20:35:40',
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:35:41',
                'updated_at' => '2021-06-08 20:35:41',
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:38:34',
                'updated_at' => '2021-06-08 20:38:34',
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:38:44',
                'updated_at' => '2021-06-08 20:38:44',
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة كوبون خصم جديد code',
                'en_action' => 'Add new promotion code code',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:40:18',
                'updated_at' => '2021-06-08 20:40:18',
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:40:21',
                'updated_at' => '2021-06-08 20:40:21',
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  كوبون خصم حالي code',
                'en_action' => 'Edit current promotion code code',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:40:34',
                'updated_at' => '2021-06-08 20:40:34',
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:40:34',
                'updated_at' => '2021-06-08 20:40:34',
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:45:11',
                'updated_at' => '2021-06-08 20:45:11',
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 20:45:23',
                'updated_at' => '2021-06-08 20:45:23',
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:35:01',
                'updated_at' => '2021-06-08 21:35:01',
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:35:39',
                'updated_at' => '2021-06-08 21:35:39',
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالإعلانات اعلان الرئيسية',
                'en_action' => 'Add new ads Home Ads',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:45:12',
                'updated_at' => '2021-06-08 21:45:12',
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:45:15',
                'updated_at' => '2021-06-08 21:45:15',
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:45:46',
                'updated_at' => '2021-06-08 21:45:46',
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:46:29',
                'updated_at' => '2021-06-08 21:46:29',
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:46:42',
                'updated_at' => '2021-06-08 21:46:42',
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالإعلانات اعلان تطبيق',
                'en_action' => 'Add new ads Application Ads',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:47:04',
                'updated_at' => '2021-06-08 21:47:04',
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:47:07',
                'updated_at' => '2021-06-08 21:47:07',
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:47:21',
                'updated_at' => '2021-06-08 21:47:21',
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات اعلان الرئيسية',
                'en_action' => 'Edit current ads Home Ads',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:49:50',
                'updated_at' => '2021-06-08 21:49:50',
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:49:50',
                'updated_at' => '2021-06-08 21:49:50',
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات اعلان تطبيق',
                'en_action' => 'Edit current ads Application Ads',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:50:01',
                'updated_at' => '2021-06-08 21:50:01',
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:50:01',
                'updated_at' => '2021-06-08 21:50:01',
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:58:50',
                'updated_at' => '2021-06-08 21:58:50',
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 21:59:29',
                'updated_at' => '2021-06-08 21:59:29',
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بعارض الصور ',
                'en_action' => 'Add new slider ',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:00:06',
                'updated_at' => '2021-06-08 22:00:06',
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:00:09',
                'updated_at' => '2021-06-08 22:00:09',
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:00:26',
                'updated_at' => '2021-06-08 22:00:26',
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور ',
                'en_action' => 'Edit current slider ',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:00:34',
                'updated_at' => '2021-06-08 22:00:34',
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:00:34',
                'updated_at' => '2021-06-08 22:00:34',
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:05:50',
                'updated_at' => '2021-06-08 22:05:50',
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صفحة جديدة من نحن',
                'en_action' => 'Add new page About Us',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:06:17',
                'updated_at' => '2021-06-08 22:06:17',
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صفحة جديدة سياسة الخصوصية',
                'en_action' => 'Add new page Privacy Policy',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:08:22',
                'updated_at' => '2021-06-08 22:08:22',
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صفحة جديدة سياسة الإسترجاع',
                'en_action' => 'Add new page Return Policy',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:08:46',
                'updated_at' => '2021-06-08 22:08:46',
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صفحة جديدة الشروط والأحكام',
                'en_action' => 'Add new page Terms and Conditions',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:09:20',
                'updated_at' => '2021-06-08 22:09:20',
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صفحة جديدة نص معرفة المزيد',
                'en_action' => 'Add new page More to know text',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:10:04',
                'updated_at' => '2021-06-08 22:10:04',
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:10:52',
                'updated_at' => '2021-06-08 22:10:52',
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:12:23',
                'updated_at' => '2021-06-08 22:12:23',
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:12:34',
                'updated_at' => '2021-06-08 22:12:34',
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صفحة حالية من نحن',
                'en_action' => 'Edit current page About Us',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:13:00',
                'updated_at' => '2021-06-08 22:13:00',
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:13:00',
                'updated_at' => '2021-06-08 22:13:00',
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صفحة حالية سياسة الخصوصية',
                'en_action' => 'Edit current page Privacy Policy',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:13:56',
                'updated_at' => '2021-06-08 22:13:56',
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:13:56',
                'updated_at' => '2021-06-08 22:13:56',
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:15:08',
                'updated_at' => '2021-06-08 22:15:08',
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:15:59',
                'updated_at' => '2021-06-08 22:15:59',
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:16:02',
                'updated_at' => '2021-06-08 22:16:02',
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:27:23',
                'updated_at' => '2021-06-08 22:27:23',
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:27:37',
                'updated_at' => '2021-06-08 22:27:37',
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:27:57',
                'updated_at' => '2021-06-08 22:27:57',
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:29:27',
                'updated_at' => '2021-06-08 22:29:27',
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:31:57',
                'updated_at' => '2021-06-08 22:31:57',
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:33:29',
                'updated_at' => '2021-06-08 22:33:29',
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:34:01',
                'updated_at' => '2021-06-08 22:34:01',
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:34:31',
                'updated_at' => '2021-06-08 22:34:31',
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:35:53',
                'updated_at' => '2021-06-08 22:35:53',
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:36:20',
                'updated_at' => '2021-06-08 22:36:20',
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة حساب تواصل إجتماعي جديد https://www.google.com/',
                'en_action' => 'Add new social media accounthttps://www.google.com/',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:36:42',
                'updated_at' => '2021-06-08 22:36:42',
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة حساب تواصل إجتماعي جديد https://www.google.com/2',
                'en_action' => 'Add new social media accounthttps://www.google.com/2',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:36:53',
                'updated_at' => '2021-06-08 22:36:53',
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:36:55',
                'updated_at' => '2021-06-08 22:36:55',
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:37:43',
                'updated_at' => '2021-06-08 22:37:43',
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:38:41',
                'updated_at' => '2021-06-08 22:38:41',
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:39:37',
                'updated_at' => '2021-06-08 22:39:37',
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:40:17',
                'updated_at' => '2021-06-08 22:40:17',
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:40:44',
                'updated_at' => '2021-06-08 22:40:44',
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:41:00',
                'updated_at' => '2021-06-08 22:41:00',
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:41:23',
                'updated_at' => '2021-06-08 22:41:23',
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:41:32',
                'updated_at' => '2021-06-08 22:41:32',
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:44:49',
                'updated_at' => '2021-06-08 22:44:49',
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:45:00',
                'updated_at' => '2021-06-08 22:45:00',
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:45:16',
                'updated_at' => '2021-06-08 22:45:16',
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل حسابات التواصل الإجتماعي',
                'en_action' => 'Delete all social media accounts',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:51:05',
                'updated_at' => '2021-06-08 22:51:05',
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:51:05',
                'updated_at' => '2021-06-08 22:51:05',
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:51:18',
                'updated_at' => '2021-06-08 22:51:18',
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:53:10',
                'updated_at' => '2021-06-08 22:53:10',
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:53:35',
                'updated_at' => '2021-06-08 22:53:35',
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل المدن',
                'en_action' => 'Delete all cities',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:53:40',
                'updated_at' => '2021-06-08 22:53:40',
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:53:40',
                'updated_at' => '2021-06-08 22:53:40',
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:53:45',
                'updated_at' => '2021-06-08 22:53:45',
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:53:55',
                'updated_at' => '2021-06-08 22:53:55',
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:56:41',
                'updated_at' => '2021-06-08 22:56:41',
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:56:55',
                'updated_at' => '2021-06-08 22:56:55',
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:58:40',
                'updated_at' => '2021-06-08 22:58:40',
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:58:49',
                'updated_at' => '2021-06-08 22:58:49',
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:59:16',
                'updated_at' => '2021-06-08 22:59:16',
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-08 22:59:30',
                'updated_at' => '2021-06-08 22:59:30',
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة مدينة جديدة حولي',
                'en_action' => 'Add new city Hawaly',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:02:17',
                'updated_at' => '2021-06-08 23:02:17',
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:03:21',
                'updated_at' => '2021-06-08 23:03:21',
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل العناوين',
                'en_action' => 'Delete all addresses',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:07:29',
                'updated_at' => '2021-06-08 23:07:29',
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:07:41',
                'updated_at' => '2021-06-08 23:07:41',
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:12:13',
                'updated_at' => '2021-06-08 23:12:13',
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل دول الفروع',
                'en_action' => 'Delete all countries of branches',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:12:20',
                'updated_at' => '2021-06-08 23:12:20',
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:12:21',
                'updated_at' => '2021-06-08 23:12:21',
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:12:55',
                'updated_at' => '2021-06-08 23:12:55',
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الكويت',
                'en_action' => 'Show branches for country of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:12:58',
                'updated_at' => '2021-06-08 23:12:58',
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل الفروع',
                'en_action' => 'Delete all branches',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:13:15',
                'updated_at' => '2021-06-08 23:13:15',
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الكويت',
                'en_action' => 'Show branches for country of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:13:15',
                'updated_at' => '2021-06-08 23:13:15',
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:13:34',
                'updated_at' => '2021-06-08 23:13:34',
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:13:36',
                'updated_at' => '2021-06-08 23:13:36',
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:13:45',
                'updated_at' => '2021-06-08 23:13:45',
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:14:25',
                'updated_at' => '2021-06-08 23:14:25',
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:14:28',
                'updated_at' => '2021-06-08 23:14:28',
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:18:59',
                'updated_at' => '2021-06-08 23:18:59',
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:19:08',
                'updated_at' => '2021-06-08 23:19:08',
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:19:39',
                'updated_at' => '2021-06-08 23:19:39',
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:19:57',
                'updated_at' => '2021-06-08 23:19:57',
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:25:42',
                'updated_at' => '2021-06-08 23:25:42',
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:25:55',
                'updated_at' => '2021-06-08 23:25:55',
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:26:44',
                'updated_at' => '2021-06-08 23:26:44',
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:27:32',
                'updated_at' => '2021-06-08 23:27:32',
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل المشتركين بالنشرة البريدية',
                'en_action' => 'Delete all emails in newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:27:37',
                'updated_at' => '2021-06-08 23:27:37',
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:27:37',
                'updated_at' => '2021-06-08 23:27:37',
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:28:30',
                'updated_at' => '2021-06-08 23:28:30',
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:28:42',
                'updated_at' => '2021-06-08 23:28:42',
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:29:23',
                'updated_at' => '2021-06-08 23:29:23',
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:29:28',
                'updated_at' => '2021-06-08 23:29:28',
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل أكواد الخصم',
                'en_action' => 'Delete all promo codes',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:29:32',
                'updated_at' => '2021-06-08 23:29:32',
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:29:33',
                'updated_at' => '2021-06-08 23:29:33',
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:30:08',
                'updated_at' => '2021-06-08 23:30:08',
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل الصور بعارض الصور',
                'en_action' => 'Delete all images in slider',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:30:12',
                'updated_at' => '2021-06-08 23:30:12',
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:30:13',
                'updated_at' => '2021-06-08 23:30:13',
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:31:00',
                'updated_at' => '2021-06-08 23:31:00',
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:31:37',
                'updated_at' => '2021-06-08 23:31:37',
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:31:45',
                'updated_at' => '2021-06-08 23:31:45',
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-08 23:32:31',
                'updated_at' => '2021-06-08 23:32:31',
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-09 06:20:15',
                'updated_at' => '2021-06-09 06:20:15',
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-09 06:20:15',
                'updated_at' => '2021-06-09 06:20:15',
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-09 06:29:37',
                'updated_at' => '2021-06-09 06:29:37',
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالإعلانات اعلان ١',
                'en_action' => 'Add new ads Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-09 06:30:49',
                'updated_at' => '2021-06-09 06:30:49',
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-09 13:23:55',
                'updated_at' => '2021-06-09 13:23:55',
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-09 13:23:56',
                'updated_at' => '2021-06-09 13:23:56',
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:22:44',
                'updated_at' => '2021-06-10 11:22:44',
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:22:45',
                'updated_at' => '2021-06-10 11:22:45',
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:23:03',
                'updated_at' => '2021-06-10 11:23:03',
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:25:59',
                'updated_at' => '2021-06-10 11:25:59',
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة حساب تواصل إجتماعي جديد https://www.google.com/',
                'en_action' => 'Add new social media accounthttps://www.google.com/',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:28:37',
                'updated_at' => '2021-06-10 11:28:37',
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة حساب تواصل إجتماعي جديد https://www.googdle.com/',
                'en_action' => 'Add new social media accounthttps://www.googdle.com/',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:28:50',
                'updated_at' => '2021-06-10 11:28:50',
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة حساب تواصل إجتماعي جديد https://www.goodgle.com/',
                'en_action' => 'Add new social media accounthttps://www.goodgle.com/',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:28:59',
                'updated_at' => '2021-06-10 11:28:59',
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:33:50',
                'updated_at' => '2021-06-10 11:33:50',
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حساب تواصل إجتماعي حالي https://www.google.com/',
                'en_action' => 'Edit current social media account https://www.google.com/',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:34:06',
                'updated_at' => '2021-06-10 11:34:06',
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:34:06',
                'updated_at' => '2021-06-10 11:34:06',
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:35:22',
                'updated_at' => '2021-06-10 11:35:22',
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:35:44',
                'updated_at' => '2021-06-10 11:35:44',
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:35:51',
                'updated_at' => '2021-06-10 11:35:51',
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:36:50',
                'updated_at' => '2021-06-10 11:36:50',
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:37:19',
                'updated_at' => '2021-06-10 11:37:19',
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:39:46',
                'updated_at' => '2021-06-10 11:39:46',
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:43:27',
                'updated_at' => '2021-06-10 11:43:27',
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:44:55',
                'updated_at' => '2021-06-10 11:44:55',
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:47:49',
                'updated_at' => '2021-06-10 11:47:49',
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:48:22',
                'updated_at' => '2021-06-10 11:48:22',
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:48:25',
                'updated_at' => '2021-06-10 11:48:25',
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:52:03',
                'updated_at' => '2021-06-10 11:52:03',
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:52:23',
                'updated_at' => '2021-06-10 11:52:23',
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:52:54',
                'updated_at' => '2021-06-10 11:52:54',
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:53:01',
                'updated_at' => '2021-06-10 11:53:01',
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:53:16',
                'updated_at' => '2021-06-10 11:53:16',
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:54:15',
                'updated_at' => '2021-06-10 11:54:15',
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:55:17',
                'updated_at' => '2021-06-10 11:55:17',
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 11:55:46',
                'updated_at' => '2021-06-10 11:55:46',
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 12:00:02',
                'updated_at' => '2021-06-10 12:00:02',
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-10 12:01:34',
                'updated_at' => '2021-06-10 12:01:34',
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-10 12:07:02',
                'updated_at' => '2021-06-10 12:07:02',
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-06-10 12:09:06',
                'updated_at' => '2021-06-10 12:09:06',
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:12:26',
                'updated_at' => '2021-06-12 11:12:26',
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:12:27',
                'updated_at' => '2021-06-12 11:12:27',
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:12:34',
                'updated_at' => '2021-06-12 11:12:34',
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:22:38',
                'updated_at' => '2021-06-12 11:22:38',
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:22:54',
                'updated_at' => '2021-06-12 11:22:54',
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:25:42',
                'updated_at' => '2021-06-12 11:25:42',
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:27:24',
                'updated_at' => '2021-06-12 11:27:24',
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:30:37',
                'updated_at' => '2021-06-12 11:30:37',
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 11:47:06',
                'updated_at' => '2021-06-12 11:47:06',
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:11:17',
                'updated_at' => '2021-06-12 12:11:17',
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:11:36',
                'updated_at' => '2021-06-12 12:11:36',
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:12:12',
                'updated_at' => '2021-06-12 12:12:12',
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:17:35',
                'updated_at' => '2021-06-12 12:17:35',
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:17:35',
                'updated_at' => '2021-06-12 12:17:35',
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:24:47',
                'updated_at' => '2021-06-12 12:24:47',
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:24:55',
                'updated_at' => '2021-06-12 12:24:55',
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:26:45',
                'updated_at' => '2021-06-12 12:26:45',
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:29:18',
                'updated_at' => '2021-06-12 12:29:18',
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:29:35',
                'updated_at' => '2021-06-12 12:29:35',
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:29:39',
                'updated_at' => '2021-06-12 12:29:39',
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:29:40',
                'updated_at' => '2021-06-12 12:29:40',
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:32:40',
                'updated_at' => '2021-06-12 12:32:40',
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:44:07',
                'updated_at' => '2021-06-12 12:44:07',
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:44:13',
                'updated_at' => '2021-06-12 12:44:13',
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:46:35',
                'updated_at' => '2021-06-12 12:46:35',
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:46:39',
                'updated_at' => '2021-06-12 12:46:39',
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:47:50',
                'updated_at' => '2021-06-12 12:47:50',
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:48:50',
                'updated_at' => '2021-06-12 12:48:50',
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:49:11',
                'updated_at' => '2021-06-12 12:49:11',
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:49:39',
                'updated_at' => '2021-06-12 12:49:39',
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:52:29',
                'updated_at' => '2021-06-12 12:52:29',
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:54:49',
                'updated_at' => '2021-06-12 12:54:49',
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 12:56:54',
                'updated_at' => '2021-06-12 12:56:54',
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:02:25',
                'updated_at' => '2021-06-12 13:02:25',
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:03:06',
                'updated_at' => '2021-06-12 13:03:06',
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:03:29',
                'updated_at' => '2021-06-12 13:03:29',
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:04:50',
                'updated_at' => '2021-06-12 13:04:50',
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:05:14',
                'updated_at' => '2021-06-12 13:05:14',
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:05:39',
                'updated_at' => '2021-06-12 13:05:39',
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:06:37',
                'updated_at' => '2021-06-12 13:06:37',
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:07:29',
                'updated_at' => '2021-06-12 13:07:29',
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:07:29',
                'updated_at' => '2021-06-12 13:07:29',
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:11:39',
                'updated_at' => '2021-06-12 13:11:39',
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:12:07',
                'updated_at' => '2021-06-12 13:12:07',
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:12:08',
                'updated_at' => '2021-06-12 13:12:08',
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:12:37',
                'updated_at' => '2021-06-12 13:12:37',
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:12:41',
                'updated_at' => '2021-06-12 13:12:41',
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة مشرف جديد موظف تجربة',
                'en_action' => 'Add new supervisor موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:13:02',
                'updated_at' => '2021-06-12 13:13:02',
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:13:04',
                'updated_at' => '2021-06-12 13:13:04',
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:13:30',
                'updated_at' => '2021-06-12 13:13:30',
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:14:21',
                'updated_at' => '2021-06-12 13:14:21',
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:14:24',
                'updated_at' => '2021-06-12 13:14:24',
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:14:29',
                'updated_at' => '2021-06-12 13:14:29',
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:14:35',
                'updated_at' => '2021-06-12 13:14:35',
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:14:40',
                'updated_at' => '2021-06-12 13:14:40',
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:14:41',
                'updated_at' => '2021-06-12 13:14:41',
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:14:43',
                'updated_at' => '2021-06-12 13:14:43',
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:15:12',
                'updated_at' => '2021-06-12 13:15:12',
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:15:13',
                'updated_at' => '2021-06-12 13:15:13',
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:18:36',
                'updated_at' => '2021-06-12 13:18:36',
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:18:41',
                'updated_at' => '2021-06-12 13:18:41',
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:18:48',
                'updated_at' => '2021-06-12 13:18:48',
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:20:45',
                'updated_at' => '2021-06-12 13:20:45',
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:20:49',
                'updated_at' => '2021-06-12 13:20:49',
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:20:51',
                'updated_at' => '2021-06-12 13:20:51',
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:20:54',
                'updated_at' => '2021-06-12 13:20:54',
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:21:10',
                'updated_at' => '2021-06-12 13:21:10',
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:21:12',
                'updated_at' => '2021-06-12 13:21:12',
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:21:13',
                'updated_at' => '2021-06-12 13:21:13',
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:21:34',
                'updated_at' => '2021-06-12 13:21:34',
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:21:37',
                'updated_at' => '2021-06-12 13:21:37',
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:21:39',
                'updated_at' => '2021-06-12 13:21:39',
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:21:45',
                'updated_at' => '2021-06-12 13:21:45',
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:22:02',
                'updated_at' => '2021-06-12 13:22:02',
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:22:04',
                'updated_at' => '2021-06-12 13:22:04',
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان ١',
                'en_action' => 'Edit Activation of ads : Ads 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:22:06',
                'updated_at' => '2021-06-12 13:22:06',
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:24:13',
                'updated_at' => '2021-06-12 13:24:13',
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:26:59',
                'updated_at' => '2021-06-12 13:26:59',
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل دول فروع : الكويت',
                'en_action' => 'Edit Activation of branches country : Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:02',
                'updated_at' => '2021-06-12 13:27:02',
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:03',
                'updated_at' => '2021-06-12 13:27:03',
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل دول فروع : الكويت',
                'en_action' => 'Edit Activation of branches country : Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:05',
                'updated_at' => '2021-06-12 13:27:05',
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:07',
                'updated_at' => '2021-06-12 13:27:07',
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة فرع جديد فرع ١ في الكويت',
                'en_action' => 'Add new branch Branch 1 in Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:42',
                'updated_at' => '2021-06-12 13:27:42',
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل فرع : فرع ١',
                'en_action' => 'Edit Activation of branch : Branch 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:47',
                'updated_at' => '2021-06-12 13:27:47',
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:51',
                'updated_at' => '2021-06-12 13:27:51',
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل دول فروع : الكويت',
                'en_action' => 'Edit Activation of branches country : Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:53',
                'updated_at' => '2021-06-12 13:27:53',
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:27:59',
                'updated_at' => '2021-06-12 13:27:59',
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل دول فروع : الكويت',
                'en_action' => 'Edit Activation of branches country : Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:28:00',
                'updated_at' => '2021-06-12 13:28:00',
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الكويت',
                'en_action' => 'Show branches for country of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:28:02',
                'updated_at' => '2021-06-12 13:28:02',
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل فرع : فرع ١',
                'en_action' => 'Edit Activation of branch : Branch 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:28:04',
                'updated_at' => '2021-06-12 13:28:04',
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الكويت',
                'en_action' => 'Show branches for country of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:28:05',
                'updated_at' => '2021-06-12 13:28:05',
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:34:45',
                'updated_at' => '2021-06-12 13:34:45',
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل القسم : قسم ١',
                'en_action' => 'Edit Activation of category : Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:34:48',
                'updated_at' => '2021-06-12 13:34:48',
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:34:49',
                'updated_at' => '2021-06-12 13:34:49',
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:34:51',
                'updated_at' => '2021-06-12 13:34:51',
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المنتج : منتج ١',
                'en_action' => 'Edit Activation of product : Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:34:53',
                'updated_at' => '2021-06-12 13:34:53',
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:34:54',
                'updated_at' => '2021-06-12 13:34:54',
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المنتج : منتج ١',
                'en_action' => 'Edit Activation of product : Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:34:57',
                'updated_at' => '2021-06-12 13:34:57',
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل القسم : قسم ١',
                'en_action' => 'Edit Activation of category : Category 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:35:01',
                'updated_at' => '2021-06-12 13:35:01',
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:35:02',
                'updated_at' => '2021-06-12 13:35:02',
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:35:07',
                'updated_at' => '2021-06-12 13:35:07',
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المنتج : منتج ١',
                'en_action' => 'Edit Activation of product : Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:35:09',
                'updated_at' => '2021-06-12 13:35:09',
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:36:25',
                'updated_at' => '2021-06-12 13:36:25',
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المدينة : حولي',
                'en_action' => 'Edit Activation of city : Hawaly',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:39:05',
                'updated_at' => '2021-06-12 13:39:05',
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:39:11',
                'updated_at' => '2021-06-12 13:39:11',
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المدينة : حولي',
                'en_action' => 'Edit Activation of city : Hawaly',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:39:13',
                'updated_at' => '2021-06-12 13:39:13',
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:39:14',
                'updated_at' => '2021-06-12 13:39:14',
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:40:03',
                'updated_at' => '2021-06-12 13:40:03',
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:42:48',
                'updated_at' => '2021-06-12 13:42:48',
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة كوبون خصم جديد dsdsf',
                'en_action' => 'Add new promotion code dsdsf',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:43:00',
                'updated_at' => '2021-06-12 13:43:00',
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:43:03',
                'updated_at' => '2021-06-12 13:43:03',
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:43:08',
                'updated_at' => '2021-06-12 13:43:08',
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:43:11',
                'updated_at' => '2021-06-12 13:43:11',
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:44:17',
                'updated_at' => '2021-06-12 13:44:17',
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:44:45',
                'updated_at' => '2021-06-12 13:44:45',
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:19',
                'updated_at' => '2021-06-12 13:45:19',
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل كود الخصم : dsdsf',
                'en_action' => 'Edit Activation of promo code : dsdsf',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:21',
                'updated_at' => '2021-06-12 13:45:21',
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل كود الخصم : dsdsf',
                'en_action' => 'Edit Activation of promo code : dsdsf',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:22',
                'updated_at' => '2021-06-12 13:45:22',
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل كود الخصم : dsdsf',
                'en_action' => 'Edit Activation of promo code : dsdsf',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:24',
                'updated_at' => '2021-06-12 13:45:24',
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:25',
                'updated_at' => '2021-06-12 13:45:25',
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل كود الخصم : dsdsf',
                'en_action' => 'Edit Activation of promo code : dsdsf',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:27',
                'updated_at' => '2021-06-12 13:45:27',
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل كود الخصم : dsdsf',
                'en_action' => 'Edit Activation of promo code : dsdsf',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:28',
                'updated_at' => '2021-06-12 13:45:28',
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:45:33',
                'updated_at' => '2021-06-12 13:45:33',
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:46:48',
                'updated_at' => '2021-06-12 13:46:48',
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بعارض الصور ',
                'en_action' => 'Add new slider ',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:47:01',
                'updated_at' => '2021-06-12 13:47:01',
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:47:03',
                'updated_at' => '2021-06-12 13:47:03',
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : dsf',
                'en_action' => 'Edit Activation of ads : fsd',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:47:05',
                'updated_at' => '2021-06-12 13:47:05',
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:47:06',
                'updated_at' => '2021-06-12 13:47:06',
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-12 13:55:10',
                'updated_at' => '2021-06-12 13:55:10',
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:09:03',
                'updated_at' => '2021-06-12 14:09:03',
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:09:03',
                'updated_at' => '2021-06-12 14:09:03',
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:09:12',
                'updated_at' => '2021-06-12 14:09:12',
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:09:20',
                'updated_at' => '2021-06-12 14:09:20',
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:09:20',
                'updated_at' => '2021-06-12 14:09:20',
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:10:42',
                'updated_at' => '2021-06-12 14:10:42',
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:10:47',
                'updated_at' => '2021-06-12 14:10:47',
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المدينة : حولي',
                'en_action' => 'Edit Activation of city : Hawaly',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:10:50',
                'updated_at' => '2021-06-12 14:10:50',
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المدينة : حولي',
                'en_action' => 'Edit Activation of city : Hawaly',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:10:52',
                'updated_at' => '2021-06-12 14:10:52',
            ),
            452 => 
            array (
                'id' => 453,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:10:55',
                'updated_at' => '2021-06-12 14:10:55',
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:51:09',
                'updated_at' => '2021-06-12 14:51:09',
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 14:51:33',
                'updated_at' => '2021-06-12 14:51:33',
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 14:51:34',
                'updated_at' => '2021-06-12 14:51:34',
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 14:52:35',
                'updated_at' => '2021-06-12 14:52:35',
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 14:52:54',
                'updated_at' => '2021-06-12 14:52:54',
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:58:48',
                'updated_at' => '2021-06-12 14:58:48',
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:58:54',
                'updated_at' => '2021-06-12 14:58:54',
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 14:59:07',
                'updated_at' => '2021-06-12 14:59:07',
            ),
            461 => 
            array (
                'id' => 462,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 14:59:10',
                'updated_at' => '2021-06-12 14:59:10',
            ),
            462 => 
            array (
                'id' => 463,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المنتج : منتج ١',
                'en_action' => 'Edit Activation of product : Product 1',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 14:59:29',
                'updated_at' => '2021-06-12 14:59:29',
            ),
            463 => 
            array (
                'id' => 464,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المنتج : منتج ١',
                'en_action' => 'Edit Activation of product : Product 1',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 14:59:31',
                'updated_at' => '2021-06-12 14:59:31',
            ),
            464 => 
            array (
                'id' => 465,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:00:33',
                'updated_at' => '2021-06-12 15:00:33',
            ),
            465 => 
            array (
                'id' => 466,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:03:26',
                'updated_at' => '2021-06-12 15:03:26',
            ),
            466 => 
            array (
                'id' => 467,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:03:49',
                'updated_at' => '2021-06-12 15:03:49',
            ),
            467 => 
            array (
                'id' => 468,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:03:59',
                'updated_at' => '2021-06-12 15:03:59',
            ),
            468 => 
            array (
                'id' => 469,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 15:04:01',
                'updated_at' => '2021-06-12 15:04:01',
            ),
            469 => 
            array (
                'id' => 470,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل العضو : عضو ١',
                'en_action' => 'Edit Activation of user : عضو ١',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:04:09',
                'updated_at' => '2021-06-12 15:04:09',
            ),
            470 => 
            array (
                'id' => 471,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل العضو : عضو ١',
                'en_action' => 'Edit Activation of user : عضو ١',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:04:11',
                'updated_at' => '2021-06-12 15:04:11',
            ),
            471 => 
            array (
                'id' => 472,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '188.71.206.183',
                'created_at' => '2021-06-12 15:04:32',
                'updated_at' => '2021-06-12 15:04:32',
            ),
            472 => 
            array (
                'id' => 473,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:04:35',
                'updated_at' => '2021-06-12 15:04:35',
            ),
            473 => 
            array (
                'id' => 474,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المنتج : منتج ١',
                'en_action' => 'Edit Activation of product : Product 1',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:04:37',
                'updated_at' => '2021-06-12 15:04:37',
            ),
            474 => 
            array (
                'id' => 475,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل المنتج : منتج ١',
                'en_action' => 'Edit Activation of product : Product 1',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:04:38',
                'updated_at' => '2021-06-12 15:04:38',
            ),
            475 => 
            array (
                'id' => 476,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:04:42',
                'updated_at' => '2021-06-12 15:04:42',
            ),
            476 => 
            array (
                'id' => 477,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:06:29',
                'updated_at' => '2021-06-12 15:06:29',
            ),
            477 => 
            array (
                'id' => 478,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:06:35',
                'updated_at' => '2021-06-12 15:06:35',
            ),
            478 => 
            array (
                'id' => 479,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:07:17',
                'updated_at' => '2021-06-12 15:07:17',
            ),
            479 => 
            array (
                'id' => 480,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '37.36.77.48',
                'created_at' => '2021-06-12 15:14:58',
                'updated_at' => '2021-06-12 15:14:58',
            ),
            480 => 
            array (
                'id' => 481,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-13 06:12:39',
                'updated_at' => '2021-06-13 06:12:39',
            ),
            481 => 
            array (
                'id' => 482,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-13 06:12:42',
                'updated_at' => '2021-06-13 06:12:42',
            ),
            482 => 
            array (
                'id' => 483,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-13 06:13:03',
                'updated_at' => '2021-06-13 06:13:03',
            ),
            483 => 
            array (
                'id' => 484,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-13 06:13:03',
                'updated_at' => '2021-06-13 06:13:03',
            ),
            484 => 
            array (
                'id' => 485,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-13 07:22:53',
                'updated_at' => '2021-06-13 07:22:53',
            ),
            485 => 
            array (
                'id' => 486,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-13 07:22:53',
                'updated_at' => '2021-06-13 07:22:53',
            ),
            486 => 
            array (
                'id' => 487,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 07:49:32',
                'updated_at' => '2021-06-13 07:49:32',
            ),
            487 => 
            array (
                'id' => 488,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 07:49:32',
                'updated_at' => '2021-06-13 07:49:32',
            ),
            488 => 
            array (
                'id' => 489,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 07:59:39',
                'updated_at' => '2021-06-13 07:59:39',
            ),
            489 => 
            array (
                'id' => 490,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 08:15:57',
                'updated_at' => '2021-06-13 08:15:57',
            ),
            490 => 
            array (
                'id' => 491,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 08:19:09',
                'updated_at' => '2021-06-13 08:19:09',
            ),
            491 => 
            array (
                'id' => 492,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 08:20:36',
                'updated_at' => '2021-06-13 08:20:36',
            ),
            492 => 
            array (
                'id' => 493,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 08:20:49',
                'updated_at' => '2021-06-13 08:20:49',
            ),
            493 => 
            array (
                'id' => 494,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 08:58:35',
                'updated_at' => '2021-06-13 08:58:35',
            ),
            494 => 
            array (
                'id' => 495,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:12:29',
                'updated_at' => '2021-06-13 10:12:29',
            ),
            495 => 
            array (
                'id' => 496,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:13:46',
                'updated_at' => '2021-06-13 10:13:46',
            ),
            496 => 
            array (
                'id' => 497,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة قسم جديد رذاذ الشعر',
                'en_action' => 'Add new category Hair Mist',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:15:05',
                'updated_at' => '2021-06-13 10:15:05',
            ),
            497 => 
            array (
                'id' => 498,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:15:13',
                'updated_at' => '2021-06-13 10:15:13',
            ),
            498 => 
            array (
                'id' => 499,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر الذهبي',
                'en_action' => 'Add new product Hair Mist Gold',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:18:46',
                'updated_at' => '2021-06-13 10:18:46',
            ),
            499 => 
            array (
                'id' => 500,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:19:01',
                'updated_at' => '2021-06-13 10:19:01',
            ),
        ));
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 501,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد عطر الشعر الوردي',
                'en_action' => 'Add new product Pink Hair Perfum',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:22:58',
                'updated_at' => '2021-06-13 10:22:58',
            ),
            1 => 
            array (
                'id' => 502,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:23:04',
                'updated_at' => '2021-06-13 10:23:04',
            ),
            2 => 
            array (
                'id' => 503,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي منتج ١',
                'en_action' => 'Edit current product Product 1',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:23:33',
                'updated_at' => '2021-06-13 10:23:33',
            ),
            3 => 
            array (
                'id' => 504,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:23:33',
                'updated_at' => '2021-06-13 10:23:33',
            ),
            4 => 
            array (
                'id' => 505,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الخرج من لوحة التحكم',
                'en_action' => 'Logout from admin dashboard',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:24:24',
                'updated_at' => '2021-06-13 10:24:24',
            ),
            5 => 
            array (
                'id' => 506,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:29:43',
                'updated_at' => '2021-06-13 10:29:43',
            ),
            6 => 
            array (
                'id' => 507,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:29:43',
                'updated_at' => '2021-06-13 10:29:43',
            ),
            7 => 
            array (
                'id' => 508,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:29:55',
                'updated_at' => '2021-06-13 10:29:55',
            ),
            8 => 
            array (
                'id' => 509,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم قسم ١',
                'en_action' => 'Show products for categoy of Category 1',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:30:03',
                'updated_at' => '2021-06-13 10:30:03',
            ),
            9 => 
            array (
                'id' => 510,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم رذاذ الشعر',
                'en_action' => 'Show products for categoy of Hair Mist',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:30:14',
                'updated_at' => '2021-06-13 10:30:14',
            ),
            10 => 
            array (
                'id' => 511,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '213.132.232.18',
                'created_at' => '2021-06-13 10:32:06',
                'updated_at' => '2021-06-13 10:32:06',
            ),
            11 => 
            array (
                'id' => 512,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '197.61.69.160',
                'created_at' => '2021-06-13 10:41:23',
                'updated_at' => '2021-06-13 10:41:23',
            ),
            12 => 
            array (
                'id' => 513,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '197.61.69.160',
                'created_at' => '2021-06-13 10:41:23',
                'updated_at' => '2021-06-13 10:41:23',
            ),
            13 => 
            array (
                'id' => 514,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '45.98.246.111',
                'created_at' => '2021-06-13 10:41:40',
                'updated_at' => '2021-06-13 10:41:40',
            ),
            14 => 
            array (
                'id' => 515,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '45.98.246.111',
                'created_at' => '2021-06-13 10:41:41',
                'updated_at' => '2021-06-13 10:41:41',
            ),
            15 => 
            array (
                'id' => 516,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '197.61.69.160',
                'created_at' => '2021-06-13 10:42:13',
                'updated_at' => '2021-06-13 10:42:13',
            ),
            16 => 
            array (
                'id' => 517,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '45.98.246.111',
                'created_at' => '2021-06-13 10:42:36',
                'updated_at' => '2021-06-13 10:42:36',
            ),
            17 => 
            array (
                'id' => 518,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.69.160',
                'created_at' => '2021-06-13 10:42:52',
                'updated_at' => '2021-06-13 10:42:52',
            ),
            18 => 
            array (
                'id' => 519,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '45.98.246.111',
                'created_at' => '2021-06-13 10:42:59',
                'updated_at' => '2021-06-13 10:42:59',
            ),
            19 => 
            array (
                'id' => 520,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-13 21:22:16',
                'updated_at' => '2021-06-13 21:22:16',
            ),
            20 => 
            array (
                'id' => 521,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-13 21:22:16',
                'updated_at' => '2021-06-13 21:22:16',
            ),
            21 => 
            array (
                'id' => 522,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-13 21:22:30',
                'updated_at' => '2021-06-13 21:22:30',
            ),
            22 => 
            array (
                'id' => 523,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '::1',
                'created_at' => '2021-06-13 21:26:25',
                'updated_at' => '2021-06-13 21:26:25',
            ),
            23 => 
            array (
                'id' => 524,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-13 21:26:25',
                'updated_at' => '2021-06-13 21:26:25',
            ),
            24 => 
            array (
                'id' => 525,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:16:47',
                'updated_at' => '2021-06-13 23:16:47',
            ),
            25 => 
            array (
                'id' => 526,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:32:05',
                'updated_at' => '2021-06-13 23:32:05',
            ),
            26 => 
            array (
                'id' => 527,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:32:53',
                'updated_at' => '2021-06-13 23:32:53',
            ),
            27 => 
            array (
                'id' => 528,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:33:39',
                'updated_at' => '2021-06-13 23:33:39',
            ),
            28 => 
            array (
                'id' => 529,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  عملة حالية ',
                'en_action' => 'Edit current currency ',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:33:44',
                'updated_at' => '2021-06-13 23:33:44',
            ),
            29 => 
            array (
                'id' => 530,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:33:44',
                'updated_at' => '2021-06-13 23:33:44',
            ),
            30 => 
            array (
                'id' => 531,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:39:35',
                'updated_at' => '2021-06-13 23:39:35',
            ),
            31 => 
            array (
                'id' => 532,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-13 23:40:09',
                'updated_at' => '2021-06-13 23:40:09',
            ),
            32 => 
            array (
                'id' => 533,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:09:41',
                'updated_at' => '2021-06-14 00:09:41',
            ),
            33 => 
            array (
                'id' => 534,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:18:04',
                'updated_at' => '2021-06-14 00:18:04',
            ),
            34 => 
            array (
                'id' => 535,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:18:08',
                'updated_at' => '2021-06-14 00:18:08',
            ),
            35 => 
            array (
                'id' => 536,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:18:14',
                'updated_at' => '2021-06-14 00:18:14',
            ),
            36 => 
            array (
                'id' => 537,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:18:23',
                'updated_at' => '2021-06-14 00:18:23',
            ),
            37 => 
            array (
                'id' => 538,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:18:23',
                'updated_at' => '2021-06-14 00:18:23',
            ),
            38 => 
            array (
                'id' => 539,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:41:28',
                'updated_at' => '2021-06-14 00:41:28',
            ),
            39 => 
            array (
                'id' => 540,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:41:32',
                'updated_at' => '2021-06-14 00:41:32',
            ),
            40 => 
            array (
                'id' => 541,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:41:44',
                'updated_at' => '2021-06-14 00:41:44',
            ),
            41 => 
            array (
                'id' => 542,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:42:04',
                'updated_at' => '2021-06-14 00:42:04',
            ),
            42 => 
            array (
                'id' => 543,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:42:58',
                'updated_at' => '2021-06-14 00:42:58',
            ),
            43 => 
            array (
                'id' => 544,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:43:34',
                'updated_at' => '2021-06-14 00:43:34',
            ),
            44 => 
            array (
                'id' => 545,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:44:02',
                'updated_at' => '2021-06-14 00:44:02',
            ),
            45 => 
            array (
                'id' => 546,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:44:32',
                'updated_at' => '2021-06-14 00:44:32',
            ),
            46 => 
            array (
                'id' => 547,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:45:38',
                'updated_at' => '2021-06-14 00:45:38',
            ),
            47 => 
            array (
                'id' => 548,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:46:11',
                'updated_at' => '2021-06-14 00:46:11',
            ),
            48 => 
            array (
                'id' => 549,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:46:45',
                'updated_at' => '2021-06-14 00:46:45',
            ),
            49 => 
            array (
                'id' => 550,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:47:04',
                'updated_at' => '2021-06-14 00:47:04',
            ),
            50 => 
            array (
                'id' => 551,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:47:20',
                'updated_at' => '2021-06-14 00:47:20',
            ),
            51 => 
            array (
                'id' => 552,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:47:32',
                'updated_at' => '2021-06-14 00:47:32',
            ),
            52 => 
            array (
                'id' => 553,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:47:50',
                'updated_at' => '2021-06-14 00:47:50',
            ),
            53 => 
            array (
                'id' => 554,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:48:04',
                'updated_at' => '2021-06-14 00:48:04',
            ),
            54 => 
            array (
                'id' => 555,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:48:30',
                'updated_at' => '2021-06-14 00:48:30',
            ),
            55 => 
            array (
                'id' => 556,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:49:34',
                'updated_at' => '2021-06-14 00:49:34',
            ),
            56 => 
            array (
                'id' => 557,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:49:48',
                'updated_at' => '2021-06-14 00:49:48',
            ),
            57 => 
            array (
                'id' => 558,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:51:07',
                'updated_at' => '2021-06-14 00:51:07',
            ),
            58 => 
            array (
                'id' => 559,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة دولة جديدة دولة ١',
                'en_action' => 'Add new country Country 1',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:55:57',
                'updated_at' => '2021-06-14 00:55:57',
            ),
            59 => 
            array (
                'id' => 560,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:55:59',
                'updated_at' => '2021-06-14 00:55:59',
            ),
            60 => 
            array (
                'id' => 561,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية دولة ١',
                'en_action' => 'Edit current country Country 1',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:57:44',
                'updated_at' => '2021-06-14 00:57:44',
            ),
            61 => 
            array (
                'id' => 562,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:57:44',
                'updated_at' => '2021-06-14 00:57:44',
            ),
            62 => 
            array (
                'id' => 563,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:59:36',
                'updated_at' => '2021-06-14 00:59:36',
            ),
            63 => 
            array (
                'id' => 564,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الدولة : أفغانستان',
                'en_action' => 'Edit Activation of country : Afghanistan',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:59:42',
                'updated_at' => '2021-06-14 00:59:42',
            ),
            64 => 
            array (
                'id' => 565,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الدولة : أفغانستان',
                'en_action' => 'Edit Activation of country : Afghanistan',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:59:44',
                'updated_at' => '2021-06-14 00:59:44',
            ),
            65 => 
            array (
                'id' => 566,
                'user_id' => '1',
                'ar_action' => 'قام بحذف كل الدول',
                'en_action' => 'Delete all countries',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:59:55',
                'updated_at' => '2021-06-14 00:59:55',
            ),
            66 => 
            array (
                'id' => 567,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-14 00:59:56',
                'updated_at' => '2021-06-14 00:59:56',
            ),
            67 => 
            array (
                'id' => 568,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-06-14 01:01:39',
                'updated_at' => '2021-06-14 01:01:39',
            ),
            68 => 
            array (
                'id' => 569,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-14 01:03:40',
                'updated_at' => '2021-06-14 01:03:40',
            ),
            69 => 
            array (
                'id' => 570,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:04:48',
                'updated_at' => '2021-06-14 14:04:48',
            ),
            70 => 
            array (
                'id' => 571,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:04:48',
                'updated_at' => '2021-06-14 14:04:48',
            ),
            71 => 
            array (
                'id' => 572,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:05:35',
                'updated_at' => '2021-06-14 14:05:35',
            ),
            72 => 
            array (
                'id' => 573,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:05:40',
                'updated_at' => '2021-06-14 14:05:40',
            ),
            73 => 
            array (
                'id' => 574,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي منتج ١',
                'en_action' => 'Edit current product Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:08:47',
                'updated_at' => '2021-06-14 14:08:47',
            ),
            74 => 
            array (
                'id' => 575,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:08:48',
                'updated_at' => '2021-06-14 14:08:48',
            ),
            75 => 
            array (
                'id' => 576,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر الذهبي',
                'en_action' => 'Edit current product Hair Mist Gold',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:09:45',
                'updated_at' => '2021-06-14 14:09:45',
            ),
            76 => 
            array (
                'id' => 577,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:09:46',
                'updated_at' => '2021-06-14 14:09:46',
            ),
            77 => 
            array (
                'id' => 578,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي عطر الشعر الوردي',
                'en_action' => 'Edit current product Pink Hair Perfum',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:10:01',
                'updated_at' => '2021-06-14 14:10:01',
            ),
            78 => 
            array (
                'id' => 579,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-14 14:10:01',
                'updated_at' => '2021-06-14 14:10:01',
            ),
            79 => 
            array (
                'id' => 580,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-16 12:19:07',
                'updated_at' => '2021-06-16 12:19:07',
            ),
            80 => 
            array (
                'id' => 581,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-16 12:19:07',
                'updated_at' => '2021-06-16 12:19:07',
            ),
            81 => 
            array (
                'id' => 582,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-17 07:41:21',
                'updated_at' => '2021-06-17 07:41:21',
            ),
            82 => 
            array (
                'id' => 583,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-17 07:41:21',
                'updated_at' => '2021-06-17 07:41:21',
            ),
            83 => 
            array (
                'id' => 584,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-17 07:42:03',
                'updated_at' => '2021-06-17 07:42:03',
            ),
            84 => 
            array (
                'id' => 585,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '188.236.202.151',
                'created_at' => '2021-06-19 10:05:14',
                'updated_at' => '2021-06-19 10:05:14',
            ),
            85 => 
            array (
                'id' => 586,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.236.202.151',
                'created_at' => '2021-06-19 10:05:15',
                'updated_at' => '2021-06-19 10:05:15',
            ),
            86 => 
            array (
                'id' => 587,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:32:15',
                'updated_at' => '2021-06-20 09:32:15',
            ),
            87 => 
            array (
                'id' => 588,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:32:15',
                'updated_at' => '2021-06-20 09:32:15',
            ),
            88 => 
            array (
                'id' => 589,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:32:21',
                'updated_at' => '2021-06-20 09:32:21',
            ),
            89 => 
            array (
                'id' => 590,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 1',
                'en_action' => 'Add new product Hair mist 1',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:40:33',
                'updated_at' => '2021-06-20 09:40:33',
            ),
            90 => 
            array (
                'id' => 591,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 2',
                'en_action' => 'Add new product Hair mist 2',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:41:40',
                'updated_at' => '2021-06-20 09:41:40',
            ),
            91 => 
            array (
                'id' => 592,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 3',
                'en_action' => 'Add new product Hair mist 3',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:42:37',
                'updated_at' => '2021-06-20 09:42:37',
            ),
            92 => 
            array (
                'id' => 593,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 4',
                'en_action' => 'Add new product Hair mist 4',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:43:10',
                'updated_at' => '2021-06-20 09:43:10',
            ),
            93 => 
            array (
                'id' => 594,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 5',
                'en_action' => 'Add new product Hair mist 5',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:43:50',
                'updated_at' => '2021-06-20 09:43:50',
            ),
            94 => 
            array (
                'id' => 595,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:44:34',
                'updated_at' => '2021-06-20 09:44:34',
            ),
            95 => 
            array (
                'id' => 596,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 1',
                'en_action' => 'Edit current product Hair mist 1',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:45:43',
                'updated_at' => '2021-06-20 09:45:43',
            ),
            96 => 
            array (
                'id' => 597,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:45:43',
                'updated_at' => '2021-06-20 09:45:43',
            ),
            97 => 
            array (
                'id' => 598,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 2',
                'en_action' => 'Edit current product Hair mist 2',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:46:07',
                'updated_at' => '2021-06-20 09:46:07',
            ),
            98 => 
            array (
                'id' => 599,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:46:07',
                'updated_at' => '2021-06-20 09:46:07',
            ),
            99 => 
            array (
                'id' => 600,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 3',
                'en_action' => 'Edit current product Hair mist 3',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:46:27',
                'updated_at' => '2021-06-20 09:46:27',
            ),
            100 => 
            array (
                'id' => 601,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:46:27',
                'updated_at' => '2021-06-20 09:46:27',
            ),
            101 => 
            array (
                'id' => 602,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 4',
                'en_action' => 'Edit current product Hair mist 4',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:46:44',
                'updated_at' => '2021-06-20 09:46:44',
            ),
            102 => 
            array (
                'id' => 603,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:46:44',
                'updated_at' => '2021-06-20 09:46:44',
            ),
            103 => 
            array (
                'id' => 604,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 5',
                'en_action' => 'Edit current product Hair mist 5',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:47:03',
                'updated_at' => '2021-06-20 09:47:03',
            ),
            104 => 
            array (
                'id' => 605,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:47:04',
                'updated_at' => '2021-06-20 09:47:04',
            ),
            105 => 
            array (
                'id' => 606,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 6',
                'en_action' => 'Add new product Hair mist 6',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:48:40',
                'updated_at' => '2021-06-20 09:48:40',
            ),
            106 => 
            array (
                'id' => 607,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 7',
                'en_action' => 'Add new product Hair mist 7',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:49:29',
                'updated_at' => '2021-06-20 09:49:29',
            ),
            107 => 
            array (
                'id' => 608,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 8',
                'en_action' => 'Add new product Hair mist 8',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:50:16',
                'updated_at' => '2021-06-20 09:50:16',
            ),
            108 => 
            array (
                'id' => 609,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 9',
                'en_action' => 'Add new product Hair mist 9',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:50:58',
                'updated_at' => '2021-06-20 09:50:58',
            ),
            109 => 
            array (
                'id' => 610,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 10',
                'en_action' => 'Add new product Hair mist 10',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:51:38',
                'updated_at' => '2021-06-20 09:51:38',
            ),
            110 => 
            array (
                'id' => 611,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 11',
                'en_action' => 'Add new product Hair mist 11',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:55:55',
                'updated_at' => '2021-06-20 09:55:55',
            ),
            111 => 
            array (
                'id' => 612,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 12',
                'en_action' => 'Add new product Hair mist 12',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:56:47',
                'updated_at' => '2021-06-20 09:56:47',
            ),
            112 => 
            array (
                'id' => 613,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 13',
                'en_action' => 'Add new product Hair mist 13',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:57:29',
                'updated_at' => '2021-06-20 09:57:29',
            ),
            113 => 
            array (
                'id' => 614,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 14',
                'en_action' => 'Add new product Hair mist 14',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:58:09',
                'updated_at' => '2021-06-20 09:58:09',
            ),
            114 => 
            array (
                'id' => 615,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:58:12',
                'updated_at' => '2021-06-20 09:58:12',
            ),
            115 => 
            array (
                'id' => 616,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 15',
                'en_action' => 'Add new product Hair mist 15',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 09:59:21',
                'updated_at' => '2021-06-20 09:59:21',
            ),
            116 => 
            array (
                'id' => 617,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 16',
                'en_action' => 'Add new product Hair mist 16',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 10:00:02',
                'updated_at' => '2021-06-20 10:00:02',
            ),
            117 => 
            array (
                'id' => 618,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 17',
                'en_action' => 'Add new product Hair mist 17',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 10:00:47',
                'updated_at' => '2021-06-20 10:00:47',
            ),
            118 => 
            array (
                'id' => 619,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 18',
                'en_action' => 'Add new product Hair mist 18',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 10:01:27',
                'updated_at' => '2021-06-20 10:01:27',
            ),
            119 => 
            array (
                'id' => 620,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 19',
                'en_action' => 'Add new product Hair mist 19',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 10:02:17',
                'updated_at' => '2021-06-20 10:02:17',
            ),
            120 => 
            array (
                'id' => 621,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد رذاذ الشعر 20',
                'en_action' => 'Add new product Hair mist 20',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 10:03:15',
                'updated_at' => '2021-06-20 10:03:15',
            ),
            121 => 
            array (
                'id' => 622,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 10:03:22',
                'updated_at' => '2021-06-20 10:03:22',
            ),
            122 => 
            array (
                'id' => 623,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 20',
                'en_action' => 'Edit current product Hair mist 20',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 11:53:17',
                'updated_at' => '2021-06-20 11:53:17',
            ),
            123 => 
            array (
                'id' => 624,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 11:53:17',
                'updated_at' => '2021-06-20 11:53:17',
            ),
            124 => 
            array (
                'id' => 625,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 14',
                'en_action' => 'Edit current product Hair mist 14',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 13:21:08',
                'updated_at' => '2021-06-20 13:21:08',
            ),
            125 => 
            array (
                'id' => 626,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 13:21:08',
                'updated_at' => '2021-06-20 13:21:08',
            ),
            126 => 
            array (
                'id' => 627,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 13:22:25',
                'updated_at' => '2021-06-20 13:22:25',
            ),
            127 => 
            array (
                'id' => 628,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي رذاذ الشعر 10',
                'en_action' => 'Edit current product Hair mist 10',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 13:22:39',
                'updated_at' => '2021-06-20 13:22:39',
            ),
            128 => 
            array (
                'id' => 629,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-20 13:22:39',
                'updated_at' => '2021-06-20 13:22:39',
            ),
            129 => 
            array (
                'id' => 630,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:06:44',
                'updated_at' => '2021-06-21 12:06:44',
            ),
            130 => 
            array (
                'id' => 631,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:34:41',
                'updated_at' => '2021-06-21 12:34:41',
            ),
            131 => 
            array (
                'id' => 632,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:34:44',
                'updated_at' => '2021-06-21 12:34:44',
            ),
            132 => 
            array (
                'id' => 633,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:38:17',
                'updated_at' => '2021-06-21 12:38:17',
            ),
            133 => 
            array (
                'id' => 634,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:38:20',
                'updated_at' => '2021-06-21 12:38:20',
            ),
            134 => 
            array (
                'id' => 635,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:38:22',
                'updated_at' => '2021-06-21 12:38:22',
            ),
            135 => 
            array (
                'id' => 636,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:54:58',
                'updated_at' => '2021-06-21 12:54:58',
            ),
            136 => 
            array (
                'id' => 637,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:55:01',
                'updated_at' => '2021-06-21 12:55:01',
            ),
            137 => 
            array (
                'id' => 638,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:55:04',
                'updated_at' => '2021-06-21 12:55:04',
            ),
            138 => 
            array (
                'id' => 639,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:55:07',
                'updated_at' => '2021-06-21 12:55:07',
            ),
            139 => 
            array (
                'id' => 640,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:56:15',
                'updated_at' => '2021-06-21 12:56:15',
            ),
            140 => 
            array (
                'id' => 641,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:56:42',
                'updated_at' => '2021-06-21 12:56:42',
            ),
            141 => 
            array (
                'id' => 642,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 12:56:59',
                'updated_at' => '2021-06-21 12:56:59',
            ),
            142 => 
            array (
                'id' => 643,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 13:04:19',
                'updated_at' => '2021-06-21 13:04:19',
            ),
            143 => 
            array (
                'id' => 644,
                'user_id' => '1',
                'ar_action' => 'قام بحذف عنوان حالي للعضو عضو ١',
                'en_action' => 'Delete current address for user عضو ١',
                'ip' => '197.61.123.157',
                'created_at' => '2021-06-21 13:04:30',
                'updated_at' => '2021-06-21 13:04:30',
            ),
            144 => 
            array (
                'id' => 645,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '188.70.61.152',
                'created_at' => '2021-06-21 15:57:02',
                'updated_at' => '2021-06-21 15:57:02',
            ),
            145 => 
            array (
                'id' => 646,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.70.61.152',
                'created_at' => '2021-06-21 15:57:02',
                'updated_at' => '2021-06-21 15:57:02',
            ),
            146 => 
            array (
                'id' => 647,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.70.61.152',
                'created_at' => '2021-06-21 15:57:05',
                'updated_at' => '2021-06-21 15:57:05',
            ),
            147 => 
            array (
                'id' => 648,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-22 08:33:25',
                'updated_at' => '2021-06-22 08:33:25',
            ),
            148 => 
            array (
                'id' => 649,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-22 08:33:25',
                'updated_at' => '2021-06-22 08:33:25',
            ),
            149 => 
            array (
                'id' => 650,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '188.70.1.251',
                'created_at' => '2021-06-23 06:52:17',
                'updated_at' => '2021-06-23 06:52:17',
            ),
            150 => 
            array (
                'id' => 651,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.70.1.251',
                'created_at' => '2021-06-23 06:52:17',
                'updated_at' => '2021-06-23 06:52:17',
            ),
            151 => 
            array (
                'id' => 652,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 06:52:42',
                'updated_at' => '2021-06-23 06:52:42',
            ),
            152 => 
            array (
                'id' => 653,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 06:52:42',
                'updated_at' => '2021-06-23 06:52:42',
            ),
            153 => 
            array (
                'id' => 654,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 06:56:22',
                'updated_at' => '2021-06-23 06:56:22',
            ),
            154 => 
            array (
                'id' => 655,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:28:40',
                'updated_at' => '2021-06-23 08:28:40',
            ),
            155 => 
            array (
                'id' => 656,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:28:41',
                'updated_at' => '2021-06-23 08:28:41',
            ),
            156 => 
            array (
                'id' => 657,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:28:44',
                'updated_at' => '2021-06-23 08:28:44',
            ),
            157 => 
            array (
                'id' => 658,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:28:59',
                'updated_at' => '2021-06-23 08:28:59',
            ),
            158 => 
            array (
                'id' => 659,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:29:08',
                'updated_at' => '2021-06-23 08:29:08',
            ),
            159 => 
            array (
                'id' => 660,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:29:12',
                'updated_at' => '2021-06-23 08:29:12',
            ),
            160 => 
            array (
                'id' => 661,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:29:19',
                'updated_at' => '2021-06-23 08:29:19',
            ),
            161 => 
            array (
                'id' => 662,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-23 08:29:32',
                'updated_at' => '2021-06-23 08:29:32',
            ),
            162 => 
            array (
                'id' => 663,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '188.70.1.251',
                'created_at' => '2021-06-23 10:15:37',
                'updated_at' => '2021-06-23 10:15:37',
            ),
            163 => 
            array (
                'id' => 664,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.70.1.251',
                'created_at' => '2021-06-23 10:15:37',
                'updated_at' => '2021-06-23 10:15:37',
            ),
            164 => 
            array (
                'id' => 665,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 10:16:10',
                'updated_at' => '2021-06-23 10:16:10',
            ),
            165 => 
            array (
                'id' => 666,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 10:16:10',
                'updated_at' => '2021-06-23 10:16:10',
            ),
            166 => 
            array (
                'id' => 667,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 10:16:26',
                'updated_at' => '2021-06-23 10:16:26',
            ),
            167 => 
            array (
                'id' => 668,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 10:16:57',
                'updated_at' => '2021-06-23 10:16:57',
            ),
            168 => 
            array (
                'id' => 669,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  بيانات حسابه',
                'en_action' => 'update his profile info',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 10:17:33',
                'updated_at' => '2021-06-23 10:17:33',
            ),
            169 => 
            array (
                'id' => 670,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-23 10:17:40',
                'updated_at' => '2021-06-23 10:17:40',
            ),
            170 => 
            array (
                'id' => 671,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 05:58:28',
                'updated_at' => '2021-06-24 05:58:28',
            ),
            171 => 
            array (
                'id' => 672,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الخرج من لوحة التحكم',
                'en_action' => 'Logout from admin dashboard',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 05:58:32',
                'updated_at' => '2021-06-24 05:58:32',
            ),
            172 => 
            array (
                'id' => 673,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:15:49',
                'updated_at' => '2021-06-24 06:15:49',
            ),
            173 => 
            array (
                'id' => 674,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:15:49',
                'updated_at' => '2021-06-24 06:15:49',
            ),
            174 => 
            array (
                'id' => 675,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:16:12',
                'updated_at' => '2021-06-24 06:16:12',
            ),
            175 => 
            array (
                'id' => 676,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:16:18',
                'updated_at' => '2021-06-24 06:16:18',
            ),
            176 => 
            array (
                'id' => 677,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:16:24',
                'updated_at' => '2021-06-24 06:16:24',
            ),
            177 => 
            array (
                'id' => 678,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:16:50',
                'updated_at' => '2021-06-24 06:16:50',
            ),
            178 => 
            array (
                'id' => 679,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الدولة : كندا',
                'en_action' => 'Edit Activation of country : Canada',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:23:57',
                'updated_at' => '2021-06-24 06:23:57',
            ),
            179 => 
            array (
                'id' => 680,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:24:09',
                'updated_at' => '2021-06-24 06:24:09',
            ),
            180 => 
            array (
                'id' => 681,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:24:16',
                'updated_at' => '2021-06-24 06:24:16',
            ),
            181 => 
            array (
                'id' => 682,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:24:54',
                'updated_at' => '2021-06-24 06:24:54',
            ),
            182 => 
            array (
                'id' => 683,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:26:34',
                'updated_at' => '2021-06-24 06:26:34',
            ),
            183 => 
            array (
                'id' => 684,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:27:16',
                'updated_at' => '2021-06-24 06:27:16',
            ),
            184 => 
            array (
                'id' => 685,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:27:37',
                'updated_at' => '2021-06-24 06:27:37',
            ),
            185 => 
            array (
                'id' => 686,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:27:39',
                'updated_at' => '2021-06-24 06:27:39',
            ),
            186 => 
            array (
                'id' => 687,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:27:57',
                'updated_at' => '2021-06-24 06:27:57',
            ),
            187 => 
            array (
                'id' => 688,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:29:15',
                'updated_at' => '2021-06-24 06:29:15',
            ),
            188 => 
            array (
                'id' => 689,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:29:51',
                'updated_at' => '2021-06-24 06:29:51',
            ),
            189 => 
            array (
                'id' => 690,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:30:45',
                'updated_at' => '2021-06-24 06:30:45',
            ),
            190 => 
            array (
                'id' => 691,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل قسم حالي رذاذ الشعر',
                'en_action' => 'Edit current category Hair Mist',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:32:22',
                'updated_at' => '2021-06-24 06:32:22',
            ),
            191 => 
            array (
                'id' => 692,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:32:22',
                'updated_at' => '2021-06-24 06:32:22',
            ),
            192 => 
            array (
                'id' => 693,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:32:46',
                'updated_at' => '2021-06-24 06:32:46',
            ),
            193 => 
            array (
                'id' => 694,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:34:37',
                'updated_at' => '2021-06-24 06:34:37',
            ),
            194 => 
            array (
                'id' => 695,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:36:20',
                'updated_at' => '2021-06-24 06:36:20',
            ),
            195 => 
            array (
                'id' => 696,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:37:02',
                'updated_at' => '2021-06-24 06:37:02',
            ),
            196 => 
            array (
                'id' => 697,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:37:29',
                'updated_at' => '2021-06-24 06:37:29',
            ),
            197 => 
            array (
                'id' => 698,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:37:36',
                'updated_at' => '2021-06-24 06:37:36',
            ),
            198 => 
            array (
                'id' => 699,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:37:51',
                'updated_at' => '2021-06-24 06:37:51',
            ),
            199 => 
            array (
                'id' => 700,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:38:02',
                'updated_at' => '2021-06-24 06:38:02',
            ),
            200 => 
            array (
                'id' => 701,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:38:57',
                'updated_at' => '2021-06-24 06:38:57',
            ),
            201 => 
            array (
                'id' => 702,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:38:59',
                'updated_at' => '2021-06-24 06:38:59',
            ),
            202 => 
            array (
                'id' => 703,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:39:02',
                'updated_at' => '2021-06-24 06:39:02',
            ),
            203 => 
            array (
                'id' => 704,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:44:10',
                'updated_at' => '2021-06-24 06:44:10',
            ),
            204 => 
            array (
                'id' => 705,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.253',
                'created_at' => '2021-06-24 06:44:17',
                'updated_at' => '2021-06-24 06:44:17',
            ),
            205 => 
            array (
                'id' => 706,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 07:05:38',
                'updated_at' => '2021-06-24 07:05:38',
            ),
            206 => 
            array (
                'id' => 707,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 08:36:04',
                'updated_at' => '2021-06-24 08:36:04',
            ),
            207 => 
            array (
                'id' => 708,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 08:36:07',
                'updated_at' => '2021-06-24 08:36:07',
            ),
            208 => 
            array (
                'id' => 709,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 08:36:12',
                'updated_at' => '2021-06-24 08:36:12',
            ),
            209 => 
            array (
                'id' => 710,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:10:30',
                'updated_at' => '2021-06-24 09:10:30',
            ),
            210 => 
            array (
                'id' => 711,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:11:47',
                'updated_at' => '2021-06-24 09:11:47',
            ),
            211 => 
            array (
                'id' => 712,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:15:35',
                'updated_at' => '2021-06-24 09:15:35',
            ),
            212 => 
            array (
                'id' => 713,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:16:10',
                'updated_at' => '2021-06-24 09:16:10',
            ),
            213 => 
            array (
                'id' => 714,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:16:20',
                'updated_at' => '2021-06-24 09:16:20',
            ),
            214 => 
            array (
                'id' => 715,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:23:19',
                'updated_at' => '2021-06-24 09:23:19',
            ),
            215 => 
            array (
                'id' => 716,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:24:18',
                'updated_at' => '2021-06-24 09:24:18',
            ),
            216 => 
            array (
                'id' => 717,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:26:05',
                'updated_at' => '2021-06-24 09:26:05',
            ),
            217 => 
            array (
                'id' => 718,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-06-24 09:26:28',
                'updated_at' => '2021-06-24 09:26:28',
            ),
            218 => 
            array (
                'id' => 719,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-24 10:56:04',
                'updated_at' => '2021-06-24 10:56:04',
            ),
            219 => 
            array (
                'id' => 720,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-24 10:56:04',
                'updated_at' => '2021-06-24 10:56:04',
            ),
            220 => 
            array (
                'id' => 721,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-06-24 10:56:14',
                'updated_at' => '2021-06-24 10:56:14',
            ),
            221 => 
            array (
                'id' => 722,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:03:26',
                'updated_at' => '2021-06-26 03:03:26',
            ),
            222 => 
            array (
                'id' => 723,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:03:27',
                'updated_at' => '2021-06-26 03:03:27',
            ),
            223 => 
            array (
                'id' => 724,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:07:33',
                'updated_at' => '2021-06-26 03:07:33',
            ),
            224 => 
            array (
                'id' => 725,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية أفغانستان',
                'en_action' => 'Edit current country Afghanistan',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:14:27',
                'updated_at' => '2021-06-26 03:14:27',
            ),
            225 => 
            array (
                'id' => 726,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:14:27',
                'updated_at' => '2021-06-26 03:14:27',
            ),
            226 => 
            array (
                'id' => 727,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:15:22',
                'updated_at' => '2021-06-26 03:15:22',
            ),
            227 => 
            array (
                'id' => 728,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية الكويت',
                'en_action' => 'Edit current country Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:15:53',
                'updated_at' => '2021-06-26 03:15:53',
            ),
            228 => 
            array (
                'id' => 729,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:15:53',
                'updated_at' => '2021-06-26 03:15:53',
            ),
            229 => 
            array (
                'id' => 730,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية البحرين',
                'en_action' => 'Edit current country Bahrain',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:16:17',
                'updated_at' => '2021-06-26 03:16:17',
            ),
            230 => 
            array (
                'id' => 731,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:16:17',
                'updated_at' => '2021-06-26 03:16:17',
            ),
            231 => 
            array (
                'id' => 732,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية السعودية',
                'en_action' => 'Edit current country Saudi Arabia',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:16:37',
                'updated_at' => '2021-06-26 03:16:37',
            ),
            232 => 
            array (
                'id' => 733,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:16:38',
                'updated_at' => '2021-06-26 03:16:38',
            ),
            233 => 
            array (
                'id' => 734,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية الإمارات',
                'en_action' => 'Edit current country United Arab Emirates',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:16:54',
                'updated_at' => '2021-06-26 03:16:54',
            ),
            234 => 
            array (
                'id' => 735,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:16:54',
                'updated_at' => '2021-06-26 03:16:54',
            ),
            235 => 
            array (
                'id' => 736,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية قطر',
                'en_action' => 'Edit current country Qatar',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:17:11',
                'updated_at' => '2021-06-26 03:17:11',
            ),
            236 => 
            array (
                'id' => 737,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:17:11',
                'updated_at' => '2021-06-26 03:17:11',
            ),
            237 => 
            array (
                'id' => 738,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية عمان',
                'en_action' => 'Edit current country Oman',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:17:29',
                'updated_at' => '2021-06-26 03:17:29',
            ),
            238 => 
            array (
                'id' => 739,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:17:30',
                'updated_at' => '2021-06-26 03:17:30',
            ),
            239 => 
            array (
                'id' => 740,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  دولة حالية المملكة المتحدة',
                'en_action' => 'Edit current country United Kingdom',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:18:14',
                'updated_at' => '2021-06-26 03:18:14',
            ),
            240 => 
            array (
                'id' => 741,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:18:15',
                'updated_at' => '2021-06-26 03:18:15',
            ),
            241 => 
            array (
                'id' => 742,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:18:45',
                'updated_at' => '2021-06-26 03:18:45',
            ),
            242 => 
            array (
                'id' => 743,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:24:59',
                'updated_at' => '2021-06-26 03:24:59',
            ),
            243 => 
            array (
                'id' => 744,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:26:38',
                'updated_at' => '2021-06-26 03:26:38',
            ),
            244 => 
            array (
                'id' => 745,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:29:15',
                'updated_at' => '2021-06-26 03:29:15',
            ),
            245 => 
            array (
                'id' => 746,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  كوبون خصم حالي test',
                'en_action' => 'Edit current promotion code test',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:29:24',
                'updated_at' => '2021-06-26 03:29:24',
            ),
            246 => 
            array (
                'id' => 747,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:29:24',
                'updated_at' => '2021-06-26 03:29:24',
            ),
            247 => 
            array (
                'id' => 748,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:29:30',
                'updated_at' => '2021-06-26 03:29:30',
            ),
            248 => 
            array (
                'id' => 749,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:51:32',
                'updated_at' => '2021-06-26 03:51:32',
            ),
            249 => 
            array (
                'id' => 750,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:51:40',
                'updated_at' => '2021-06-26 03:51:40',
            ),
            250 => 
            array (
                'id' => 751,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  منتج حالي منتج ١',
                'en_action' => 'Edit current product Product 1',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:51:59',
                'updated_at' => '2021-06-26 03:51:59',
            ),
            251 => 
            array (
                'id' => 752,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:52:00',
                'updated_at' => '2021-06-26 03:52:00',
            ),
            252 => 
            array (
                'id' => 753,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:57:05',
                'updated_at' => '2021-06-26 03:57:05',
            ),
            253 => 
            array (
                'id' => 754,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:58:29',
                'updated_at' => '2021-06-26 03:58:29',
            ),
            254 => 
            array (
                'id' => 755,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 03:58:34',
                'updated_at' => '2021-06-26 03:58:34',
            ),
            255 => 
            array (
                'id' => 756,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور ',
                'en_action' => 'Edit current slider ',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:03:04',
                'updated_at' => '2021-06-26 04:03:04',
            ),
            256 => 
            array (
                'id' => 757,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:03:04',
                'updated_at' => '2021-06-26 04:03:04',
            ),
            257 => 
            array (
                'id' => 758,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور Lorem Ipsum is simply dummy text of the printing <br> Lorem Ipsum is simply dummy text of the printing',
                'en_action' => 'Edit current slider Lorem Ipsum is simply dummy text of the printing <br> Lorem Ipsum is simply dummy text of the printing',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:05:00',
                'updated_at' => '2021-06-26 04:05:00',
            ),
            258 => 
            array (
                'id' => 759,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:05:00',
                'updated_at' => '2021-06-26 04:05:00',
            ),
            259 => 
            array (
                'id' => 760,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:05:11',
                'updated_at' => '2021-06-26 04:05:11',
            ),
            260 => 
            array (
                'id' => 761,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:05:17',
                'updated_at' => '2021-06-26 04:05:17',
            ),
            261 => 
            array (
                'id' => 762,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان الرئيسية',
                'en_action' => 'Edit Activation of ads : Home Ads',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:05:20',
                'updated_at' => '2021-06-26 04:05:20',
            ),
            262 => 
            array (
                'id' => 763,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان الرئيسية',
                'en_action' => 'Edit Activation of ads : Home Ads',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:05:21',
                'updated_at' => '2021-06-26 04:05:21',
            ),
            263 => 
            array (
                'id' => 764,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:05:25',
                'updated_at' => '2021-06-26 04:05:25',
            ),
            264 => 
            array (
                'id' => 765,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:06:31',
                'updated_at' => '2021-06-26 04:06:31',
            ),
            265 => 
            array (
                'id' => 766,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:07:37',
                'updated_at' => '2021-06-26 04:07:37',
            ),
            266 => 
            array (
                'id' => 767,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:07:46',
                'updated_at' => '2021-06-26 04:07:46',
            ),
            267 => 
            array (
                'id' => 768,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : عطور',
                'en_action' => 'Edit Activation of ads : Fragrances',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:07:50',
                'updated_at' => '2021-06-26 04:07:50',
            ),
            268 => 
            array (
                'id' => 769,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:11:44',
                'updated_at' => '2021-06-26 04:11:44',
            ),
            269 => 
            array (
                'id' => 770,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان تطبيق',
                'en_action' => 'Edit Activation of ads : Application Ads',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:11:48',
                'updated_at' => '2021-06-26 04:11:48',
            ),
            270 => 
            array (
                'id' => 771,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان الرئيسية',
                'en_action' => 'Edit Activation of ads : Home Ads',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:11:51',
                'updated_at' => '2021-06-26 04:11:51',
            ),
            271 => 
            array (
                'id' => 772,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان الرئيسية',
                'en_action' => 'Edit Activation of ads : Home Ads',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:12:02',
                'updated_at' => '2021-06-26 04:12:02',
            ),
            272 => 
            array (
                'id' => 773,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:19:22',
                'updated_at' => '2021-06-26 04:19:22',
            ),
            273 => 
            array (
                'id' => 774,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل قسم حالي معطر المنزل',
                'en_action' => 'Edit current category Home Fragrance',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:20:10',
                'updated_at' => '2021-06-26 04:20:10',
            ),
            274 => 
            array (
                'id' => 775,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:20:10',
                'updated_at' => '2021-06-26 04:20:10',
            ),
            275 => 
            array (
                'id' => 776,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل قسم حالي رذاذ الشعر',
                'en_action' => 'Edit current category Hair Mist',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:20:38',
                'updated_at' => '2021-06-26 04:20:38',
            ),
            276 => 
            array (
                'id' => 777,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:20:38',
                'updated_at' => '2021-06-26 04:20:38',
            ),
            277 => 
            array (
                'id' => 778,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة قسم جديد عطر',
                'en_action' => 'Add new category Perfume',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:21:05',
                'updated_at' => '2021-06-26 04:21:05',
            ),
            278 => 
            array (
                'id' => 779,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-06-26 04:21:30',
                'updated_at' => '2021-06-26 04:21:30',
            ),
            279 => 
            array (
                'id' => 780,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-06-26 21:48:13',
                'updated_at' => '2021-06-26 21:48:13',
            ),
            280 => 
            array (
                'id' => 781,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-06-26 21:48:13',
                'updated_at' => '2021-06-26 21:48:13',
            ),
            281 => 
            array (
                'id' => 782,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-26 23:29:14',
                'updated_at' => '2021-06-26 23:29:14',
            ),
            282 => 
            array (
                'id' => 783,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة دولة فروع جديدة السعودية',
                'en_action' => 'Add new country of branches Saudi',
                'ip' => '::1',
                'created_at' => '2021-06-26 23:30:26',
                'updated_at' => '2021-06-26 23:30:26',
            ),
            283 => 
            array (
                'id' => 784,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '::1',
                'created_at' => '2021-06-26 23:36:14',
                'updated_at' => '2021-06-26 23:36:14',
            ),
            284 => 
            array (
                'id' => 785,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الكويت',
                'en_action' => 'Show branches for country of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-26 23:36:18',
                'updated_at' => '2021-06-26 23:36:18',
            ),
            285 => 
            array (
                'id' => 786,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل فرع حالي اسم المنطقة في الكويت',
                'en_action' => 'Edit current branch Area Name in Kuwait',
                'ip' => '::1',
                'created_at' => '2021-06-26 23:38:35',
                'updated_at' => '2021-06-26 23:38:35',
            ),
            286 => 
            array (
                'id' => 787,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.71.235.236',
                'created_at' => '2021-06-30 16:43:51',
                'updated_at' => '2021-06-30 16:43:51',
            ),
            287 => 
            array (
                'id' => 788,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:01:38',
                'updated_at' => '2021-07-01 15:01:38',
            ),
            288 => 
            array (
                'id' => 789,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:02:32',
                'updated_at' => '2021-07-01 15:02:32',
            ),
            289 => 
            array (
                'id' => 790,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:02:45',
                'updated_at' => '2021-07-01 15:02:45',
            ),
            290 => 
            array (
                'id' => 791,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بعارض الصور عنوان',
                'en_action' => 'Add new slider Title',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:03:44',
                'updated_at' => '2021-07-01 15:03:44',
            ),
            291 => 
            array (
                'id' => 792,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:04:52',
                'updated_at' => '2021-07-01 15:04:52',
            ),
            292 => 
            array (
                'id' => 793,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور عنوان',
                'en_action' => 'Edit current slider Title',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:05:04',
                'updated_at' => '2021-07-01 15:05:04',
            ),
            293 => 
            array (
                'id' => 794,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:05:04',
                'updated_at' => '2021-07-01 15:05:04',
            ),
            294 => 
            array (
                'id' => 795,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 15:05:33',
                'updated_at' => '2021-07-01 15:05:33',
            ),
            295 => 
            array (
                'id' => 796,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.37.175.69',
                'created_at' => '2021-07-01 16:35:56',
                'updated_at' => '2021-07-01 16:35:56',
            ),
            296 => 
            array (
                'id' => 797,
                'user_id' => '13',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:45:36',
                'updated_at' => '2021-07-04 10:45:36',
            ),
            297 => 
            array (
                'id' => 798,
                'user_id' => '13',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:45:45',
                'updated_at' => '2021-07-04 10:45:45',
            ),
            298 => 
            array (
                'id' => 799,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:46:59',
                'updated_at' => '2021-07-04 10:46:59',
            ),
            299 => 
            array (
                'id' => 800,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:47:07',
                'updated_at' => '2021-07-04 10:47:07',
            ),
            300 => 
            array (
                'id' => 801,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:47:33',
                'updated_at' => '2021-07-04 10:47:33',
            ),
            301 => 
            array (
                'id' => 802,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:47:49',
                'updated_at' => '2021-07-04 10:47:49',
            ),
            302 => 
            array (
                'id' => 803,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:48:16',
                'updated_at' => '2021-07-04 10:48:16',
            ),
            303 => 
            array (
                'id' => 804,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:48:37',
                'updated_at' => '2021-07-04 10:48:37',
            ),
            304 => 
            array (
                'id' => 805,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:48:37',
                'updated_at' => '2021-07-04 10:48:37',
            ),
            305 => 
            array (
                'id' => 806,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:48:41',
                'updated_at' => '2021-07-04 10:48:41',
            ),
            306 => 
            array (
                'id' => 807,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-07-04 10:49:55',
                'updated_at' => '2021-07-04 10:49:55',
            ),
            307 => 
            array (
                'id' => 808,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-07-04 11:33:33',
                'updated_at' => '2021-07-04 11:33:33',
            ),
            308 => 
            array (
                'id' => 809,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-04 11:33:51',
                'updated_at' => '2021-07-04 11:33:51',
            ),
            309 => 
            array (
                'id' => 810,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-04 11:46:31',
                'updated_at' => '2021-07-04 11:46:31',
            ),
            310 => 
            array (
                'id' => 811,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-07-04 11:46:41',
                'updated_at' => '2021-07-04 11:46:41',
            ),
            311 => 
            array (
                'id' => 812,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-07-04 11:48:56',
                'updated_at' => '2021-07-04 11:48:56',
            ),
            312 => 
            array (
                'id' => 813,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد هلا',
                'en_action' => 'Send new notification Hi',
                'ip' => '::1',
                'created_at' => '2021-07-04 11:56:14',
                'updated_at' => '2021-07-04 11:56:14',
            ),
            313 => 
            array (
                'id' => 814,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-07-04 11:56:15',
                'updated_at' => '2021-07-04 11:56:15',
            ),
            314 => 
            array (
                'id' => 815,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:27:29',
                'updated_at' => '2021-07-05 17:27:29',
            ),
            315 => 
            array (
                'id' => 816,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:27:30',
                'updated_at' => '2021-07-05 17:27:30',
            ),
            316 => 
            array (
                'id' => 817,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:49:09',
                'updated_at' => '2021-07-05 17:49:09',
            ),
            317 => 
            array (
                'id' => 818,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:49:52',
                'updated_at' => '2021-07-05 17:49:52',
            ),
            318 => 
            array (
                'id' => 819,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:49:58',
                'updated_at' => '2021-07-05 17:49:58',
            ),
            319 => 
            array (
                'id' => 820,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:50:51',
                'updated_at' => '2021-07-05 17:50:51',
            ),
            320 => 
            array (
                'id' => 821,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:51:29',
                'updated_at' => '2021-07-05 17:51:29',
            ),
            321 => 
            array (
                'id' => 822,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:53:06',
                'updated_at' => '2021-07-05 17:53:06',
            ),
            322 => 
            array (
                'id' => 823,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:54:25',
                'updated_at' => '2021-07-05 17:54:25',
            ),
            323 => 
            array (
                'id' => 824,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:54:42',
                'updated_at' => '2021-07-05 17:54:42',
            ),
            324 => 
            array (
                'id' => 825,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:55:01',
                'updated_at' => '2021-07-05 17:55:01',
            ),
            325 => 
            array (
                'id' => 826,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 17:56:25',
                'updated_at' => '2021-07-05 17:56:25',
            ),
            326 => 
            array (
                'id' => 827,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:17:10',
                'updated_at' => '2021-07-05 18:17:10',
            ),
            327 => 
            array (
                'id' => 828,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 82 الي تم التسليم',
                'en_action' => 'Edit status of order no.82 to delivered',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:55:49',
                'updated_at' => '2021-07-05 18:55:49',
            ),
            328 => 
            array (
                'id' => 829,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:55:52',
                'updated_at' => '2021-07-05 18:55:52',
            ),
            329 => 
            array (
                'id' => 830,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:57:34',
                'updated_at' => '2021-07-05 18:57:34',
            ),
            330 => 
            array (
                'id' => 831,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:57:42',
                'updated_at' => '2021-07-05 18:57:42',
            ),
            331 => 
            array (
                'id' => 832,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 81 الي قيد الشحن',
                'en_action' => 'Edit status of order no.81 to shipping',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:57:54',
                'updated_at' => '2021-07-05 18:57:54',
            ),
            332 => 
            array (
                'id' => 833,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 81 الي قيد الشحن',
                'en_action' => 'Edit status of order no.81 to shipping',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:58:12',
                'updated_at' => '2021-07-05 18:58:12',
            ),
            333 => 
            array (
                'id' => 834,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 18:58:15',
                'updated_at' => '2021-07-05 18:58:15',
            ),
            334 => 
            array (
                'id' => 835,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 81 الي قيد الشحن',
                'en_action' => 'Edit status of order no.81 to shipping',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:00:21',
                'updated_at' => '2021-07-05 19:00:21',
            ),
            335 => 
            array (
                'id' => 836,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 81 الي قيد الشحن',
                'en_action' => 'Edit status of order no.81 to shipping',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:02:42',
                'updated_at' => '2021-07-05 19:02:42',
            ),
            336 => 
            array (
                'id' => 837,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:02:45',
                'updated_at' => '2021-07-05 19:02:45',
            ),
            337 => 
            array (
                'id' => 838,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 81 الي تم التسليم',
                'en_action' => 'Edit status of order no.81 to delivered',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:03:00',
                'updated_at' => '2021-07-05 19:03:00',
            ),
            338 => 
            array (
                'id' => 839,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:03:03',
                'updated_at' => '2021-07-05 19:03:03',
            ),
            339 => 
            array (
                'id' => 840,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:03:07',
                'updated_at' => '2021-07-05 19:03:07',
            ),
            340 => 
            array (
                'id' => 841,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:03:20',
                'updated_at' => '2021-07-05 19:03:20',
            ),
            341 => 
            array (
                'id' => 842,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-05 19:03:46',
                'updated_at' => '2021-07-05 19:03:46',
            ),
            342 => 
            array (
                'id' => 843,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-07-07 02:46:11',
                'updated_at' => '2021-07-07 02:46:11',
            ),
            343 => 
            array (
                'id' => 844,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 02:46:12',
                'updated_at' => '2021-07-07 02:46:12',
            ),
            344 => 
            array (
                'id' => 845,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-07-07 02:46:28',
                'updated_at' => '2021-07-07 02:46:28',
            ),
            345 => 
            array (
                'id' => 846,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:04:23',
                'updated_at' => '2021-07-07 03:04:23',
            ),
            346 => 
            array (
                'id' => 847,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:06:59',
                'updated_at' => '2021-07-07 03:06:59',
            ),
            347 => 
            array (
                'id' => 848,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:07:48',
                'updated_at' => '2021-07-07 03:07:48',
            ),
            348 => 
            array (
                'id' => 849,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:08:08',
                'updated_at' => '2021-07-07 03:08:08',
            ),
            349 => 
            array (
                'id' => 850,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:08:38',
                'updated_at' => '2021-07-07 03:08:38',
            ),
            350 => 
            array (
                'id' => 851,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:09:47',
                'updated_at' => '2021-07-07 03:09:47',
            ),
            351 => 
            array (
                'id' => 852,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:09:51',
                'updated_at' => '2021-07-07 03:09:51',
            ),
            352 => 
            array (
                'id' => 853,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:10:13',
                'updated_at' => '2021-07-07 03:10:13',
            ),
            353 => 
            array (
                'id' => 854,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:11:49',
                'updated_at' => '2021-07-07 03:11:49',
            ),
            354 => 
            array (
                'id' => 855,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:12:02',
                'updated_at' => '2021-07-07 03:12:02',
            ),
            355 => 
            array (
                'id' => 856,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:12:10',
                'updated_at' => '2021-07-07 03:12:10',
            ),
            356 => 
            array (
                'id' => 857,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:12:19',
                'updated_at' => '2021-07-07 03:12:19',
            ),
            357 => 
            array (
                'id' => 858,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:12:25',
                'updated_at' => '2021-07-07 03:12:25',
            ),
            358 => 
            array (
                'id' => 859,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:13:39',
                'updated_at' => '2021-07-07 03:13:39',
            ),
            359 => 
            array (
                'id' => 860,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:13:46',
                'updated_at' => '2021-07-07 03:13:46',
            ),
            360 => 
            array (
                'id' => 861,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:13:52',
                'updated_at' => '2021-07-07 03:13:52',
            ),
            361 => 
            array (
                'id' => 862,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:14:03',
                'updated_at' => '2021-07-07 03:14:03',
            ),
            362 => 
            array (
                'id' => 863,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:14:45',
                'updated_at' => '2021-07-07 03:14:45',
            ),
            363 => 
            array (
                'id' => 864,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:15:06',
                'updated_at' => '2021-07-07 03:15:06',
            ),
            364 => 
            array (
                'id' => 865,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:15:58',
                'updated_at' => '2021-07-07 03:15:58',
            ),
            365 => 
            array (
                'id' => 866,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:16:52',
                'updated_at' => '2021-07-07 03:16:52',
            ),
            366 => 
            array (
                'id' => 867,
                'user_id' => '1',
                'ar_action' => 'قام بطباعة تقارير طلبات الشراء',
                'en_action' => 'Print orders report',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:18:04',
                'updated_at' => '2021-07-07 03:18:04',
            ),
            367 => 
            array (
                'id' => 868,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:18:37',
                'updated_at' => '2021-07-07 03:18:37',
            ),
            368 => 
            array (
                'id' => 869,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:18:54',
                'updated_at' => '2021-07-07 03:18:54',
            ),
            369 => 
            array (
                'id' => 870,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:19:01',
                'updated_at' => '2021-07-07 03:19:01',
            ),
            370 => 
            array (
                'id' => 871,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:20:23',
                'updated_at' => '2021-07-07 03:20:23',
            ),
            371 => 
            array (
                'id' => 872,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:20:56',
                'updated_at' => '2021-07-07 03:20:56',
            ),
            372 => 
            array (
                'id' => 873,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:21:20',
                'updated_at' => '2021-07-07 03:21:20',
            ),
            373 => 
            array (
                'id' => 874,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:21:44',
                'updated_at' => '2021-07-07 03:21:44',
            ),
            374 => 
            array (
                'id' => 875,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:22:15',
                'updated_at' => '2021-07-07 03:22:15',
            ),
            375 => 
            array (
                'id' => 876,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:23:00',
                'updated_at' => '2021-07-07 03:23:00',
            ),
            376 => 
            array (
                'id' => 877,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:32:38',
                'updated_at' => '2021-07-07 03:32:38',
            ),
            377 => 
            array (
                'id' => 878,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:32:53',
                'updated_at' => '2021-07-07 03:32:53',
            ),
            378 => 
            array (
                'id' => 879,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:33:43',
                'updated_at' => '2021-07-07 03:33:43',
            ),
            379 => 
            array (
                'id' => 880,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:34:05',
                'updated_at' => '2021-07-07 03:34:05',
            ),
            380 => 
            array (
                'id' => 881,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:34:33',
                'updated_at' => '2021-07-07 03:34:33',
            ),
            381 => 
            array (
                'id' => 882,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:34:49',
                'updated_at' => '2021-07-07 03:34:49',
            ),
            382 => 
            array (
                'id' => 883,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:34:57',
                'updated_at' => '2021-07-07 03:34:57',
            ),
            383 => 
            array (
                'id' => 884,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:40:33',
                'updated_at' => '2021-07-07 03:40:33',
            ),
            384 => 
            array (
                'id' => 885,
                'user_id' => '1',
                'ar_action' => 'قام بطباعة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Print best selling products report',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:41:07',
                'updated_at' => '2021-07-07 03:41:07',
            ),
            385 => 
            array (
                'id' => 886,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:41:47',
                'updated_at' => '2021-07-07 03:41:47',
            ),
            386 => 
            array (
                'id' => 887,
                'user_id' => '1',
                'ar_action' => 'قام بطباعة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Print best selling products report',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:41:49',
                'updated_at' => '2021-07-07 03:41:49',
            ),
            387 => 
            array (
                'id' => 888,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Open best selling products report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:42:12',
                'updated_at' => '2021-07-07 03:42:12',
            ),
            388 => 
            array (
                'id' => 889,
                'user_id' => '1',
                'ar_action' => 'قام بطباعة تقارير المنتجات الأكثر مبيعاً',
                'en_action' => 'Print best selling products report',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:42:13',
                'updated_at' => '2021-07-07 03:42:13',
            ),
            389 => 
            array (
                'id' => 890,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:42:37',
                'updated_at' => '2021-07-07 03:42:37',
            ),
            390 => 
            array (
                'id' => 891,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:44:40',
                'updated_at' => '2021-07-07 03:44:40',
            ),
            391 => 
            array (
                'id' => 892,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:44:56',
                'updated_at' => '2021-07-07 03:44:56',
            ),
            392 => 
            array (
                'id' => 893,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:45:24',
                'updated_at' => '2021-07-07 03:45:24',
            ),
            393 => 
            array (
                'id' => 894,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:45:29',
                'updated_at' => '2021-07-07 03:45:29',
            ),
            394 => 
            array (
                'id' => 895,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:46:20',
                'updated_at' => '2021-07-07 03:46:20',
            ),
            395 => 
            array (
                'id' => 896,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:46:41',
                'updated_at' => '2021-07-07 03:46:41',
            ),
            396 => 
            array (
                'id' => 897,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:49:22',
                'updated_at' => '2021-07-07 03:49:22',
            ),
            397 => 
            array (
                'id' => 898,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:49:40',
                'updated_at' => '2021-07-07 03:49:40',
            ),
            398 => 
            array (
                'id' => 899,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:53:39',
                'updated_at' => '2021-07-07 03:53:39',
            ),
            399 => 
            array (
                'id' => 900,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:54:29',
                'updated_at' => '2021-07-07 03:54:29',
            ),
            400 => 
            array (
                'id' => 901,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:54:41',
                'updated_at' => '2021-07-07 03:54:41',
            ),
            401 => 
            array (
                'id' => 902,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:55:00',
                'updated_at' => '2021-07-07 03:55:00',
            ),
            402 => 
            array (
                'id' => 903,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:55:21',
                'updated_at' => '2021-07-07 03:55:21',
            ),
            403 => 
            array (
                'id' => 904,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:55:36',
                'updated_at' => '2021-07-07 03:55:36',
            ),
            404 => 
            array (
                'id' => 905,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:55:59',
                'updated_at' => '2021-07-07 03:55:59',
            ),
            405 => 
            array (
                'id' => 906,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:56:58',
                'updated_at' => '2021-07-07 03:56:58',
            ),
            406 => 
            array (
                'id' => 907,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:57:38',
                'updated_at' => '2021-07-07 03:57:38',
            ),
            407 => 
            array (
                'id' => 908,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 03:59:54',
                'updated_at' => '2021-07-07 03:59:54',
            ),
            408 => 
            array (
                'id' => 909,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:00:12',
                'updated_at' => '2021-07-07 04:00:12',
            ),
            409 => 
            array (
                'id' => 910,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة العملات',
                'en_action' => 'Open currencies page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:04:12',
                'updated_at' => '2021-07-07 04:04:12',
            ),
            410 => 
            array (
                'id' => 911,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:15:33',
                'updated_at' => '2021-07-07 04:15:33',
            ),
            411 => 
            array (
                'id' => 912,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:18:19',
                'updated_at' => '2021-07-07 04:18:19',
            ),
            412 => 
            array (
                'id' => 913,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:18:44',
                'updated_at' => '2021-07-07 04:18:44',
            ),
            413 => 
            array (
                'id' => 914,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:19:23',
                'updated_at' => '2021-07-07 04:19:23',
            ),
            414 => 
            array (
                'id' => 915,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:19:29',
                'updated_at' => '2021-07-07 04:19:29',
            ),
            415 => 
            array (
                'id' => 916,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:19:41',
                'updated_at' => '2021-07-07 04:19:41',
            ),
            416 => 
            array (
                'id' => 917,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:19:46',
                'updated_at' => '2021-07-07 04:19:46',
            ),
            417 => 
            array (
                'id' => 918,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:19:58',
                'updated_at' => '2021-07-07 04:19:58',
            ),
            418 => 
            array (
                'id' => 919,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:21:18',
                'updated_at' => '2021-07-07 04:21:18',
            ),
            419 => 
            array (
                'id' => 920,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:24:46',
                'updated_at' => '2021-07-07 04:24:46',
            ),
            420 => 
            array (
                'id' => 921,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:26:41',
                'updated_at' => '2021-07-07 04:26:41',
            ),
            421 => 
            array (
                'id' => 922,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:26:57',
                'updated_at' => '2021-07-07 04:26:57',
            ),
            422 => 
            array (
                'id' => 923,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:34:03',
                'updated_at' => '2021-07-07 04:34:03',
            ),
            423 => 
            array (
                'id' => 924,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:38:11',
                'updated_at' => '2021-07-07 04:38:11',
            ),
            424 => 
            array (
                'id' => 925,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:40:03',
                'updated_at' => '2021-07-07 04:40:03',
            ),
            425 => 
            array (
                'id' => 926,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:40:40',
                'updated_at' => '2021-07-07 04:40:40',
            ),
            426 => 
            array (
                'id' => 927,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:45:36',
                'updated_at' => '2021-07-07 04:45:36',
            ),
            427 => 
            array (
                'id' => 928,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:46:02',
                'updated_at' => '2021-07-07 04:46:02',
            ),
            428 => 
            array (
                'id' => 929,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:46:35',
                'updated_at' => '2021-07-07 04:46:35',
            ),
            429 => 
            array (
                'id' => 930,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:48:25',
                'updated_at' => '2021-07-07 04:48:25',
            ),
            430 => 
            array (
                'id' => 931,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:48:43',
                'updated_at' => '2021-07-07 04:48:43',
            ),
            431 => 
            array (
                'id' => 932,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:49:22',
                'updated_at' => '2021-07-07 04:49:22',
            ),
            432 => 
            array (
                'id' => 933,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 04:49:55',
                'updated_at' => '2021-07-07 04:49:55',
            ),
            433 => 
            array (
                'id' => 934,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:00:04',
                'updated_at' => '2021-07-07 05:00:04',
            ),
            434 => 
            array (
                'id' => 935,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:03:12',
                'updated_at' => '2021-07-07 05:03:12',
            ),
            435 => 
            array (
                'id' => 936,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:03:29',
                'updated_at' => '2021-07-07 05:03:29',
            ),
            436 => 
            array (
                'id' => 937,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:05:41',
                'updated_at' => '2021-07-07 05:05:41',
            ),
            437 => 
            array (
                'id' => 938,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:05:55',
                'updated_at' => '2021-07-07 05:05:55',
            ),
            438 => 
            array (
                'id' => 939,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:06:35',
                'updated_at' => '2021-07-07 05:06:35',
            ),
            439 => 
            array (
                'id' => 940,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:10:17',
                'updated_at' => '2021-07-07 05:10:17',
            ),
            440 => 
            array (
                'id' => 941,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:10:40',
                'updated_at' => '2021-07-07 05:10:40',
            ),
            441 => 
            array (
                'id' => 942,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:14:58',
                'updated_at' => '2021-07-07 05:14:58',
            ),
            442 => 
            array (
                'id' => 943,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:15:57',
                'updated_at' => '2021-07-07 05:15:57',
            ),
            443 => 
            array (
                'id' => 944,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:18:35',
                'updated_at' => '2021-07-07 05:18:35',
            ),
            444 => 
            array (
                'id' => 945,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:18:49',
                'updated_at' => '2021-07-07 05:18:49',
            ),
            445 => 
            array (
                'id' => 946,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مدينة حالية Chipinge',
                'en_action' => 'Edit current city Chipinge',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:25:19',
                'updated_at' => '2021-07-07 05:25:19',
            ),
            446 => 
            array (
                'id' => 947,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:25:21',
                'updated_at' => '2021-07-07 05:25:21',
            ),
            447 => 
            array (
                'id' => 948,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:26:02',
                'updated_at' => '2021-07-07 05:26:02',
            ),
            448 => 
            array (
                'id' => 949,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:27:56',
                'updated_at' => '2021-07-07 05:27:56',
            ),
            449 => 
            array (
                'id' => 950,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:28:30',
                'updated_at' => '2021-07-07 05:28:30',
            ),
            450 => 
            array (
                'id' => 951,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:30:30',
                'updated_at' => '2021-07-07 05:30:30',
            ),
            451 => 
            array (
                'id' => 952,
                'user_id' => '1',
                'ar_action' => 'قام بحذف مدينة حالية Eshkashem',
                'en_action' => 'Delete current city Eshkashem',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:30:40',
                'updated_at' => '2021-07-07 05:30:40',
            ),
            452 => 
            array (
                'id' => 953,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:30:41',
                'updated_at' => '2021-07-07 05:30:41',
            ),
            453 => 
            array (
                'id' => 954,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:33:04',
                'updated_at' => '2021-07-07 05:33:04',
            ),
            454 => 
            array (
                'id' => 955,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:35:30',
                'updated_at' => '2021-07-07 05:35:30',
            ),
            455 => 
            array (
                'id' => 956,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:36:11',
                'updated_at' => '2021-07-07 05:36:11',
            ),
            456 => 
            array (
                'id' => 957,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:36:23',
                'updated_at' => '2021-07-07 05:36:23',
            ),
            457 => 
            array (
                'id' => 958,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:36:38',
                'updated_at' => '2021-07-07 05:36:38',
            ),
            458 => 
            array (
                'id' => 959,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:39:09',
                'updated_at' => '2021-07-07 05:39:09',
            ),
            459 => 
            array (
                'id' => 960,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:40:07',
                'updated_at' => '2021-07-07 05:40:07',
            ),
            460 => 
            array (
                'id' => 961,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:40:42',
                'updated_at' => '2021-07-07 05:40:42',
            ),
            461 => 
            array (
                'id' => 962,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:41:15',
                'updated_at' => '2021-07-07 05:41:15',
            ),
            462 => 
            array (
                'id' => 963,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:46:19',
                'updated_at' => '2021-07-07 05:46:19',
            ),
            463 => 
            array (
                'id' => 964,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:50:52',
                'updated_at' => '2021-07-07 05:50:52',
            ),
            464 => 
            array (
                'id' => 965,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:51:43',
                'updated_at' => '2021-07-07 05:51:43',
            ),
            465 => 
            array (
                'id' => 966,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:52:50',
                'updated_at' => '2021-07-07 05:52:50',
            ),
            466 => 
            array (
                'id' => 967,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:53:07',
                'updated_at' => '2021-07-07 05:53:07',
            ),
            467 => 
            array (
                'id' => 968,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '::1',
                'created_at' => '2021-07-07 05:55:26',
                'updated_at' => '2021-07-07 05:55:26',
            ),
            468 => 
            array (
                'id' => 969,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:00:03',
                'updated_at' => '2021-07-07 06:00:03',
            ),
            469 => 
            array (
                'id' => 970,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:00:14',
                'updated_at' => '2021-07-07 06:00:14',
            ),
            470 => 
            array (
                'id' => 971,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:03:41',
                'updated_at' => '2021-07-07 06:03:41',
            ),
            471 => 
            array (
                'id' => 972,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:03:56',
                'updated_at' => '2021-07-07 06:03:56',
            ),
            472 => 
            array (
                'id' => 973,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:04:44',
                'updated_at' => '2021-07-07 06:04:44',
            ),
            473 => 
            array (
                'id' => 974,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:06:03',
                'updated_at' => '2021-07-07 06:06:03',
            ),
            474 => 
            array (
                'id' => 975,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:06:07',
                'updated_at' => '2021-07-07 06:06:07',
            ),
            475 => 
            array (
                'id' => 976,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:06:26',
                'updated_at' => '2021-07-07 06:06:26',
            ),
            476 => 
            array (
                'id' => 977,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:06:45',
                'updated_at' => '2021-07-07 06:06:45',
            ),
            477 => 
            array (
                'id' => 978,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:06:52',
                'updated_at' => '2021-07-07 06:06:52',
            ),
            478 => 
            array (
                'id' => 979,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:07:39',
                'updated_at' => '2021-07-07 06:07:39',
            ),
            479 => 
            array (
                'id' => 980,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:08:38',
                'updated_at' => '2021-07-07 06:08:38',
            ),
            480 => 
            array (
                'id' => 981,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:08:53',
                'updated_at' => '2021-07-07 06:08:53',
            ),
            481 => 
            array (
                'id' => 982,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:10:28',
                'updated_at' => '2021-07-07 06:10:28',
            ),
            482 => 
            array (
                'id' => 983,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:10:51',
                'updated_at' => '2021-07-07 06:10:51',
            ),
            483 => 
            array (
                'id' => 984,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:11:20',
                'updated_at' => '2021-07-07 06:11:20',
            ),
            484 => 
            array (
                'id' => 985,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:12:25',
                'updated_at' => '2021-07-07 06:12:25',
            ),
            485 => 
            array (
                'id' => 986,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:13:00',
                'updated_at' => '2021-07-07 06:13:00',
            ),
            486 => 
            array (
                'id' => 987,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:13:09',
                'updated_at' => '2021-07-07 06:13:09',
            ),
            487 => 
            array (
                'id' => 988,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:13:32',
                'updated_at' => '2021-07-07 06:13:32',
            ),
            488 => 
            array (
                'id' => 989,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:15:03',
                'updated_at' => '2021-07-07 06:15:03',
            ),
            489 => 
            array (
                'id' => 990,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:15:19',
                'updated_at' => '2021-07-07 06:15:19',
            ),
            490 => 
            array (
                'id' => 991,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:15:32',
                'updated_at' => '2021-07-07 06:15:32',
            ),
            491 => 
            array (
                'id' => 992,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:16:25',
                'updated_at' => '2021-07-07 06:16:25',
            ),
            492 => 
            array (
                'id' => 993,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:16:50',
                'updated_at' => '2021-07-07 06:16:50',
            ),
            493 => 
            array (
                'id' => 994,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:16:57',
                'updated_at' => '2021-07-07 06:16:57',
            ),
            494 => 
            array (
                'id' => 995,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:17:33',
                'updated_at' => '2021-07-07 06:17:33',
            ),
            495 => 
            array (
                'id' => 996,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:19:21',
                'updated_at' => '2021-07-07 06:19:21',
            ),
            496 => 
            array (
                'id' => 997,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:21:30',
                'updated_at' => '2021-07-07 06:21:30',
            ),
            497 => 
            array (
                'id' => 998,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:21:52',
                'updated_at' => '2021-07-07 06:21:52',
            ),
            498 => 
            array (
                'id' => 999,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:22:12',
                'updated_at' => '2021-07-07 06:22:12',
            ),
            499 => 
            array (
                'id' => 1000,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:22:29',
                'updated_at' => '2021-07-07 06:22:29',
            ),
        ));
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:23:28',
                'updated_at' => '2021-07-07 06:23:28',
            ),
            1 => 
            array (
                'id' => 1002,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:24:28',
                'updated_at' => '2021-07-07 06:24:28',
            ),
            2 => 
            array (
                'id' => 1003,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:25:43',
                'updated_at' => '2021-07-07 06:25:43',
            ),
            3 => 
            array (
                'id' => 1004,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:29:22',
                'updated_at' => '2021-07-07 06:29:22',
            ),
            4 => 
            array (
                'id' => 1005,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:31:03',
                'updated_at' => '2021-07-07 06:31:03',
            ),
            5 => 
            array (
                'id' => 1006,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:31:41',
                'updated_at' => '2021-07-07 06:31:41',
            ),
            6 => 
            array (
                'id' => 1007,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:32:20',
                'updated_at' => '2021-07-07 06:32:20',
            ),
            7 => 
            array (
                'id' => 1008,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:32:32',
                'updated_at' => '2021-07-07 06:32:32',
            ),
            8 => 
            array (
                'id' => 1009,
                'user_id' => '1',
                'ar_action' => 'Print order no. 81',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:35:32',
                'updated_at' => '2021-07-07 06:35:32',
            ),
            9 => 
            array (
                'id' => 1010,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:35:51',
                'updated_at' => '2021-07-07 06:35:51',
            ),
            10 => 
            array (
                'id' => 1011,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:37:23',
                'updated_at' => '2021-07-07 06:37:23',
            ),
            11 => 
            array (
                'id' => 1012,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:38:13',
                'updated_at' => '2021-07-07 06:38:13',
            ),
            12 => 
            array (
                'id' => 1013,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:40:19',
                'updated_at' => '2021-07-07 06:40:19',
            ),
            13 => 
            array (
                'id' => 1014,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:40:56',
                'updated_at' => '2021-07-07 06:40:56',
            ),
            14 => 
            array (
                'id' => 1015,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:42:09',
                'updated_at' => '2021-07-07 06:42:09',
            ),
            15 => 
            array (
                'id' => 1016,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:43:23',
                'updated_at' => '2021-07-07 06:43:23',
            ),
            16 => 
            array (
                'id' => 1017,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:43:26',
                'updated_at' => '2021-07-07 06:43:26',
            ),
            17 => 
            array (
                'id' => 1018,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:43:51',
                'updated_at' => '2021-07-07 06:43:51',
            ),
            18 => 
            array (
                'id' => 1019,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:45:06',
                'updated_at' => '2021-07-07 06:45:06',
            ),
            19 => 
            array (
                'id' => 1020,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:46:48',
                'updated_at' => '2021-07-07 06:46:48',
            ),
            20 => 
            array (
                'id' => 1021,
                'user_id' => '1',
                'ar_action' => 'Print order no. 82',
                'en_action' => '',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:46:53',
                'updated_at' => '2021-07-07 06:46:53',
            ),
            21 => 
            array (
                'id' => 1022,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-07 06:52:14',
                'updated_at' => '2021-07-07 06:52:14',
            ),
            22 => 
            array (
                'id' => 1023,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.71.242.140',
                'created_at' => '2021-07-07 06:55:01',
                'updated_at' => '2021-07-07 06:55:01',
            ),
            23 => 
            array (
                'id' => 1024,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '188.71.242.140',
                'created_at' => '2021-07-07 06:55:11',
                'updated_at' => '2021-07-07 06:55:11',
            ),
            24 => 
            array (
                'id' => 1025,
                'user_id' => '1',
                'ar_action' => 'قام بفتح  رسالة إتصل بنا رقم 1',
                'en_action' => 'Open contact message No. 1',
                'ip' => '188.71.242.140',
                'created_at' => '2021-07-07 06:55:19',
                'updated_at' => '2021-07-07 06:55:19',
            ),
            25 => 
            array (
                'id' => 1026,
                'user_id' => '1',
                'ar_action' => 'قام بفتح  رسالة إتصل بنا رقم 1',
                'en_action' => 'Open contact message No. 1',
                'ip' => '188.71.242.140',
                'created_at' => '2021-07-07 06:55:59',
                'updated_at' => '2021-07-07 06:55:59',
            ),
            26 => 
            array (
                'id' => 1027,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '188.71.242.140',
                'created_at' => '2021-07-07 06:57:55',
                'updated_at' => '2021-07-07 06:57:55',
            ),
            27 => 
            array (
                'id' => 1028,
                'user_id' => '1',
                'ar_action' => 'Print order no. 1',
                'en_action' => '',
                'ip' => '188.71.242.140',
                'created_at' => '2021-07-07 06:57:57',
                'updated_at' => '2021-07-07 06:57:57',
            ),
            28 => 
            array (
                'id' => 1029,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.71.242.140',
                'created_at' => '2021-07-07 06:58:05',
                'updated_at' => '2021-07-07 06:58:05',
            ),
            29 => 
            array (
                'id' => 1030,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 12:59:05',
                'updated_at' => '2021-07-08 12:59:05',
            ),
            30 => 
            array (
                'id' => 1031,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 12:59:05',
                'updated_at' => '2021-07-08 12:59:05',
            ),
            31 => 
            array (
                'id' => 1032,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 13:00:11',
                'updated_at' => '2021-07-08 13:00:11',
            ),
            32 => 
            array (
                'id' => 1033,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد نص 1',
                'en_action' => 'Send new notification text text 1',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 13:02:14',
                'updated_at' => '2021-07-08 13:02:14',
            ),
            33 => 
            array (
                'id' => 1034,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 13:02:14',
                'updated_at' => '2021-07-08 13:02:14',
            ),
            34 => 
            array (
                'id' => 1035,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد نص 2',
                'en_action' => 'Send new notification text 22',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 13:05:18',
                'updated_at' => '2021-07-08 13:05:18',
            ),
            35 => 
            array (
                'id' => 1036,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 13:05:19',
                'updated_at' => '2021-07-08 13:05:19',
            ),
            36 => 
            array (
                'id' => 1037,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:28:20',
                'updated_at' => '2021-07-08 13:28:20',
            ),
            37 => 
            array (
                'id' => 1038,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:28:20',
                'updated_at' => '2021-07-08 13:28:20',
            ),
            38 => 
            array (
                'id' => 1039,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:28:29',
                'updated_at' => '2021-07-08 13:28:29',
            ),
            39 => 
            array (
                'id' => 1040,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:28:36',
                'updated_at' => '2021-07-08 13:28:36',
            ),
            40 => 
            array (
                'id' => 1041,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:28:56',
                'updated_at' => '2021-07-08 13:28:56',
            ),
            41 => 
            array (
                'id' => 1042,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:28:56',
                'updated_at' => '2021-07-08 13:28:56',
            ),
            42 => 
            array (
                'id' => 1043,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل إعدادات الموقع',
                'en_action' => 'Edit site settings ',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:29:11',
                'updated_at' => '2021-07-08 13:29:11',
            ),
            43 => 
            array (
                'id' => 1044,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:29:11',
                'updated_at' => '2021-07-08 13:29:11',
            ),
            44 => 
            array (
                'id' => 1045,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد test sub ar',
                'en_action' => 'Send new notification test sub en',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:30:04',
                'updated_at' => '2021-07-08 13:30:04',
            ),
            45 => 
            array (
                'id' => 1046,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:30:05',
                'updated_at' => '2021-07-08 13:30:05',
            ),
            46 => 
            array (
                'id' => 1047,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:30:39',
                'updated_at' => '2021-07-08 13:30:39',
            ),
            47 => 
            array (
                'id' => 1048,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:30:47',
                'updated_at' => '2021-07-08 13:30:47',
            ),
            48 => 
            array (
                'id' => 1049,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:30:49',
                'updated_at' => '2021-07-08 13:30:49',
            ),
            49 => 
            array (
                'id' => 1050,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:30:54',
                'updated_at' => '2021-07-08 13:30:54',
            ),
            50 => 
            array (
                'id' => 1051,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  بيانات حسابه',
                'en_action' => 'update his profile info',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 13:31:17',
                'updated_at' => '2021-07-08 13:31:17',
            ),
            51 => 
            array (
                'id' => 1052,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:32:56',
                'updated_at' => '2021-07-08 14:32:56',
            ),
            52 => 
            array (
                'id' => 1053,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:56:21',
                'updated_at' => '2021-07-08 14:56:21',
            ),
            53 => 
            array (
                'id' => 1054,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:56:24',
                'updated_at' => '2021-07-08 14:56:24',
            ),
            54 => 
            array (
                'id' => 1055,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:56:29',
                'updated_at' => '2021-07-08 14:56:29',
            ),
            55 => 
            array (
                'id' => 1056,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:56:42',
                'updated_at' => '2021-07-08 14:56:42',
            ),
            56 => 
            array (
                'id' => 1057,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:57:00',
                'updated_at' => '2021-07-08 14:57:00',
            ),
            57 => 
            array (
                'id' => 1058,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:57:11',
                'updated_at' => '2021-07-08 14:57:11',
            ),
            58 => 
            array (
                'id' => 1059,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الدولة : أفغانستان',
                'en_action' => 'Edit Activation of country : Afghanistan',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:57:19',
                'updated_at' => '2021-07-08 14:57:19',
            ),
            59 => 
            array (
                'id' => 1060,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:57:22',
                'updated_at' => '2021-07-08 14:57:22',
            ),
            60 => 
            array (
                'id' => 1061,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:57:25',
                'updated_at' => '2021-07-08 14:57:25',
            ),
            61 => 
            array (
                'id' => 1062,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:57:35',
                'updated_at' => '2021-07-08 14:57:35',
            ),
            62 => 
            array (
                'id' => 1063,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.39.129.65',
                'created_at' => '2021-07-08 14:57:48',
                'updated_at' => '2021-07-08 14:57:48',
            ),
            63 => 
            array (
                'id' => 1064,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 18:04:56',
                'updated_at' => '2021-07-08 18:04:56',
            ),
            64 => 
            array (
                'id' => 1065,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 18:04:57',
                'updated_at' => '2021-07-08 18:04:57',
            ),
            65 => 
            array (
                'id' => 1066,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '45.99.208.161',
                'created_at' => '2021-07-08 18:05:02',
                'updated_at' => '2021-07-08 18:05:02',
            ),
            66 => 
            array (
                'id' => 1067,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-11 10:44:01',
                'updated_at' => '2021-07-11 10:44:01',
            ),
            67 => 
            array (
                'id' => 1068,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-11 10:44:02',
                'updated_at' => '2021-07-11 10:44:02',
            ),
            68 => 
            array (
                'id' => 1069,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-11 10:44:13',
                'updated_at' => '2021-07-11 10:44:13',
            ),
            69 => 
            array (
                'id' => 1070,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-11 10:57:20',
                'updated_at' => '2021-07-11 10:57:20',
            ),
            70 => 
            array (
                'id' => 1071,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-11 10:57:23',
                'updated_at' => '2021-07-11 10:57:23',
            ),
            71 => 
            array (
                'id' => 1072,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:42:10',
                'updated_at' => '2021-07-11 17:42:10',
            ),
            72 => 
            array (
                'id' => 1073,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:42:11',
                'updated_at' => '2021-07-11 17:42:11',
            ),
            73 => 
            array (
                'id' => 1074,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:42:27',
                'updated_at' => '2021-07-11 17:42:27',
            ),
            74 => 
            array (
                'id' => 1075,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد تجربة تحرية',
                'en_action' => 'Send new notification Test test',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:53:37',
                'updated_at' => '2021-07-11 17:53:37',
            ),
            75 => 
            array (
                'id' => 1076,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:53:38',
                'updated_at' => '2021-07-11 17:53:38',
            ),
            76 => 
            array (
                'id' => 1077,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد هلا فيك',
                'en_action' => 'Send new notification Hello',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:55:25',
                'updated_at' => '2021-07-11 17:55:25',
            ),
            77 => 
            array (
                'id' => 1078,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:55:25',
                'updated_at' => '2021-07-11 17:55:25',
            ),
            78 => 
            array (
                'id' => 1079,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد تلبت',
                'en_action' => 'Send new notification Ggfy',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:58:45',
                'updated_at' => '2021-07-11 17:58:45',
            ),
            79 => 
            array (
                'id' => 1080,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.231.7.42',
                'created_at' => '2021-07-11 17:58:46',
                'updated_at' => '2021-07-11 17:58:46',
            ),
            80 => 
            array (
                'id' => 1081,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 13:11:30',
                'updated_at' => '2021-07-12 13:11:30',
            ),
            81 => 
            array (
                'id' => 1082,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 13:11:31',
                'updated_at' => '2021-07-12 13:11:31',
            ),
            82 => 
            array (
                'id' => 1083,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 13:11:35',
                'updated_at' => '2021-07-12 13:11:35',
            ),
            83 => 
            array (
                'id' => 1084,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد نص الإشعار بالعربي',
                'en_action' => 'Send new notification Notification English Text',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 13:12:15',
                'updated_at' => '2021-07-12 13:12:15',
            ),
            84 => 
            array (
                'id' => 1085,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 13:12:15',
                'updated_at' => '2021-07-12 13:12:15',
            ),
            85 => 
            array (
                'id' => 1086,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 13:12:53',
                'updated_at' => '2021-07-12 13:12:53',
            ),
            86 => 
            array (
                'id' => 1087,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 15:15:43',
                'updated_at' => '2021-07-12 15:15:43',
            ),
            87 => 
            array (
                'id' => 1088,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد تيست تيست تيست',
                'en_action' => 'Send new notification test test test',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 15:34:32',
                'updated_at' => '2021-07-12 15:34:32',
            ),
            88 => 
            array (
                'id' => 1089,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 15:34:32',
                'updated_at' => '2021-07-12 15:34:32',
            ),
            89 => 
            array (
                'id' => 1090,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:35:09',
                'updated_at' => '2021-07-12 15:35:09',
            ),
            90 => 
            array (
                'id' => 1091,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:35:09',
                'updated_at' => '2021-07-12 15:35:09',
            ),
            91 => 
            array (
                'id' => 1092,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:35:24',
                'updated_at' => '2021-07-12 15:35:24',
            ),
            92 => 
            array (
                'id' => 1093,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:42:01',
                'updated_at' => '2021-07-12 15:42:01',
            ),
            93 => 
            array (
                'id' => 1094,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:42:35',
                'updated_at' => '2021-07-12 15:42:35',
            ),
            94 => 
            array (
                'id' => 1095,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:42:36',
                'updated_at' => '2021-07-12 15:42:36',
            ),
            95 => 
            array (
                'id' => 1096,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:43:05',
                'updated_at' => '2021-07-12 15:43:05',
            ),
            96 => 
            array (
                'id' => 1097,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:43:05',
                'updated_at' => '2021-07-12 15:43:05',
            ),
            97 => 
            array (
                'id' => 1098,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:44:54',
                'updated_at' => '2021-07-12 15:44:54',
            ),
            98 => 
            array (
                'id' => 1099,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:44:54',
                'updated_at' => '2021-07-12 15:44:54',
            ),
            99 => 
            array (
                'id' => 1100,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:48:09',
                'updated_at' => '2021-07-12 15:48:09',
            ),
            100 => 
            array (
                'id' => 1101,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:48:09',
                'updated_at' => '2021-07-12 15:48:09',
            ),
            101 => 
            array (
                'id' => 1102,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد NotificationService',
                'en_action' => 'Send new notification NotificationService',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:49:10',
                'updated_at' => '2021-07-12 15:49:10',
            ),
            102 => 
            array (
                'id' => 1103,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:49:10',
                'updated_at' => '2021-07-12 15:49:10',
            ),
            103 => 
            array (
                'id' => 1104,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-12 15:53:23',
                'updated_at' => '2021-07-12 15:53:23',
            ),
            104 => 
            array (
                'id' => 1105,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-12 15:53:23',
                'updated_at' => '2021-07-12 15:53:23',
            ),
            105 => 
            array (
                'id' => 1106,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '213.132.232.50',
                'created_at' => '2021-07-12 15:53:34',
                'updated_at' => '2021-07-12 15:53:34',
            ),
            106 => 
            array (
                'id' => 1107,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:54:06',
                'updated_at' => '2021-07-12 15:54:06',
            ),
            107 => 
            array (
                'id' => 1108,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:54:06',
                'updated_at' => '2021-07-12 15:54:06',
            ),
            108 => 
            array (
                'id' => 1109,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:56:01',
                'updated_at' => '2021-07-12 15:56:01',
            ),
            109 => 
            array (
                'id' => 1110,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 15:56:02',
                'updated_at' => '2021-07-12 15:56:02',
            ),
            110 => 
            array (
                'id' => 1111,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 16:22:54',
                'updated_at' => '2021-07-12 16:22:54',
            ),
            111 => 
            array (
                'id' => 1112,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-12 16:22:54',
                'updated_at' => '2021-07-12 16:22:54',
            ),
            112 => 
            array (
                'id' => 1113,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد سشيشس',
                'en_action' => 'Send new notification يسشيشسي',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 16:24:05',
                'updated_at' => '2021-07-12 16:24:05',
            ),
            113 => 
            array (
                'id' => 1114,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 16:24:06',
                'updated_at' => '2021-07-12 16:24:06',
            ),
            114 => 
            array (
                'id' => 1115,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:19:04',
                'updated_at' => '2021-07-12 17:19:04',
            ),
            115 => 
            array (
                'id' => 1116,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 90 الي قيد الشحن',
                'en_action' => 'Edit status of order no.90 to shipping',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:20:23',
                'updated_at' => '2021-07-12 17:20:23',
            ),
            116 => 
            array (
                'id' => 1117,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:20:52',
                'updated_at' => '2021-07-12 17:20:52',
            ),
            117 => 
            array (
                'id' => 1118,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 90 الي جاري التحضير',
                'en_action' => 'Edit status of order no.90 to preparing',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:21:31',
                'updated_at' => '2021-07-12 17:21:31',
            ),
            118 => 
            array (
                'id' => 1119,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:22:47',
                'updated_at' => '2021-07-12 17:22:47',
            ),
            119 => 
            array (
                'id' => 1120,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 90 الي قيد الشحن',
                'en_action' => 'Edit status of order no.90 to shipping',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:22:58',
                'updated_at' => '2021-07-12 17:22:58',
            ),
            120 => 
            array (
                'id' => 1121,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:25:51',
                'updated_at' => '2021-07-12 17:25:51',
            ),
            121 => 
            array (
                'id' => 1122,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 90 الي تم التسليم',
                'en_action' => 'Edit status of order no.90 to delivered',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:27:45',
                'updated_at' => '2021-07-12 17:27:45',
            ),
            122 => 
            array (
                'id' => 1123,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 90 الي جاري التحضير',
                'en_action' => 'Edit status of order no.90 to preparing',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:31:44',
                'updated_at' => '2021-07-12 17:31:44',
            ),
            123 => 
            array (
                'id' => 1124,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:32:53',
                'updated_at' => '2021-07-12 17:32:53',
            ),
            124 => 
            array (
                'id' => 1125,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:37:10',
                'updated_at' => '2021-07-12 17:37:10',
            ),
            125 => 
            array (
                'id' => 1126,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 90 الي تم التسليم',
                'en_action' => 'Edit status of order no.90 to delivered',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:37:20',
                'updated_at' => '2021-07-12 17:37:20',
            ),
            126 => 
            array (
                'id' => 1127,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:38:14',
                'updated_at' => '2021-07-12 17:38:14',
            ),
            127 => 
            array (
                'id' => 1128,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 88 الي قيد الشحن',
                'en_action' => 'Edit status of order no.88 to shipping',
                'ip' => '188.70.61.204',
                'created_at' => '2021-07-12 17:38:24',
                'updated_at' => '2021-07-12 17:38:24',
            ),
            128 => 
            array (
                'id' => 1129,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:00:21',
                'updated_at' => '2021-07-14 12:00:21',
            ),
            129 => 
            array (
                'id' => 1130,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:00:21',
                'updated_at' => '2021-07-14 12:00:21',
            ),
            130 => 
            array (
                'id' => 1131,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:01:39',
                'updated_at' => '2021-07-14 12:01:39',
            ),
            131 => 
            array (
                'id' => 1132,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:01:39',
                'updated_at' => '2021-07-14 12:01:39',
            ),
            132 => 
            array (
                'id' => 1133,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:03:03',
                'updated_at' => '2021-07-14 12:03:03',
            ),
            133 => 
            array (
                'id' => 1134,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:03:26',
                'updated_at' => '2021-07-14 12:03:26',
            ),
            134 => 
            array (
                'id' => 1135,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:03:31',
                'updated_at' => '2021-07-14 12:03:31',
            ),
            135 => 
            array (
                'id' => 1136,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 12:03:39',
                'updated_at' => '2021-07-14 12:03:39',
            ),
            136 => 
            array (
                'id' => 1137,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:05:01',
                'updated_at' => '2021-07-14 13:05:01',
            ),
            137 => 
            array (
                'id' => 1138,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:08:33',
                'updated_at' => '2021-07-14 13:08:33',
            ),
            138 => 
            array (
                'id' => 1139,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:08:51',
                'updated_at' => '2021-07-14 13:08:51',
            ),
            139 => 
            array (
                'id' => 1140,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:09:38',
                'updated_at' => '2021-07-14 13:09:38',
            ),
            140 => 
            array (
                'id' => 1141,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:10:06',
                'updated_at' => '2021-07-14 13:10:06',
            ),
            141 => 
            array (
                'id' => 1142,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:10:54',
                'updated_at' => '2021-07-14 13:10:54',
            ),
            142 => 
            array (
                'id' => 1143,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:10:57',
                'updated_at' => '2021-07-14 13:10:57',
            ),
            143 => 
            array (
                'id' => 1144,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:01',
                'updated_at' => '2021-07-14 13:11:01',
            ),
            144 => 
            array (
                'id' => 1145,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:18',
                'updated_at' => '2021-07-14 13:11:18',
            ),
            145 => 
            array (
                'id' => 1146,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:29',
                'updated_at' => '2021-07-14 13:11:29',
            ),
            146 => 
            array (
                'id' => 1147,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:41',
                'updated_at' => '2021-07-14 13:11:41',
            ),
            147 => 
            array (
                'id' => 1148,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:43',
                'updated_at' => '2021-07-14 13:11:43',
            ),
            148 => 
            array (
                'id' => 1149,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:46',
                'updated_at' => '2021-07-14 13:11:46',
            ),
            149 => 
            array (
                'id' => 1150,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:52',
                'updated_at' => '2021-07-14 13:11:52',
            ),
            150 => 
            array (
                'id' => 1151,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:11:57',
                'updated_at' => '2021-07-14 13:11:57',
            ),
            151 => 
            array (
                'id' => 1152,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور Lorem Ipsum is simply dummy text of the printing <br> Lorem Ipsum is simply dummy text of the printing',
                'en_action' => 'Edit current slider Your perfume is what they remember',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:12:00',
                'updated_at' => '2021-07-14 13:12:00',
            ),
            152 => 
            array (
                'id' => 1153,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:12:00',
                'updated_at' => '2021-07-14 13:12:00',
            ),
            153 => 
            array (
                'id' => 1154,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:12:04',
                'updated_at' => '2021-07-14 13:12:04',
            ),
            154 => 
            array (
                'id' => 1155,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:12:55',
                'updated_at' => '2021-07-14 13:12:55',
            ),
            155 => 
            array (
                'id' => 1156,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة قسم جديد ALL OVER',
                'en_action' => 'Add new category ALL OVER',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:14:42',
                'updated_at' => '2021-07-14 13:14:42',
            ),
            156 => 
            array (
                'id' => 1157,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:16:42',
                'updated_at' => '2021-07-14 13:16:42',
            ),
            157 => 
            array (
                'id' => 1158,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد ALL OVER',
                'en_action' => 'Add new product ALL OVER',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:21:09',
                'updated_at' => '2021-07-14 13:21:09',
            ),
            158 => 
            array (
                'id' => 1159,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:24:42',
                'updated_at' => '2021-07-14 13:24:42',
            ),
            159 => 
            array (
                'id' => 1160,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:25:07',
                'updated_at' => '2021-07-14 13:25:07',
            ),
            160 => 
            array (
                'id' => 1161,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة منتج جديد khisah',
                'en_action' => 'Add new product khuslah',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:28:00',
                'updated_at' => '2021-07-14 13:28:00',
            ),
            161 => 
            array (
                'id' => 1162,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:28:09',
                'updated_at' => '2021-07-14 13:28:09',
            ),
            162 => 
            array (
                'id' => 1163,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل قسم حالي ALL OVER',
                'en_action' => 'Edit current category ALL OVER',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:28:21',
                'updated_at' => '2021-07-14 13:28:21',
            ),
            163 => 
            array (
                'id' => 1164,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:28:21',
                'updated_at' => '2021-07-14 13:28:21',
            ),
            164 => 
            array (
                'id' => 1165,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:28:53',
                'updated_at' => '2021-07-14 13:28:53',
            ),
            165 => 
            array (
                'id' => 1166,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:48:11',
                'updated_at' => '2021-07-14 13:48:11',
            ),
            166 => 
            array (
                'id' => 1167,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:56:34',
                'updated_at' => '2021-07-14 13:56:34',
            ),
            167 => 
            array (
                'id' => 1168,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:56:47',
                'updated_at' => '2021-07-14 13:56:47',
            ),
            168 => 
            array (
                'id' => 1169,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:57:16',
                'updated_at' => '2021-07-14 13:57:16',
            ),
            169 => 
            array (
                'id' => 1170,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:57:23',
                'updated_at' => '2021-07-14 13:57:23',
            ),
            170 => 
            array (
                'id' => 1171,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.34.202.211',
                'created_at' => '2021-07-14 13:57:24',
                'updated_at' => '2021-07-14 13:57:24',
            ),
            171 => 
            array (
                'id' => 1172,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-15 14:42:06',
                'updated_at' => '2021-07-15 14:42:06',
            ),
            172 => 
            array (
                'id' => 1173,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-15 14:42:06',
                'updated_at' => '2021-07-15 14:42:06',
            ),
            173 => 
            array (
                'id' => 1174,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '41.43.10.187',
                'created_at' => '2021-07-15 14:47:46',
                'updated_at' => '2021-07-15 14:47:46',
            ),
            174 => 
            array (
                'id' => 1175,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:25:08',
                'updated_at' => '2021-07-21 20:25:08',
            ),
            175 => 
            array (
                'id' => 1176,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:25:08',
                'updated_at' => '2021-07-21 20:25:08',
            ),
            176 => 
            array (
                'id' => 1177,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:37:06',
                'updated_at' => '2021-07-21 20:37:06',
            ),
            177 => 
            array (
                'id' => 1178,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:37:30',
                'updated_at' => '2021-07-21 20:37:30',
            ),
            178 => 
            array (
                'id' => 1179,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:38:16',
                'updated_at' => '2021-07-21 20:38:16',
            ),
            179 => 
            array (
                'id' => 1180,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:43:54',
                'updated_at' => '2021-07-21 20:43:54',
            ),
            180 => 
            array (
                'id' => 1181,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:44:15',
                'updated_at' => '2021-07-21 20:44:15',
            ),
            181 => 
            array (
                'id' => 1182,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:44:27',
                'updated_at' => '2021-07-21 20:44:27',
            ),
            182 => 
            array (
                'id' => 1183,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة كوبونات الخصم',
                'en_action' => 'Open promotion codes page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:45:57',
                'updated_at' => '2021-07-21 20:45:57',
            ),
            183 => 
            array (
                'id' => 1184,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:46:41',
                'updated_at' => '2021-07-21 20:46:41',
            ),
            184 => 
            array (
                'id' => 1185,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:46:52',
                'updated_at' => '2021-07-21 20:46:52',
            ),
            185 => 
            array (
                'id' => 1186,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:47:47',
                'updated_at' => '2021-07-21 20:47:47',
            ),
            186 => 
            array (
                'id' => 1187,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:48:29',
                'updated_at' => '2021-07-21 20:48:29',
            ),
            187 => 
            array (
                'id' => 1188,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:50:01',
                'updated_at' => '2021-07-21 20:50:01',
            ),
            188 => 
            array (
                'id' => 1189,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:50:07',
                'updated_at' => '2021-07-21 20:50:07',
            ),
            189 => 
            array (
                'id' => 1190,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:51:23',
                'updated_at' => '2021-07-21 20:51:23',
            ),
            190 => 
            array (
                'id' => 1191,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:51:35',
                'updated_at' => '2021-07-21 20:51:35',
            ),
            191 => 
            array (
                'id' => 1192,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:51:41',
                'updated_at' => '2021-07-21 20:51:41',
            ),
            192 => 
            array (
                'id' => 1193,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:51:47',
                'updated_at' => '2021-07-21 20:51:47',
            ),
            193 => 
            array (
                'id' => 1194,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:55:03',
                'updated_at' => '2021-07-21 20:55:03',
            ),
            194 => 
            array (
                'id' => 1195,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد test for all',
                'en_action' => 'Send new notification test for all',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:58:01',
                'updated_at' => '2021-07-21 20:58:01',
            ),
            195 => 
            array (
                'id' => 1196,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:58:01',
                'updated_at' => '2021-07-21 20:58:01',
            ),
            196 => 
            array (
                'id' => 1197,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:58:46',
                'updated_at' => '2021-07-21 20:58:46',
            ),
            197 => 
            array (
                'id' => 1198,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:58:55',
                'updated_at' => '2021-07-21 20:58:55',
            ),
            198 => 
            array (
                'id' => 1199,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  بيانات حسابه',
                'en_action' => 'update his profile info',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 20:59:21',
                'updated_at' => '2021-07-21 20:59:21',
            ),
            199 => 
            array (
                'id' => 1200,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:02:46',
                'updated_at' => '2021-07-21 21:02:46',
            ),
            200 => 
            array (
                'id' => 1201,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:09:28',
                'updated_at' => '2021-07-21 21:09:28',
            ),
            201 => 
            array (
                'id' => 1202,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:09:35',
                'updated_at' => '2021-07-21 21:09:35',
            ),
            202 => 
            array (
                'id' => 1203,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:09:44',
                'updated_at' => '2021-07-21 21:09:44',
            ),
            203 => 
            array (
                'id' => 1204,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير عمليات النظام',
                'en_action' => 'Open system log report page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:10:14',
                'updated_at' => '2021-07-21 21:10:14',
            ),
            204 => 
            array (
                'id' => 1205,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:10:20',
                'updated_at' => '2021-07-21 21:10:20',
            ),
            205 => 
            array (
                'id' => 1206,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:10:26',
                'updated_at' => '2021-07-21 21:10:26',
            ),
            206 => 
            array (
                'id' => 1207,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الدول',
                'en_action' => 'Open countries page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:12:51',
                'updated_at' => '2021-07-21 21:12:51',
            ),
            207 => 
            array (
                'id' => 1208,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الدولة : أفغانستان',
                'en_action' => 'Edit Activation of country : Afghanistan',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:12:55',
                'updated_at' => '2021-07-21 21:12:55',
            ),
            208 => 
            array (
                'id' => 1209,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:12:59',
                'updated_at' => '2021-07-21 21:12:59',
            ),
            209 => 
            array (
                'id' => 1210,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:16:01',
                'updated_at' => '2021-07-21 21:16:01',
            ),
            210 => 
            array (
                'id' => 1211,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:17:03',
                'updated_at' => '2021-07-21 21:17:03',
            ),
            211 => 
            array (
                'id' => 1212,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:17:15',
                'updated_at' => '2021-07-21 21:17:15',
            ),
            212 => 
            array (
                'id' => 1213,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:17:21',
                'updated_at' => '2021-07-21 21:17:21',
            ),
            213 => 
            array (
                'id' => 1214,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:20:02',
                'updated_at' => '2021-07-21 21:20:02',
            ),
            214 => 
            array (
                'id' => 1215,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:20:05',
                'updated_at' => '2021-07-21 21:20:05',
            ),
            215 => 
            array (
                'id' => 1216,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:22:39',
                'updated_at' => '2021-07-21 21:22:39',
            ),
            216 => 
            array (
                'id' => 1217,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة دول الفروع',
                'en_action' => 'Open countries of branches  page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:23:02',
                'updated_at' => '2021-07-21 21:23:02',
            ),
            217 => 
            array (
                'id' => 1218,
                'user_id' => '1',
                'ar_action' => 'قام بعرض الفروع لدولة الكويت',
                'en_action' => 'Show branches for country of Kuwait',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:23:11',
                'updated_at' => '2021-07-21 21:23:11',
            ),
            218 => 
            array (
                'id' => 1219,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:23:37',
                'updated_at' => '2021-07-21 21:23:37',
            ),
            219 => 
            array (
                'id' => 1220,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-21 21:23:42',
                'updated_at' => '2021-07-21 21:23:42',
            ),
            220 => 
            array (
                'id' => 1221,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-22 08:50:45',
                'updated_at' => '2021-07-22 08:50:45',
            ),
            221 => 
            array (
                'id' => 1222,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة تقارير طلبات الشراء',
                'en_action' => 'Open orders report page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-22 08:53:11',
                'updated_at' => '2021-07-22 08:53:11',
            ),
            222 => 
            array (
                'id' => 1223,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المدن',
                'en_action' => 'Open cities page',
                'ip' => '37.38.4.197',
                'created_at' => '2021-07-22 08:59:02',
                'updated_at' => '2021-07-22 08:59:02',
            ),
            223 => 
            array (
                'id' => 1224,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 10:29:20',
                'updated_at' => '2021-07-22 10:29:20',
            ),
            224 => 
            array (
                'id' => 1225,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 10:29:28',
                'updated_at' => '2021-07-22 10:29:28',
            ),
            225 => 
            array (
                'id' => 1226,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 10:29:42',
                'updated_at' => '2021-07-22 10:29:42',
            ),
            226 => 
            array (
                'id' => 1227,
                'user_id' => '1',
                'ar_action' => 'Print order no. 1',
                'en_action' => '',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 10:29:59',
                'updated_at' => '2021-07-22 10:29:59',
            ),
            227 => 
            array (
                'id' => 1228,
                'user_id' => '1',
                'ar_action' => 'Print order no. 37',
                'en_action' => '',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 10:30:14',
                'updated_at' => '2021-07-22 10:30:14',
            ),
            228 => 
            array (
                'id' => 1229,
                'user_id' => '1',
                'ar_action' => 'Print order no. 1',
                'en_action' => '',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 10:30:21',
                'updated_at' => '2021-07-22 10:30:21',
            ),
            229 => 
            array (
                'id' => 1230,
                'user_id' => '1',
                'ar_action' => 'Print order no. 53',
                'en_action' => '',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 10:30:26',
                'updated_at' => '2021-07-22 10:30:26',
            ),
            230 => 
            array (
                'id' => 1231,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 11:29:59',
                'updated_at' => '2021-07-22 11:29:59',
            ),
            231 => 
            array (
                'id' => 1232,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 12:27:40',
                'updated_at' => '2021-07-22 12:27:40',
            ),
            232 => 
            array (
                'id' => 1233,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 12:27:49',
                'updated_at' => '2021-07-22 12:27:49',
            ),
            233 => 
            array (
                'id' => 1234,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 12:54:02',
                'updated_at' => '2021-07-22 12:54:02',
            ),
            234 => 
            array (
                'id' => 1235,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-22 13:43:13',
                'updated_at' => '2021-07-22 13:43:13',
            ),
            235 => 
            array (
                'id' => 1236,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الأقسام',
                'en_action' => 'Open categories page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 12:32:41',
                'updated_at' => '2021-07-23 12:32:41',
            ),
            236 => 
            array (
                'id' => 1237,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم معطر المنزل',
                'en_action' => 'Show products for categoy of Home Fragrance',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 12:32:55',
                'updated_at' => '2021-07-23 12:32:55',
            ),
            237 => 
            array (
                'id' => 1238,
                'user_id' => '1',
                'ar_action' => 'قام بعرض منتجات القسم ALL OVER',
                'en_action' => 'Show products for categoy of ALL OVER',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 12:32:59',
                'updated_at' => '2021-07-23 12:32:59',
            ),
            238 => 
            array (
                'id' => 1239,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 12:33:05',
                'updated_at' => '2021-07-23 12:33:05',
            ),
            239 => 
            array (
                'id' => 1240,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد test title en',
                'en_action' => 'Send new notification test title en',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 12:33:41',
                'updated_at' => '2021-07-23 12:33:41',
            ),
            240 => 
            array (
                'id' => 1241,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 12:33:41',
                'updated_at' => '2021-07-23 12:33:41',
            ),
            241 => 
            array (
                'id' => 1242,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:49:15',
                'updated_at' => '2021-07-23 13:49:15',
            ),
            242 => 
            array (
                'id' => 1243,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:49:19',
                'updated_at' => '2021-07-23 13:49:19',
            ),
            243 => 
            array (
                'id' => 1244,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:49:22',
                'updated_at' => '2021-07-23 13:49:22',
            ),
            244 => 
            array (
                'id' => 1245,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 45 الي ملغي',
                'en_action' => 'Edit status of order no.45 to cancelled',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:49:34',
                'updated_at' => '2021-07-23 13:49:34',
            ),
            245 => 
            array (
                'id' => 1246,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:49:35',
                'updated_at' => '2021-07-23 13:49:35',
            ),
            246 => 
            array (
                'id' => 1247,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:49:39',
                'updated_at' => '2021-07-23 13:49:39',
            ),
            247 => 
            array (
                'id' => 1248,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:49:51',
                'updated_at' => '2021-07-23 13:49:51',
            ),
            248 => 
            array (
                'id' => 1249,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:53:09',
                'updated_at' => '2021-07-23 13:53:09',
            ),
            249 => 
            array (
                'id' => 1250,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل إعدادات الموقع',
                'en_action' => 'Edit site settings ',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:53:26',
                'updated_at' => '2021-07-23 13:53:26',
            ),
            250 => 
            array (
                'id' => 1251,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 13:53:54',
                'updated_at' => '2021-07-23 13:53:54',
            ),
            251 => 
            array (
                'id' => 1252,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 14:30:24',
                'updated_at' => '2021-07-23 14:30:24',
            ),
            252 => 
            array (
                'id' => 1253,
                'user_id' => '1',
                'ar_action' => 'Print order no. 92',
                'en_action' => '',
                'ip' => '31.203.194.28',
                'created_at' => '2021-07-23 14:30:43',
                'updated_at' => '2021-07-23 14:30:43',
            ),
            253 => 
            array (
                'id' => 1254,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '188.70.2.228',
                'created_at' => '2021-07-23 15:56:44',
                'updated_at' => '2021-07-23 15:56:44',
            ),
            254 => 
            array (
                'id' => 1255,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '188.70.2.228',
                'created_at' => '2021-07-23 15:56:55',
                'updated_at' => '2021-07-23 15:56:55',
            ),
            255 => 
            array (
                'id' => 1256,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '37.38.21.188',
                'created_at' => '2021-07-23 17:56:13',
                'updated_at' => '2021-07-23 17:56:13',
            ),
            256 => 
            array (
                'id' => 1257,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:38:20',
                'updated_at' => '2021-07-25 12:38:20',
            ),
            257 => 
            array (
                'id' => 1258,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:38:21',
                'updated_at' => '2021-07-25 12:38:21',
            ),
            258 => 
            array (
                'id' => 1259,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:38:29',
                'updated_at' => '2021-07-25 12:38:29',
            ),
            259 => 
            array (
                'id' => 1260,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:39:46',
                'updated_at' => '2021-07-25 12:39:46',
            ),
            260 => 
            array (
                'id' => 1261,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد hello',
                'en_action' => 'Send new notification hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:39:57',
                'updated_at' => '2021-07-25 12:39:57',
            ),
            261 => 
            array (
                'id' => 1262,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:39:57',
                'updated_at' => '2021-07-25 12:39:57',
            ),
            262 => 
            array (
                'id' => 1263,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:40:48',
                'updated_at' => '2021-07-25 12:40:48',
            ),
            263 => 
            array (
                'id' => 1264,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:41:21',
                'updated_at' => '2021-07-25 12:41:21',
            ),
            264 => 
            array (
                'id' => 1265,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:42:06',
                'updated_at' => '2021-07-25 12:42:06',
            ),
            265 => 
            array (
                'id' => 1266,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:42:13',
                'updated_at' => '2021-07-25 12:42:13',
            ),
            266 => 
            array (
                'id' => 1267,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:42:43',
                'updated_at' => '2021-07-25 12:42:43',
            ),
            267 => 
            array (
                'id' => 1268,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:42:52',
                'updated_at' => '2021-07-25 12:42:52',
            ),
            268 => 
            array (
                'id' => 1269,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:43:02',
                'updated_at' => '2021-07-25 12:43:02',
            ),
            269 => 
            array (
                'id' => 1270,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:52:44',
                'updated_at' => '2021-07-25 12:52:44',
            ),
            270 => 
            array (
                'id' => 1271,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:52:44',
                'updated_at' => '2021-07-25 12:52:44',
            ),
            271 => 
            array (
                'id' => 1272,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد helllllo',
                'en_action' => 'Send new notification heloooo',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:56:32',
                'updated_at' => '2021-07-25 12:56:32',
            ),
            272 => 
            array (
                'id' => 1273,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 12:56:32',
                'updated_at' => '2021-07-25 12:56:32',
            ),
            273 => 
            array (
                'id' => 1274,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:01:48',
                'updated_at' => '2021-07-25 13:01:48',
            ),
            274 => 
            array (
                'id' => 1275,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:01:48',
                'updated_at' => '2021-07-25 13:01:48',
            ),
            275 => 
            array (
                'id' => 1276,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:15:27',
                'updated_at' => '2021-07-25 13:15:27',
            ),
            276 => 
            array (
                'id' => 1277,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:15:27',
                'updated_at' => '2021-07-25 13:15:27',
            ),
            277 => 
            array (
                'id' => 1278,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:17:06',
                'updated_at' => '2021-07-25 13:17:06',
            ),
            278 => 
            array (
                'id' => 1279,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:17:06',
                'updated_at' => '2021-07-25 13:17:06',
            ),
            279 => 
            array (
                'id' => 1280,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:17:57',
                'updated_at' => '2021-07-25 13:17:57',
            ),
            280 => 
            array (
                'id' => 1281,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:17:58',
                'updated_at' => '2021-07-25 13:17:58',
            ),
            281 => 
            array (
                'id' => 1282,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:20:14',
                'updated_at' => '2021-07-25 13:20:14',
            ),
            282 => 
            array (
                'id' => 1283,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:20:14',
                'updated_at' => '2021-07-25 13:20:14',
            ),
            283 => 
            array (
                'id' => 1284,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:24:10',
                'updated_at' => '2021-07-25 13:24:10',
            ),
            284 => 
            array (
                'id' => 1285,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:24:10',
                'updated_at' => '2021-07-25 13:24:10',
            ),
            285 => 
            array (
                'id' => 1286,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:45:41',
                'updated_at' => '2021-07-25 13:45:41',
            ),
            286 => 
            array (
                'id' => 1287,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:45:41',
                'updated_at' => '2021-07-25 13:45:41',
            ),
            287 => 
            array (
                'id' => 1288,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:53:21',
                'updated_at' => '2021-07-25 13:53:21',
            ),
            288 => 
            array (
                'id' => 1289,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:53:21',
                'updated_at' => '2021-07-25 13:53:21',
            ),
            289 => 
            array (
                'id' => 1290,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:55:30',
                'updated_at' => '2021-07-25 13:55:30',
            ),
            290 => 
            array (
                'id' => 1291,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 13:55:30',
                'updated_at' => '2021-07-25 13:55:30',
            ),
            291 => 
            array (
                'id' => 1292,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:02:45',
                'updated_at' => '2021-07-25 14:02:45',
            ),
            292 => 
            array (
                'id' => 1293,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:02:45',
                'updated_at' => '2021-07-25 14:02:45',
            ),
            293 => 
            array (
                'id' => 1294,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:04:28',
                'updated_at' => '2021-07-25 14:04:28',
            ),
            294 => 
            array (
                'id' => 1295,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:04:29',
                'updated_at' => '2021-07-25 14:04:29',
            ),
            295 => 
            array (
                'id' => 1296,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد Hello',
                'en_action' => 'Send new notification Hello',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:14:45',
                'updated_at' => '2021-07-25 14:14:45',
            ),
            296 => 
            array (
                'id' => 1297,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:14:45',
                'updated_at' => '2021-07-25 14:14:45',
            ),
            297 => 
            array (
                'id' => 1298,
                'user_id' => '1',
                'ar_action' => 'قام بإرسال إشعار جديد image',
                'en_action' => 'Send new notification image',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:18:43',
                'updated_at' => '2021-07-25 14:18:43',
            ),
            298 => 
            array (
                'id' => 1299,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '156.201.229.68',
                'created_at' => '2021-07-25 14:18:43',
                'updated_at' => '2021-07-25 14:18:43',
            ),
            299 => 
            array (
                'id' => 1300,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:30:47',
                'updated_at' => '2021-07-27 03:30:47',
            ),
            300 => 
            array (
                'id' => 1301,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:31:06',
                'updated_at' => '2021-07-27 03:31:06',
            ),
            301 => 
            array (
                'id' => 1302,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:31:32',
                'updated_at' => '2021-07-27 03:31:32',
            ),
            302 => 
            array (
                'id' => 1303,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:36:55',
                'updated_at' => '2021-07-27 03:36:55',
            ),
            303 => 
            array (
                'id' => 1304,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:40:40',
                'updated_at' => '2021-07-27 03:40:40',
            ),
            304 => 
            array (
                'id' => 1305,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:43:15',
                'updated_at' => '2021-07-27 03:43:15',
            ),
            305 => 
            array (
                'id' => 1306,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:43:31',
                'updated_at' => '2021-07-27 03:43:31',
            ),
            306 => 
            array (
                'id' => 1307,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:52:27',
                'updated_at' => '2021-07-27 03:52:27',
            ),
            307 => 
            array (
                'id' => 1308,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المنتجات',
                'en_action' => 'Open products page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:52:27',
                'updated_at' => '2021-07-27 03:52:27',
            ),
            308 => 
            array (
                'id' => 1309,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:52:29',
                'updated_at' => '2021-07-27 03:52:29',
            ),
            309 => 
            array (
                'id' => 1310,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:52:32',
                'updated_at' => '2021-07-27 03:52:32',
            ),
            310 => 
            array (
                'id' => 1311,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:52:35',
                'updated_at' => '2021-07-27 03:52:35',
            ),
            311 => 
            array (
                'id' => 1312,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:53:35',
                'updated_at' => '2021-07-27 03:53:35',
            ),
            312 => 
            array (
                'id' => 1313,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:53:37',
                'updated_at' => '2021-07-27 03:53:37',
            ),
            313 => 
            array (
                'id' => 1314,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:53:39',
                'updated_at' => '2021-07-27 03:53:39',
            ),
            314 => 
            array (
                'id' => 1315,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء العضو joseph Raphael',
                'en_action' => 'Open orders page of user joseph Raphael',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:53:42',
                'updated_at' => '2021-07-27 03:53:42',
            ),
            315 => 
            array (
                'id' => 1316,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء العضو joseph Raphael',
                'en_action' => 'Open orders page of user joseph Raphael',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:54:20',
                'updated_at' => '2021-07-27 03:54:20',
            ),
            316 => 
            array (
                'id' => 1317,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء العضو joseph Raphael',
                'en_action' => 'Open orders page of user joseph Raphael',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:56:34',
                'updated_at' => '2021-07-27 03:56:34',
            ),
            317 => 
            array (
                'id' => 1318,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء العضو joseph Raphael',
                'en_action' => 'Open orders page of user joseph Raphael',
                'ip' => '::1',
                'created_at' => '2021-07-27 03:57:03',
                'updated_at' => '2021-07-27 03:57:03',
            ),
            318 => 
            array (
                'id' => 1319,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-27 04:34:43',
                'updated_at' => '2021-07-27 04:34:43',
            ),
            319 => 
            array (
                'id' => 1320,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-07-27 04:35:17',
                'updated_at' => '2021-07-27 04:35:17',
            ),
            320 => 
            array (
                'id' => 1321,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-07-27 04:38:14',
                'updated_at' => '2021-07-27 04:38:14',
            ),
            321 => 
            array (
                'id' => 1322,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-07-27 04:39:55',
                'updated_at' => '2021-07-27 04:39:55',
            ),
            322 => 
            array (
                'id' => 1323,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-07-27 04:41:49',
                'updated_at' => '2021-07-27 04:41:49',
            ),
            323 => 
            array (
                'id' => 1324,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة النشرة البريدية',
                'en_action' => 'Open Newsletter',
                'ip' => '::1',
                'created_at' => '2021-07-27 09:56:52',
                'updated_at' => '2021-07-27 09:56:52',
            ),
            324 => 
            array (
                'id' => 1325,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-27 09:56:59',
                'updated_at' => '2021-07-27 09:56:59',
            ),
            325 => 
            array (
                'id' => 1326,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 39 الي ملغي',
                'en_action' => 'Edit status of order no.39 to cancelled',
                'ip' => '::1',
                'created_at' => '2021-07-27 10:06:55',
                'updated_at' => '2021-07-27 10:06:55',
            ),
            326 => 
            array (
                'id' => 1327,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-27 10:06:58',
                'updated_at' => '2021-07-27 10:06:58',
            ),
            327 => 
            array (
                'id' => 1328,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل حالة الطلب رقم 44 الي ملغي',
                'en_action' => 'Edit status of order no.44 to cancelled',
                'ip' => '::1',
                'created_at' => '2021-07-27 10:09:02',
                'updated_at' => '2021-07-27 10:09:02',
            ),
            328 => 
            array (
                'id' => 1329,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة طلبات الشراء',
                'en_action' => 'Open orders page',
                'ip' => '::1',
                'created_at' => '2021-07-27 10:09:06',
                'updated_at' => '2021-07-27 10:09:06',
            ),
            329 => 
            array (
                'id' => 1330,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 01:57:45',
                'updated_at' => '2021-08-02 01:57:45',
            ),
            330 => 
            array (
                'id' => 1331,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الخرج من لوحة التحكم',
                'en_action' => 'Logout from admin dashboard',
                'ip' => '::1',
                'created_at' => '2021-08-02 01:58:24',
                'updated_at' => '2021-08-02 01:58:24',
            ),
            331 => 
            array (
                'id' => 1332,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:06:04',
                'updated_at' => '2021-08-02 02:06:04',
            ),
            332 => 
            array (
                'id' => 1333,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:06:04',
                'updated_at' => '2021-08-02 02:06:04',
            ),
            333 => 
            array (
                'id' => 1334,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:07:21',
                'updated_at' => '2021-08-02 02:07:21',
            ),
            334 => 
            array (
                'id' => 1335,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:08:08',
                'updated_at' => '2021-08-02 02:08:08',
            ),
            335 => 
            array (
                'id' => 1336,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:08:24',
                'updated_at' => '2021-08-02 02:08:24',
            ),
            336 => 
            array (
                'id' => 1337,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:08:37',
                'updated_at' => '2021-08-02 02:08:37',
            ),
            337 => 
            array (
                'id' => 1338,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:09:05',
                'updated_at' => '2021-08-02 02:09:05',
            ),
            338 => 
            array (
                'id' => 1339,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:19:19',
                'updated_at' => '2021-08-02 02:19:19',
            ),
            339 => 
            array (
                'id' => 1340,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:20:11',
                'updated_at' => '2021-08-02 02:20:11',
            ),
            340 => 
            array (
                'id' => 1341,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  بيانات حسابه',
                'en_action' => 'update his profile info',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:24:49',
                'updated_at' => '2021-08-02 02:24:49',
            ),
            341 => 
            array (
                'id' => 1342,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:24:53',
                'updated_at' => '2021-08-02 02:24:53',
            ),
            342 => 
            array (
                'id' => 1343,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل إعدادات الموقع',
                'en_action' => 'Edit site settings ',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:25:23',
                'updated_at' => '2021-08-02 02:25:23',
            ),
            343 => 
            array (
                'id' => 1344,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:25:23',
                'updated_at' => '2021-08-02 02:25:23',
            ),
            344 => 
            array (
                'id' => 1345,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:25:26',
                'updated_at' => '2021-08-02 02:25:26',
            ),
            345 => 
            array (
                'id' => 1346,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:25:51',
                'updated_at' => '2021-08-02 02:25:51',
            ),
            346 => 
            array (
                'id' => 1347,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:26:02',
                'updated_at' => '2021-08-02 02:26:02',
            ),
            347 => 
            array (
                'id' => 1348,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:27:07',
                'updated_at' => '2021-08-02 02:27:07',
            ),
            348 => 
            array (
                'id' => 1349,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:27:11',
                'updated_at' => '2021-08-02 02:27:11',
            ),
            349 => 
            array (
                'id' => 1350,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:28:19',
                'updated_at' => '2021-08-02 02:28:19',
            ),
            350 => 
            array (
                'id' => 1351,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:39:49',
                'updated_at' => '2021-08-02 02:39:49',
            ),
            351 => 
            array (
                'id' => 1352,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:39:49',
                'updated_at' => '2021-08-02 02:39:49',
            ),
            352 => 
            array (
                'id' => 1353,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:49:23',
                'updated_at' => '2021-08-02 02:49:23',
            ),
            353 => 
            array (
                'id' => 1354,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة بنك جديد بنك الكويت الوطني',
                'en_action' => 'Add new bank National Bank Of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:50:13',
                'updated_at' => '2021-08-02 02:50:13',
            ),
            354 => 
            array (
                'id' => 1355,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:50:15',
                'updated_at' => '2021-08-02 02:50:15',
            ),
            355 => 
            array (
                'id' => 1356,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  بنك حالي بنك الكويت الوطني',
                'en_action' => 'Edit current bank National Bank Of Kuwait',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:50:20',
                'updated_at' => '2021-08-02 02:50:20',
            ),
            356 => 
            array (
                'id' => 1357,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:50:20',
                'updated_at' => '2021-08-02 02:50:20',
            ),
            357 => 
            array (
                'id' => 1358,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:50:26',
                'updated_at' => '2021-08-02 02:50:26',
            ),
            358 => 
            array (
                'id' => 1359,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:51:34',
                'updated_at' => '2021-08-02 02:51:34',
            ),
            359 => 
            array (
                'id' => 1360,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:51:41',
                'updated_at' => '2021-08-02 02:51:41',
            ),
            360 => 
            array (
                'id' => 1361,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الموظف : موظف تجربة',
                'en_action' => 'Edit Activation of employee : موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:51:43',
                'updated_at' => '2021-08-02 02:51:43',
            ),
            361 => 
            array (
                'id' => 1362,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:51:55',
                'updated_at' => '2021-08-02 02:51:55',
            ),
            362 => 
            array (
                'id' => 1363,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل مشرف حالي موظف تجربة',
                'en_action' => 'Edit current supervisor موظف تجربة',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:52:03',
                'updated_at' => '2021-08-02 02:52:03',
            ),
            363 => 
            array (
                'id' => 1364,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:52:03',
                'updated_at' => '2021-08-02 02:52:03',
            ),
            364 => 
            array (
                'id' => 1365,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل مشرف حالي Ahmed Kamal',
                'en_action' => 'Edit current supervisor Ahmed Kamal',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:52:08',
                'updated_at' => '2021-08-02 02:52:08',
            ),
            365 => 
            array (
                'id' => 1366,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '::1',
                'created_at' => '2021-08-02 02:52:08',
                'updated_at' => '2021-08-02 02:52:08',
            ),
            366 => 
            array (
                'id' => 1367,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '::1',
                'created_at' => '2021-08-02 11:57:59',
                'updated_at' => '2021-08-02 11:57:59',
            ),
            367 => 
            array (
                'id' => 1368,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 11:58:00',
                'updated_at' => '2021-08-02 11:58:00',
            ),
            368 => 
            array (
                'id' => 1369,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '::1',
                'created_at' => '2021-08-02 11:58:04',
                'updated_at' => '2021-08-02 11:58:04',
            ),
            369 => 
            array (
                'id' => 1370,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 12:00:12',
                'updated_at' => '2021-08-02 12:00:12',
            ),
            370 => 
            array (
                'id' => 1371,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 12:00:43',
                'updated_at' => '2021-08-02 12:00:43',
            ),
            371 => 
            array (
                'id' => 1372,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 12:01:03',
                'updated_at' => '2021-08-02 12:01:03',
            ),
            372 => 
            array (
                'id' => 1373,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 12:02:10',
                'updated_at' => '2021-08-02 12:02:10',
            ),
            373 => 
            array (
                'id' => 1374,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 12:03:05',
                'updated_at' => '2021-08-02 12:03:05',
            ),
            374 => 
            array (
                'id' => 1375,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 12:41:38',
                'updated_at' => '2021-08-02 12:41:38',
            ),
            375 => 
            array (
                'id' => 1376,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 12:46:04',
                'updated_at' => '2021-08-02 12:46:04',
            ),
            376 => 
            array (
                'id' => 1377,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:37:57',
                'updated_at' => '2021-08-02 13:37:57',
            ),
            377 => 
            array (
                'id' => 1378,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بالإعلانات اعلان الرئيسية',
                'en_action' => 'Delete current ads Home Ads',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:38:03',
                'updated_at' => '2021-08-02 13:38:03',
            ),
            378 => 
            array (
                'id' => 1379,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:38:03',
                'updated_at' => '2021-08-02 13:38:03',
            ),
            379 => 
            array (
                'id' => 1380,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات اعلان ١',
                'en_action' => 'Edit current ads Ads 1',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:38:20',
                'updated_at' => '2021-08-02 13:38:20',
            ),
            380 => 
            array (
                'id' => 1381,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:38:21',
                'updated_at' => '2021-08-02 13:38:21',
            ),
            381 => 
            array (
                'id' => 1382,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:40:40',
                'updated_at' => '2021-08-02 13:40:40',
            ),
            382 => 
            array (
                'id' => 1383,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:41:07',
                'updated_at' => '2021-08-02 13:41:07',
            ),
            383 => 
            array (
                'id' => 1384,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بعارض الصور عنوان',
                'en_action' => 'Delete current slider Title',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:41:14',
                'updated_at' => '2021-08-02 13:41:14',
            ),
            384 => 
            array (
                'id' => 1385,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:41:14',
                'updated_at' => '2021-08-02 13:41:14',
            ),
            385 => 
            array (
                'id' => 1386,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور ',
                'en_action' => 'Edit current slider ',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:42:35',
                'updated_at' => '2021-08-02 13:42:35',
            ),
            386 => 
            array (
                'id' => 1387,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:42:35',
                'updated_at' => '2021-08-02 13:42:35',
            ),
            387 => 
            array (
                'id' => 1388,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:47:22',
                'updated_at' => '2021-08-02 13:47:22',
            ),
            388 => 
            array (
                'id' => 1389,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:47:32',
                'updated_at' => '2021-08-02 13:47:32',
            ),
            389 => 
            array (
                'id' => 1390,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:47:41',
                'updated_at' => '2021-08-02 13:47:41',
            ),
            390 => 
            array (
                'id' => 1391,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:48:15',
                'updated_at' => '2021-08-02 13:48:15',
            ),
            391 => 
            array (
                'id' => 1392,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:52:29',
                'updated_at' => '2021-08-02 13:52:29',
            ),
            392 => 
            array (
                'id' => 1393,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '::1',
                'created_at' => '2021-08-02 13:53:49',
                'updated_at' => '2021-08-02 13:53:49',
            ),
            393 => 
            array (
                'id' => 1394,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:52:43',
                'updated_at' => '2021-08-02 15:52:43',
            ),
            394 => 
            array (
                'id' => 1395,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:52:43',
                'updated_at' => '2021-08-02 15:52:43',
            ),
            395 => 
            array (
                'id' => 1396,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:52:50',
                'updated_at' => '2021-08-02 15:52:50',
            ),
            396 => 
            array (
                'id' => 1397,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:53:10',
                'updated_at' => '2021-08-02 15:53:10',
            ),
            397 => 
            array (
                'id' => 1398,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:53:18',
                'updated_at' => '2021-08-02 15:53:18',
            ),
            398 => 
            array (
                'id' => 1399,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:53:26',
                'updated_at' => '2021-08-02 15:53:26',
            ),
            399 => 
            array (
                'id' => 1400,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:53:34',
                'updated_at' => '2021-08-02 15:53:34',
            ),
            400 => 
            array (
                'id' => 1401,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:53:50',
                'updated_at' => '2021-08-02 15:53:50',
            ),
            401 => 
            array (
                'id' => 1402,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:54:22',
                'updated_at' => '2021-08-02 15:54:22',
            ),
            402 => 
            array (
                'id' => 1403,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صفحات الموقع',
                'en_action' => 'Open website pages',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:54:49',
                'updated_at' => '2021-08-02 15:54:49',
            ),
            403 => 
            array (
                'id' => 1404,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:55:12',
                'updated_at' => '2021-08-02 15:55:12',
            ),
            404 => 
            array (
                'id' => 1405,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:55:22',
                'updated_at' => '2021-08-02 15:55:22',
            ),
            405 => 
            array (
                'id' => 1406,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:55:28',
                'updated_at' => '2021-08-02 15:55:28',
            ),
            406 => 
            array (
                'id' => 1407,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:55:36',
                'updated_at' => '2021-08-02 15:55:36',
            ),
            407 => 
            array (
                'id' => 1408,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:55:48',
                'updated_at' => '2021-08-02 15:55:48',
            ),
            408 => 
            array (
                'id' => 1409,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 15:57:45',
                'updated_at' => '2021-08-02 15:57:45',
            ),
            409 => 
            array (
                'id' => 1410,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 16:07:55',
                'updated_at' => '2021-08-02 16:07:55',
            ),
            410 => 
            array (
                'id' => 1411,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 16:07:55',
                'updated_at' => '2021-08-02 16:07:55',
            ),
            411 => 
            array (
                'id' => 1412,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 16:08:00',
                'updated_at' => '2021-08-02 16:08:00',
            ),
            412 => 
            array (
                'id' => 1413,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 16:08:05',
                'updated_at' => '2021-08-02 16:08:05',
            ),
            413 => 
            array (
                'id' => 1414,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 16:08:11',
                'updated_at' => '2021-08-02 16:08:11',
            ),
            414 => 
            array (
                'id' => 1415,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 16:08:14',
                'updated_at' => '2021-08-02 16:08:14',
            ),
            415 => 
            array (
                'id' => 1416,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-02 17:11:48',
                'updated_at' => '2021-08-02 17:11:48',
            ),
            416 => 
            array (
                'id' => 1417,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:08:40',
                'updated_at' => '2021-08-03 10:08:40',
            ),
            417 => 
            array (
                'id' => 1418,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:08:41',
                'updated_at' => '2021-08-03 10:08:41',
            ),
            418 => 
            array (
                'id' => 1419,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:08:46',
                'updated_at' => '2021-08-03 10:08:46',
            ),
            419 => 
            array (
                'id' => 1420,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:08:53',
                'updated_at' => '2021-08-03 10:08:53',
            ),
            420 => 
            array (
                'id' => 1421,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة بنك جديد البنك الاهلى',
                'en_action' => 'Add new bank ahly bank',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:09:24',
                'updated_at' => '2021-08-03 10:09:24',
            ),
            421 => 
            array (
                'id' => 1422,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:09:28',
                'updated_at' => '2021-08-03 10:09:28',
            ),
            422 => 
            array (
                'id' => 1423,
                'user_id' => '1',
                'ar_action' => 'قام بحذف بنك حالي البنك الاهلى',
                'en_action' => 'Delete current bank ahly bank',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:09:43',
                'updated_at' => '2021-08-03 10:09:43',
            ),
            423 => 
            array (
                'id' => 1424,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:09:43',
                'updated_at' => '2021-08-03 10:09:43',
            ),
            424 => 
            array (
                'id' => 1425,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:09:47',
                'updated_at' => '2021-08-03 10:09:47',
            ),
            425 => 
            array (
                'id' => 1426,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة بنك جديد البنك الاهلى',
                'en_action' => 'Add new bank ahly bank',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:10:06',
                'updated_at' => '2021-08-03 10:10:06',
            ),
            426 => 
            array (
                'id' => 1427,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:10:08',
                'updated_at' => '2021-08-03 10:10:08',
            ),
            427 => 
            array (
                'id' => 1428,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:12:34',
                'updated_at' => '2021-08-03 10:12:34',
            ),
            428 => 
            array (
                'id' => 1429,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:15:31',
                'updated_at' => '2021-08-03 10:15:31',
            ),
            429 => 
            array (
                'id' => 1430,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:16:14',
                'updated_at' => '2021-08-03 10:16:14',
            ),
            430 => 
            array (
                'id' => 1431,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:17:43',
                'updated_at' => '2021-08-03 10:17:43',
            ),
            431 => 
            array (
                'id' => 1432,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:20:12',
                'updated_at' => '2021-08-03 10:20:12',
            ),
            432 => 
            array (
                'id' => 1433,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:20:56',
                'updated_at' => '2021-08-03 10:20:56',
            ),
            433 => 
            array (
                'id' => 1434,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:23:16',
                'updated_at' => '2021-08-03 10:23:16',
            ),
            434 => 
            array (
                'id' => 1435,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:23:29',
                'updated_at' => '2021-08-03 10:23:29',
            ),
            435 => 
            array (
                'id' => 1436,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:24:28',
                'updated_at' => '2021-08-03 10:24:28',
            ),
            436 => 
            array (
                'id' => 1437,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:25:55',
                'updated_at' => '2021-08-03 10:25:55',
            ),
            437 => 
            array (
                'id' => 1438,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:27:32',
                'updated_at' => '2021-08-03 10:27:32',
            ),
            438 => 
            array (
                'id' => 1439,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:30:06',
                'updated_at' => '2021-08-03 10:30:06',
            ),
            439 => 
            array (
                'id' => 1440,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:30:28',
                'updated_at' => '2021-08-03 10:30:28',
            ),
            440 => 
            array (
                'id' => 1441,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:30:31',
                'updated_at' => '2021-08-03 10:30:31',
            ),
            441 => 
            array (
                'id' => 1442,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:31:00',
                'updated_at' => '2021-08-03 10:31:00',
            ),
            442 => 
            array (
                'id' => 1443,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:31:36',
                'updated_at' => '2021-08-03 10:31:36',
            ),
            443 => 
            array (
                'id' => 1444,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:32:20',
                'updated_at' => '2021-08-03 10:32:20',
            ),
            444 => 
            array (
                'id' => 1445,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:32:56',
                'updated_at' => '2021-08-03 10:32:56',
            ),
            445 => 
            array (
                'id' => 1446,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:33:07',
                'updated_at' => '2021-08-03 10:33:07',
            ),
            446 => 
            array (
                'id' => 1447,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 10:33:45',
                'updated_at' => '2021-08-03 10:33:45',
            ),
            447 => 
            array (
                'id' => 1448,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 16:56:33',
                'updated_at' => '2021-08-03 16:56:33',
            ),
            448 => 
            array (
                'id' => 1449,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 16:56:33',
                'updated_at' => '2021-08-03 16:56:33',
            ),
            449 => 
            array (
                'id' => 1450,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 16:56:39',
                'updated_at' => '2021-08-03 16:56:39',
            ),
            450 => 
            array (
                'id' => 1451,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 16:56:44',
                'updated_at' => '2021-08-03 16:56:44',
            ),
            451 => 
            array (
                'id' => 1452,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 16:58:34',
                'updated_at' => '2021-08-03 16:58:34',
            ),
            452 => 
            array (
                'id' => 1453,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 16:58:50',
                'updated_at' => '2021-08-03 16:58:50',
            ),
            453 => 
            array (
                'id' => 1454,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 17:37:40',
                'updated_at' => '2021-08-03 17:37:40',
            ),
            454 => 
            array (
                'id' => 1455,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 17:37:58',
                'updated_at' => '2021-08-03 17:37:58',
            ),
            455 => 
            array (
                'id' => 1456,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإشعارات',
                'en_action' => 'Open notifications page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 17:38:32',
                'updated_at' => '2021-08-03 17:38:32',
            ),
            456 => 
            array (
                'id' => 1457,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 23:15:06',
                'updated_at' => '2021-08-03 23:15:06',
            ),
            457 => 
            array (
                'id' => 1458,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 23:15:07',
                'updated_at' => '2021-08-03 23:15:07',
            ),
            458 => 
            array (
                'id' => 1459,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 23:15:12',
                'updated_at' => '2021-08-03 23:15:12',
            ),
            459 => 
            array (
                'id' => 1460,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-03 23:15:24',
                'updated_at' => '2021-08-03 23:15:24',
            ),
            460 => 
            array (
                'id' => 1461,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-04 02:08:40',
                'updated_at' => '2021-08-04 02:08:40',
            ),
            461 => 
            array (
                'id' => 1462,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-04 02:08:40',
                'updated_at' => '2021-08-04 02:08:40',
            ),
            462 => 
            array (
                'id' => 1463,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-04 02:08:44',
                'updated_at' => '2021-08-04 02:08:44',
            ),
            463 => 
            array (
                'id' => 1464,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-04 02:08:51',
                'updated_at' => '2021-08-04 02:08:51',
            ),
            464 => 
            array (
                'id' => 1465,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:40:29',
                'updated_at' => '2021-08-17 12:40:29',
            ),
            465 => 
            array (
                'id' => 1466,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:40:29',
                'updated_at' => '2021-08-17 12:40:29',
            ),
            466 => 
            array (
                'id' => 1467,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:40:42',
                'updated_at' => '2021-08-17 12:40:42',
            ),
            467 => 
            array (
                'id' => 1468,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:51:01',
                'updated_at' => '2021-08-17 12:51:01',
            ),
            468 => 
            array (
                'id' => 1469,
                'user_id' => '1',
                'ar_action' => 'قام بفتح  رسالة إتصل بنا رقم 1',
                'en_action' => 'Open contact message No. 1',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:51:14',
                'updated_at' => '2021-08-17 12:51:14',
            ),
            469 => 
            array (
                'id' => 1470,
                'user_id' => '1',
                'ar_action' => 'قام بالرد علي رسالة إتصل بنا رقم 1',
                'en_action' => 'Reply to contact message No. 1',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:51:28',
                'updated_at' => '2021-08-17 12:51:28',
            ),
            470 => 
            array (
                'id' => 1471,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:51:29',
                'updated_at' => '2021-08-17 12:51:29',
            ),
            471 => 
            array (
                'id' => 1472,
                'user_id' => '1',
                'ar_action' => 'قام بفتح  رسالة إتصل بنا رقم 1',
                'en_action' => 'Open contact message No. 1',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:51:34',
                'updated_at' => '2021-08-17 12:51:34',
            ),
            472 => 
            array (
                'id' => 1473,
                'user_id' => '1',
                'ar_action' => 'قام بفتح  رسالة إتصل بنا رقم 2',
                'en_action' => 'Open contact message No. 2',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:52:14',
                'updated_at' => '2021-08-17 12:52:14',
            ),
            473 => 
            array (
                'id' => 1474,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:52:23',
                'updated_at' => '2021-08-17 12:52:23',
            ),
            474 => 
            array (
                'id' => 1475,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:53:37',
                'updated_at' => '2021-08-17 12:53:37',
            ),
            475 => 
            array (
                'id' => 1476,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:53:45',
                'updated_at' => '2021-08-17 12:53:45',
            ),
            476 => 
            array (
                'id' => 1477,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 12:59:56',
                'updated_at' => '2021-08-17 12:59:56',
            ),
            477 => 
            array (
                'id' => 1478,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:00:18',
                'updated_at' => '2021-08-17 13:00:18',
            ),
            478 => 
            array (
                'id' => 1479,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:00:46',
                'updated_at' => '2021-08-17 13:00:46',
            ),
            479 => 
            array (
                'id' => 1480,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:01:02',
                'updated_at' => '2021-08-17 13:01:02',
            ),
            480 => 
            array (
                'id' => 1481,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:01:07',
                'updated_at' => '2021-08-17 13:01:07',
            ),
            481 => 
            array (
                'id' => 1482,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:01:09',
                'updated_at' => '2021-08-17 13:01:09',
            ),
            482 => 
            array (
                'id' => 1483,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:01:23',
                'updated_at' => '2021-08-17 13:01:23',
            ),
            483 => 
            array (
                'id' => 1484,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:17:40',
                'updated_at' => '2021-08-17 13:17:40',
            ),
            484 => 
            array (
                'id' => 1485,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:17:53',
                'updated_at' => '2021-08-17 13:17:53',
            ),
            485 => 
            array (
                'id' => 1486,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:18:06',
                'updated_at' => '2021-08-17 13:18:06',
            ),
            486 => 
            array (
                'id' => 1487,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:18:09',
                'updated_at' => '2021-08-17 13:18:09',
            ),
            487 => 
            array (
                'id' => 1488,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:18:12',
                'updated_at' => '2021-08-17 13:18:12',
            ),
            488 => 
            array (
                'id' => 1489,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:19:18',
                'updated_at' => '2021-08-17 13:19:18',
            ),
            489 => 
            array (
                'id' => 1490,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 13:44:15',
                'updated_at' => '2021-08-17 13:44:15',
            ),
            490 => 
            array (
                'id' => 1491,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بعارض الصور Aspernatur modi et s',
                'en_action' => 'Add new slider ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 14:13:39',
                'updated_at' => '2021-08-17 14:13:39',
            ),
            491 => 
            array (
                'id' => 1492,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 14:13:48',
                'updated_at' => '2021-08-17 14:13:48',
            ),
            492 => 
            array (
                'id' => 1493,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور Aspernatur modi et s',
                'en_action' => 'Edit current slider ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 14:14:11',
                'updated_at' => '2021-08-17 14:14:11',
            ),
            493 => 
            array (
                'id' => 1494,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 14:14:11',
                'updated_at' => '2021-08-17 14:14:11',
            ),
            494 => 
            array (
                'id' => 1495,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-17 14:15:28',
                'updated_at' => '2021-08-17 14:15:28',
            ),
            495 => 
            array (
                'id' => 1496,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:48:45',
                'updated_at' => '2021-08-18 12:48:45',
            ),
            496 => 
            array (
                'id' => 1497,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:48:45',
                'updated_at' => '2021-08-18 12:48:45',
            ),
            497 => 
            array (
                'id' => 1498,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:48:50',
                'updated_at' => '2021-08-18 12:48:50',
            ),
            498 => 
            array (
                'id' => 1499,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:49:05',
                'updated_at' => '2021-08-18 12:49:05',
            ),
            499 => 
            array (
                'id' => 1500,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل إعدادات الموقع',
                'en_action' => 'Edit site settings ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:51:21',
                'updated_at' => '2021-08-18 12:51:21',
            ),
        ));
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:51:22',
                'updated_at' => '2021-08-18 12:51:22',
            ),
            1 => 
            array (
                'id' => 1502,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:51:53',
                'updated_at' => '2021-08-18 12:51:53',
            ),
            2 => 
            array (
                'id' => 1503,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الخرج من لوحة التحكم',
                'en_action' => 'Logout from admin dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:52:12',
                'updated_at' => '2021-08-18 12:52:12',
            ),
            3 => 
            array (
                'id' => 1504,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:52:36',
                'updated_at' => '2021-08-18 12:52:36',
            ),
            4 => 
            array (
                'id' => 1505,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:52:36',
                'updated_at' => '2021-08-18 12:52:36',
            ),
            5 => 
            array (
                'id' => 1506,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الخرج من لوحة التحكم',
                'en_action' => 'Logout from admin dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:52:41',
                'updated_at' => '2021-08-18 12:52:41',
            ),
            6 => 
            array (
                'id' => 1507,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:52:52',
                'updated_at' => '2021-08-18 12:52:52',
            ),
            7 => 
            array (
                'id' => 1508,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:52:52',
                'updated_at' => '2021-08-18 12:52:52',
            ),
            8 => 
            array (
                'id' => 1509,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 12:53:04',
                'updated_at' => '2021-08-18 12:53:04',
            ),
            9 => 
            array (
                'id' => 1510,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 14:23:49',
                'updated_at' => '2021-08-18 14:23:49',
            ),
            10 => 
            array (
                'id' => 1511,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالإعلانات رخا',
                'en_action' => 'Add new ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:03:43',
                'updated_at' => '2021-08-18 15:03:43',
            ),
            11 => 
            array (
                'id' => 1512,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:03:59',
                'updated_at' => '2021-08-18 15:03:59',
            ),
            12 => 
            array (
                'id' => 1513,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:05:15',
                'updated_at' => '2021-08-18 15:05:15',
            ),
            13 => 
            array (
                'id' => 1514,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:05:47',
                'updated_at' => '2021-08-18 15:05:47',
            ),
            14 => 
            array (
                'id' => 1515,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:06:29',
                'updated_at' => '2021-08-18 15:06:29',
            ),
            15 => 
            array (
                'id' => 1516,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات رخا',
                'en_action' => 'Edit current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:08:16',
                'updated_at' => '2021-08-18 15:08:16',
            ),
            16 => 
            array (
                'id' => 1517,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:08:16',
                'updated_at' => '2021-08-18 15:08:16',
            ),
            17 => 
            array (
                'id' => 1518,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : رخا',
                'en_action' => 'Edit Activation of ads : rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:08:29',
                'updated_at' => '2021-08-18 15:08:29',
            ),
            18 => 
            array (
                'id' => 1519,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:08:32',
                'updated_at' => '2021-08-18 15:08:32',
            ),
            19 => 
            array (
                'id' => 1520,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات رخا',
                'en_action' => 'Edit current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:08:42',
                'updated_at' => '2021-08-18 15:08:42',
            ),
            20 => 
            array (
                'id' => 1521,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:08:42',
                'updated_at' => '2021-08-18 15:08:42',
            ),
            21 => 
            array (
                'id' => 1522,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:09:44',
                'updated_at' => '2021-08-18 15:09:44',
            ),
            22 => 
            array (
                'id' => 1523,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:10:29',
                'updated_at' => '2021-08-18 15:10:29',
            ),
            23 => 
            array (
                'id' => 1524,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات رخا',
                'en_action' => 'Edit current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:11:42',
                'updated_at' => '2021-08-18 15:11:42',
            ),
            24 => 
            array (
                'id' => 1525,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:11:42',
                'updated_at' => '2021-08-18 15:11:42',
            ),
            25 => 
            array (
                'id' => 1526,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:11:53',
                'updated_at' => '2021-08-18 15:11:53',
            ),
            26 => 
            array (
                'id' => 1527,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات رخا',
                'en_action' => 'Edit current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:12:08',
                'updated_at' => '2021-08-18 15:12:08',
            ),
            27 => 
            array (
                'id' => 1528,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:12:08',
                'updated_at' => '2021-08-18 15:12:08',
            ),
            28 => 
            array (
                'id' => 1529,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:13:21',
                'updated_at' => '2021-08-18 15:13:21',
            ),
            29 => 
            array (
                'id' => 1530,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات رخا',
                'en_action' => 'Edit current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:13:29',
                'updated_at' => '2021-08-18 15:13:29',
            ),
            30 => 
            array (
                'id' => 1531,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:13:30',
                'updated_at' => '2021-08-18 15:13:30',
            ),
            31 => 
            array (
                'id' => 1532,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:36:37',
                'updated_at' => '2021-08-18 15:36:37',
            ),
            32 => 
            array (
                'id' => 1533,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات رخا',
                'en_action' => 'Edit current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:37:15',
                'updated_at' => '2021-08-18 15:37:15',
            ),
            33 => 
            array (
                'id' => 1534,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:37:15',
                'updated_at' => '2021-08-18 15:37:15',
            ),
            34 => 
            array (
                'id' => 1535,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإعلانات رخا',
                'en_action' => 'Edit current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:39:38',
                'updated_at' => '2021-08-18 15:39:38',
            ),
            35 => 
            array (
                'id' => 1536,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:39:38',
                'updated_at' => '2021-08-18 15:39:38',
            ),
            36 => 
            array (
                'id' => 1537,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:44:19',
                'updated_at' => '2021-08-18 15:44:19',
            ),
            37 => 
            array (
                'id' => 1538,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:51:30',
                'updated_at' => '2021-08-18 15:51:30',
            ),
            38 => 
            array (
                'id' => 1539,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بالإعلانات رخا',
                'en_action' => 'Delete current ads rakha',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:51:37',
                'updated_at' => '2021-08-18 15:51:37',
            ),
            39 => 
            array (
                'id' => 1540,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:51:37',
                'updated_at' => '2021-08-18 15:51:37',
            ),
            40 => 
            array (
                'id' => 1541,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:51:41',
                'updated_at' => '2021-08-18 15:51:41',
            ),
            41 => 
            array (
                'id' => 1542,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 15:57:47',
                'updated_at' => '2021-08-18 15:57:47',
            ),
            42 => 
            array (
                'id' => 1543,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:01:34',
                'updated_at' => '2021-08-18 16:01:34',
            ),
            43 => 
            array (
                'id' => 1544,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة أعضاء التطبيقات',
                'en_action' => 'Open application users page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:04:37',
                'updated_at' => '2021-08-18 16:04:37',
            ),
            44 => 
            array (
                'id' => 1545,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المشرفين',
                'en_action' => 'Open supervisors page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:04:47',
                'updated_at' => '2021-08-18 16:04:47',
            ),
            45 => 
            array (
                'id' => 1546,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:04:52',
                'updated_at' => '2021-08-18 16:04:52',
            ),
            46 => 
            array (
                'id' => 1547,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:04:57',
                'updated_at' => '2021-08-18 16:04:57',
            ),
            47 => 
            array (
                'id' => 1548,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة بنك جديد Kirsten Frye',
                'en_action' => 'Add new bank Rudyard Hamilton',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:05:07',
                'updated_at' => '2021-08-18 16:05:07',
            ),
            48 => 
            array (
                'id' => 1549,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:05:09',
                'updated_at' => '2021-08-18 16:05:09',
            ),
            49 => 
            array (
                'id' => 1550,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:06:44',
                'updated_at' => '2021-08-18 16:06:44',
            ),
            50 => 
            array (
                'id' => 1551,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:07:08',
                'updated_at' => '2021-08-18 16:07:08',
            ),
            51 => 
            array (
                'id' => 1552,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:07:13',
                'updated_at' => '2021-08-18 16:07:13',
            ),
            52 => 
            array (
                'id' => 1553,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:07:25',
                'updated_at' => '2021-08-18 16:07:25',
            ),
            53 => 
            array (
                'id' => 1554,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عمليات النظام',
                'en_action' => 'open log page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:27:41',
                'updated_at' => '2021-08-18 16:27:41',
            ),
            54 => 
            array (
                'id' => 1555,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:30:01',
                'updated_at' => '2021-08-18 16:30:01',
            ),
            55 => 
            array (
                'id' => 1556,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:31:55',
                'updated_at' => '2021-08-18 16:31:55',
            ),
            56 => 
            array (
                'id' => 1557,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:32:15',
                'updated_at' => '2021-08-18 16:32:15',
            ),
            57 => 
            array (
                'id' => 1558,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 16:32:25',
                'updated_at' => '2021-08-18 16:32:25',
            ),
            58 => 
            array (
                'id' => 1559,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:19:16',
                'updated_at' => '2021-08-18 17:19:16',
            ),
            59 => 
            array (
                'id' => 1560,
                'user_id' => '1',
                'ar_action' => 'قام بحذف بنك حالي بنك الكويت الوطني',
                'en_action' => 'Delete current bank National Bank Of Kuwait',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:20:22',
                'updated_at' => '2021-08-18 17:20:22',
            ),
            60 => 
            array (
                'id' => 1561,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:20:22',
                'updated_at' => '2021-08-18 17:20:22',
            ),
            61 => 
            array (
                'id' => 1562,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:20:40',
                'updated_at' => '2021-08-18 17:20:40',
            ),
            62 => 
            array (
                'id' => 1563,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة بنك جديد Karleigh Hardin',
                'en_action' => 'Add new bank Kameko Black',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:20:50',
                'updated_at' => '2021-08-18 17:20:50',
            ),
            63 => 
            array (
                'id' => 1564,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:20:53',
                'updated_at' => '2021-08-18 17:20:53',
            ),
            64 => 
            array (
                'id' => 1565,
                'user_id' => '1',
                'ar_action' => 'قام بحذف بنك حالي Karleigh Hardin',
                'en_action' => 'Delete current bank Kameko Black',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:21:04',
                'updated_at' => '2021-08-18 17:21:04',
            ),
            65 => 
            array (
                'id' => 1566,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:21:04',
                'updated_at' => '2021-08-18 17:21:04',
            ),
            66 => 
            array (
                'id' => 1567,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:21:11',
                'updated_at' => '2021-08-18 17:21:11',
            ),
            67 => 
            array (
                'id' => 1568,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة البنوك',
                'en_action' => 'Open banks page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:40:45',
                'updated_at' => '2021-08-18 17:40:45',
            ),
            68 => 
            array (
                'id' => 1569,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:51:39',
                'updated_at' => '2021-08-18 17:51:39',
            ),
            69 => 
            array (
                'id' => 1570,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:52:29',
                'updated_at' => '2021-08-18 17:52:29',
            ),
            70 => 
            array (
                'id' => 1571,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:53:57',
                'updated_at' => '2021-08-18 17:53:57',
            ),
            71 => 
            array (
                'id' => 1572,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:54:12',
                'updated_at' => '2021-08-18 17:54:12',
            ),
            72 => 
            array (
                'id' => 1573,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة مجموعة صلاحيات مشرفين جديدة الإرشادات',
                'en_action' => 'Add new supervisors powers group tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:56:52',
                'updated_at' => '2021-08-18 17:56:52',
            ),
            73 => 
            array (
                'id' => 1574,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:57:29',
                'updated_at' => '2021-08-18 17:57:29',
            ),
            74 => 
            array (
                'id' => 1575,
                'user_id' => '1',
                'ar_action' => 'قام بحذف مجموعة صلاحيات مشرفين حالية الإرشادات',
                'en_action' => 'Delete current supervisors powers group tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:57:55',
                'updated_at' => '2021-08-18 17:57:55',
            ),
            75 => 
            array (
                'id' => 1576,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:57:55',
                'updated_at' => '2021-08-18 17:57:55',
            ),
            76 => 
            array (
                'id' => 1577,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 17:57:58',
                'updated_at' => '2021-08-18 17:57:58',
            ),
            77 => 
            array (
                'id' => 1578,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:13:12',
                'updated_at' => '2021-08-18 18:13:12',
            ),
            78 => 
            array (
                'id' => 1579,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:13:12',
                'updated_at' => '2021-08-18 18:13:12',
            ),
            79 => 
            array (
                'id' => 1580,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:14:06',
                'updated_at' => '2021-08-18 18:14:06',
            ),
            80 => 
            array (
                'id' => 1581,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:14:07',
                'updated_at' => '2021-08-18 18:14:07',
            ),
            81 => 
            array (
                'id' => 1582,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:14:11',
                'updated_at' => '2021-08-18 18:14:11',
            ),
            82 => 
            array (
                'id' => 1583,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:15:31',
                'updated_at' => '2021-08-18 18:15:31',
            ),
            83 => 
            array (
                'id' => 1584,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:15:54',
                'updated_at' => '2021-08-18 18:15:54',
            ),
            84 => 
            array (
                'id' => 1585,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:17:57',
                'updated_at' => '2021-08-18 18:17:57',
            ),
            85 => 
            array (
                'id' => 1586,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:18:46',
                'updated_at' => '2021-08-18 18:18:46',
            ),
            86 => 
            array (
                'id' => 1587,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:18:53',
                'updated_at' => '2021-08-18 18:18:53',
            ),
            87 => 
            array (
                'id' => 1588,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:19:48',
                'updated_at' => '2021-08-18 18:19:48',
            ),
            88 => 
            array (
                'id' => 1589,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:20:39',
                'updated_at' => '2021-08-18 18:20:39',
            ),
            89 => 
            array (
                'id' => 1590,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:21:05',
                'updated_at' => '2021-08-18 18:21:05',
            ),
            90 => 
            array (
                'id' => 1591,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:22:42',
                'updated_at' => '2021-08-18 18:22:42',
            ),
            91 => 
            array (
                'id' => 1592,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:25:47',
                'updated_at' => '2021-08-18 18:25:47',
            ),
            92 => 
            array (
                'id' => 1593,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:26:42',
                'updated_at' => '2021-08-18 18:26:42',
            ),
            93 => 
            array (
                'id' => 1594,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:26:59',
                'updated_at' => '2021-08-18 18:26:59',
            ),
            94 => 
            array (
                'id' => 1595,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:26:59',
                'updated_at' => '2021-08-18 18:26:59',
            ),
            95 => 
            array (
                'id' => 1596,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:32:57',
                'updated_at' => '2021-08-18 18:32:57',
            ),
            96 => 
            array (
                'id' => 1597,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-18 18:33:37',
                'updated_at' => '2021-08-18 18:33:37',
            ),
            97 => 
            array (
                'id' => 1598,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:05:51',
                'updated_at' => '2021-08-19 10:05:51',
            ),
            98 => 
            array (
                'id' => 1599,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:05:57',
                'updated_at' => '2021-08-19 10:05:57',
            ),
            99 => 
            array (
                'id' => 1600,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:07:01',
                'updated_at' => '2021-08-19 10:07:01',
            ),
            100 => 
            array (
                'id' => 1601,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:10:51',
                'updated_at' => '2021-08-19 10:10:51',
            ),
            101 => 
            array (
                'id' => 1602,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:11:10',
                'updated_at' => '2021-08-19 10:11:10',
            ),
            102 => 
            array (
                'id' => 1603,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:11:23',
                'updated_at' => '2021-08-19 10:11:23',
            ),
            103 => 
            array (
                'id' => 1604,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:11:31',
                'updated_at' => '2021-08-19 10:11:31',
            ),
            104 => 
            array (
                'id' => 1605,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:12:44',
                'updated_at' => '2021-08-19 10:12:44',
            ),
            105 => 
            array (
                'id' => 1606,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:12:56',
                'updated_at' => '2021-08-19 10:12:56',
            ),
            106 => 
            array (
                'id' => 1607,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:13:01',
                'updated_at' => '2021-08-19 10:13:01',
            ),
            107 => 
            array (
                'id' => 1608,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:13:08',
                'updated_at' => '2021-08-19 10:13:08',
            ),
            108 => 
            array (
                'id' => 1609,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:13:25',
                'updated_at' => '2021-08-19 10:13:25',
            ),
            109 => 
            array (
                'id' => 1610,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:13:58',
                'updated_at' => '2021-08-19 10:13:58',
            ),
            110 => 
            array (
                'id' => 1611,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:14:04',
                'updated_at' => '2021-08-19 10:14:04',
            ),
            111 => 
            array (
                'id' => 1612,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان تطبيق',
                'en_action' => 'Edit Activation of ads : Application Ads',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:14:07',
                'updated_at' => '2021-08-19 10:14:07',
            ),
            112 => 
            array (
                'id' => 1613,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:16:58',
                'updated_at' => '2021-08-19 10:16:58',
            ),
            113 => 
            array (
                'id' => 1614,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:17:06',
                'updated_at' => '2021-08-19 10:17:06',
            ),
            114 => 
            array (
                'id' => 1615,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:19:40',
                'updated_at' => '2021-08-19 10:19:40',
            ),
            115 => 
            array (
                'id' => 1616,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان تطبيق',
                'en_action' => 'Edit Activation of tutorials : Application tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:19:44',
                'updated_at' => '2021-08-19 10:19:44',
            ),
            116 => 
            array (
                'id' => 1617,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:19:48',
                'updated_at' => '2021-08-19 10:19:48',
            ),
            117 => 
            array (
                'id' => 1618,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان تطبيق',
                'en_action' => 'Edit Activation of tutorials : Application tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:19:50',
                'updated_at' => '2021-08-19 10:19:50',
            ),
            118 => 
            array (
                'id' => 1619,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:20:00',
                'updated_at' => '2021-08-19 10:20:00',
            ),
            119 => 
            array (
                'id' => 1620,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإرشادات ',
                'en_action' => 'Edit current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:29:22',
                'updated_at' => '2021-08-19 10:29:22',
            ),
            120 => 
            array (
                'id' => 1621,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:29:22',
                'updated_at' => '2021-08-19 10:29:22',
            ),
            121 => 
            array (
                'id' => 1622,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإرشادات ',
                'en_action' => 'Edit current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:29:48',
                'updated_at' => '2021-08-19 10:29:48',
            ),
            122 => 
            array (
                'id' => 1623,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:29:49',
                'updated_at' => '2021-08-19 10:29:49',
            ),
            123 => 
            array (
                'id' => 1624,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإرشادات ',
                'en_action' => 'Edit current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:30:28',
                'updated_at' => '2021-08-19 10:30:28',
            ),
            124 => 
            array (
                'id' => 1625,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:30:29',
                'updated_at' => '2021-08-19 10:30:29',
            ),
            125 => 
            array (
                'id' => 1626,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإرشادات ',
                'en_action' => 'Edit current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:31:12',
                'updated_at' => '2021-08-19 10:31:12',
            ),
            126 => 
            array (
                'id' => 1627,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:31:12',
                'updated_at' => '2021-08-19 10:31:12',
            ),
            127 => 
            array (
                'id' => 1628,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:31:22',
                'updated_at' => '2021-08-19 10:31:22',
            ),
            128 => 
            array (
                'id' => 1629,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بالإرشادات ',
                'en_action' => 'Delete current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:31:27',
                'updated_at' => '2021-08-19 10:31:27',
            ),
            129 => 
            array (
                'id' => 1630,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:31:28',
                'updated_at' => '2021-08-19 10:31:28',
            ),
            130 => 
            array (
                'id' => 1631,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:31:33',
                'updated_at' => '2021-08-19 10:31:33',
            ),
            131 => 
            array (
                'id' => 1632,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:33:17',
                'updated_at' => '2021-08-19 10:33:17',
            ),
            132 => 
            array (
                'id' => 1633,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:33:36',
                'updated_at' => '2021-08-19 10:33:36',
            ),
            133 => 
            array (
                'id' => 1634,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان تطبيق تيست',
                'en_action' => 'Edit Activation of tutorials : test Application tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:33:40',
                'updated_at' => '2021-08-19 10:33:40',
            ),
            134 => 
            array (
                'id' => 1635,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:33:43',
                'updated_at' => '2021-08-19 10:33:43',
            ),
            135 => 
            array (
                'id' => 1636,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان تطبيق تيست',
                'en_action' => 'Edit Activation of tutorials : test Application tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:33:45',
                'updated_at' => '2021-08-19 10:33:45',
            ),
            136 => 
            array (
                'id' => 1637,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : اعلان تطبيق تيست',
                'en_action' => 'Edit Activation of tutorials : test Application tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:33:47',
                'updated_at' => '2021-08-19 10:33:47',
            ),
            137 => 
            array (
                'id' => 1638,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:33:49',
                'updated_at' => '2021-08-19 10:33:49',
            ),
            138 => 
            array (
                'id' => 1639,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:34:20',
                'updated_at' => '2021-08-19 10:34:20',
            ),
            139 => 
            array (
                'id' => 1640,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:54:55',
                'updated_at' => '2021-08-19 10:54:55',
            ),
            140 => 
            array (
                'id' => 1641,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:54:55',
                'updated_at' => '2021-08-19 10:54:55',
            ),
            141 => 
            array (
                'id' => 1642,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:56:58',
                'updated_at' => '2021-08-19 10:56:58',
            ),
            142 => 
            array (
                'id' => 1643,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:57:07',
                'updated_at' => '2021-08-19 10:57:07',
            ),
            143 => 
            array (
                'id' => 1644,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:57:26',
                'updated_at' => '2021-08-19 10:57:26',
            ),
            144 => 
            array (
                'id' => 1645,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 10:58:00',
                'updated_at' => '2021-08-19 10:58:00',
            ),
            145 => 
            array (
                'id' => 1646,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالإرشادات ',
                'en_action' => 'Add new tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:01:33',
                'updated_at' => '2021-08-19 11:01:33',
            ),
            146 => 
            array (
                'id' => 1647,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:01:36',
                'updated_at' => '2021-08-19 11:01:36',
            ),
            147 => 
            array (
                'id' => 1648,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:07:37',
                'updated_at' => '2021-08-19 11:07:37',
            ),
            148 => 
            array (
                'id' => 1649,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:13:19',
                'updated_at' => '2021-08-19 11:13:19',
            ),
            149 => 
            array (
                'id' => 1650,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بالإرشادات ',
                'en_action' => 'Delete current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:14:09',
                'updated_at' => '2021-08-19 11:14:09',
            ),
            150 => 
            array (
                'id' => 1651,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:14:10',
                'updated_at' => '2021-08-19 11:14:10',
            ),
            151 => 
            array (
                'id' => 1652,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:14:12',
                'updated_at' => '2021-08-19 11:14:12',
            ),
            152 => 
            array (
                'id' => 1653,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الخرج من لوحة التحكم',
                'en_action' => 'Logout from admin dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:14:23',
                'updated_at' => '2021-08-19 11:14:23',
            ),
            153 => 
            array (
                'id' => 1654,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:14:39',
                'updated_at' => '2021-08-19 11:14:39',
            ),
            154 => 
            array (
                'id' => 1655,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:14:39',
                'updated_at' => '2021-08-19 11:14:39',
            ),
            155 => 
            array (
                'id' => 1656,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:14:46',
                'updated_at' => '2021-08-19 11:14:46',
            ),
            156 => 
            array (
                'id' => 1657,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:16:18',
                'updated_at' => '2021-08-19 11:16:18',
            ),
            157 => 
            array (
                'id' => 1658,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:16:34',
                'updated_at' => '2021-08-19 11:16:34',
            ),
            158 => 
            array (
                'id' => 1659,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:17:57',
                'updated_at' => '2021-08-19 11:17:57',
            ),
            159 => 
            array (
                'id' => 1660,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:18:04',
                'updated_at' => '2021-08-19 11:18:04',
            ),
            160 => 
            array (
                'id' => 1661,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:18:22',
                'updated_at' => '2021-08-19 11:18:22',
            ),
            161 => 
            array (
                'id' => 1662,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:18:26',
                'updated_at' => '2021-08-19 11:18:26',
            ),
            162 => 
            array (
                'id' => 1663,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:18:45',
                'updated_at' => '2021-08-19 11:18:45',
            ),
            163 => 
            array (
                'id' => 1664,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:19:24',
                'updated_at' => '2021-08-19 11:19:24',
            ),
            164 => 
            array (
                'id' => 1665,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:33:07',
                'updated_at' => '2021-08-19 11:33:07',
            ),
            165 => 
            array (
                'id' => 1666,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:40:56',
                'updated_at' => '2021-08-19 11:40:56',
            ),
            166 => 
            array (
                'id' => 1667,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 11:41:10',
                'updated_at' => '2021-08-19 11:41:10',
            ),
            167 => 
            array (
                'id' => 1668,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور تجربة',
                'en_action' => 'Edit current slider test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:16:53',
                'updated_at' => '2021-08-19 12:16:53',
            ),
            168 => 
            array (
                'id' => 1669,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:16:53',
                'updated_at' => '2021-08-19 12:16:53',
            ),
            169 => 
            array (
                'id' => 1670,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور تجربة',
                'en_action' => 'Edit current slider test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:19:46',
                'updated_at' => '2021-08-19 12:19:46',
            ),
            170 => 
            array (
                'id' => 1671,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:19:46',
                'updated_at' => '2021-08-19 12:19:46',
            ),
            171 => 
            array (
                'id' => 1672,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور تجربة تجربة',
                'en_action' => 'Edit current slider test test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:21:00',
                'updated_at' => '2021-08-19 12:21:00',
            ),
            172 => 
            array (
                'id' => 1673,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:21:01',
                'updated_at' => '2021-08-19 12:21:01',
            ),
            173 => 
            array (
                'id' => 1674,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور تجربة تجربة',
                'en_action' => 'Edit current slider test test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:22:25',
                'updated_at' => '2021-08-19 12:22:25',
            ),
            174 => 
            array (
                'id' => 1675,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:22:25',
                'updated_at' => '2021-08-19 12:22:25',
            ),
            175 => 
            array (
                'id' => 1676,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور تجربة تجربة',
                'en_action' => 'Edit current slider test test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:22:58',
                'updated_at' => '2021-08-19 12:22:58',
            ),
            176 => 
            array (
                'id' => 1677,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:22:58',
                'updated_at' => '2021-08-19 12:22:58',
            ),
            177 => 
            array (
                'id' => 1678,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:23:06',
                'updated_at' => '2021-08-19 12:23:06',
            ),
            178 => 
            array (
                'id' => 1679,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:23:51',
                'updated_at' => '2021-08-19 12:23:51',
            ),
            179 => 
            array (
                'id' => 1680,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:24:34',
                'updated_at' => '2021-08-19 12:24:34',
            ),
            180 => 
            array (
                'id' => 1681,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:24:58',
                'updated_at' => '2021-08-19 12:24:58',
            ),
            181 => 
            array (
                'id' => 1682,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:25:15',
                'updated_at' => '2021-08-19 12:25:15',
            ),
            182 => 
            array (
                'id' => 1683,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:25:34',
                'updated_at' => '2021-08-19 12:25:34',
            ),
            183 => 
            array (
                'id' => 1684,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:26:04',
                'updated_at' => '2021-08-19 12:26:04',
            ),
            184 => 
            array (
                'id' => 1685,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:26:13',
                'updated_at' => '2021-08-19 12:26:13',
            ),
            185 => 
            array (
                'id' => 1686,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:26:25',
                'updated_at' => '2021-08-19 12:26:25',
            ),
            186 => 
            array (
                'id' => 1687,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:26:34',
                'updated_at' => '2021-08-19 12:26:34',
            ),
            187 => 
            array (
                'id' => 1688,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:26:43',
                'updated_at' => '2021-08-19 12:26:43',
            ),
            188 => 
            array (
                'id' => 1689,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:26:58',
                'updated_at' => '2021-08-19 12:26:58',
            ),
            189 => 
            array (
                'id' => 1690,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:27:11',
                'updated_at' => '2021-08-19 12:27:11',
            ),
            190 => 
            array (
                'id' => 1691,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:27:17',
                'updated_at' => '2021-08-19 12:27:17',
            ),
            191 => 
            array (
                'id' => 1692,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:27:25',
                'updated_at' => '2021-08-19 12:27:25',
            ),
            192 => 
            array (
                'id' => 1693,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:27:27',
                'updated_at' => '2021-08-19 12:27:27',
            ),
            193 => 
            array (
                'id' => 1694,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:27:34',
                'updated_at' => '2021-08-19 12:27:34',
            ),
            194 => 
            array (
                'id' => 1695,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:27:45',
                'updated_at' => '2021-08-19 12:27:45',
            ),
            195 => 
            array (
                'id' => 1696,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بعارض الصور تجربة تجربة',
                'en_action' => 'Edit current slider test test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:28:03',
                'updated_at' => '2021-08-19 12:28:03',
            ),
            196 => 
            array (
                'id' => 1697,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:28:04',
                'updated_at' => '2021-08-19 12:28:04',
            ),
            197 => 
            array (
                'id' => 1698,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بعارض الصور ',
                'en_action' => 'Delete current slider ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:28:18',
                'updated_at' => '2021-08-19 12:28:18',
            ),
            198 => 
            array (
                'id' => 1699,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:28:18',
                'updated_at' => '2021-08-19 12:28:18',
            ),
            199 => 
            array (
                'id' => 1700,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:28:21',
                'updated_at' => '2021-08-19 12:28:21',
            ),
            200 => 
            array (
                'id' => 1701,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:28:32',
                'updated_at' => '2021-08-19 12:28:32',
            ),
            201 => 
            array (
                'id' => 1702,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:29:57',
                'updated_at' => '2021-08-19 12:29:57',
            ),
            202 => 
            array (
                'id' => 1703,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:31:17',
                'updated_at' => '2021-08-19 12:31:17',
            ),
            203 => 
            array (
                'id' => 1704,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:32:12',
                'updated_at' => '2021-08-19 12:32:12',
            ),
            204 => 
            array (
                'id' => 1705,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:32:16',
                'updated_at' => '2021-08-19 12:32:16',
            ),
            205 => 
            array (
                'id' => 1706,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بعارض الصور تيست',
                'en_action' => 'Add new slider test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:12',
                'updated_at' => '2021-08-19 12:33:12',
            ),
            206 => 
            array (
                'id' => 1707,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:15',
                'updated_at' => '2021-08-19 12:33:15',
            ),
            207 => 
            array (
                'id' => 1708,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تيست',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:30',
                'updated_at' => '2021-08-19 12:33:30',
            ),
            208 => 
            array (
                'id' => 1709,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:33',
                'updated_at' => '2021-08-19 12:33:33',
            ),
            209 => 
            array (
                'id' => 1710,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة تجربة',
                'en_action' => 'Edit Activation of ads : test test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:36',
                'updated_at' => '2021-08-19 12:33:36',
            ),
            210 => 
            array (
                'id' => 1711,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:38',
                'updated_at' => '2021-08-19 12:33:38',
            ),
            211 => 
            array (
                'id' => 1712,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تجربة تجربة',
                'en_action' => 'Edit Activation of ads : test test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:41',
                'updated_at' => '2021-08-19 12:33:41',
            ),
            212 => 
            array (
                'id' => 1713,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:33:43',
                'updated_at' => '2021-08-19 12:33:43',
            ),
            213 => 
            array (
                'id' => 1714,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:35:59',
                'updated_at' => '2021-08-19 12:35:59',
            ),
            214 => 
            array (
                'id' => 1715,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:37:01',
                'updated_at' => '2021-08-19 12:37:01',
            ),
            215 => 
            array (
                'id' => 1716,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:37:18',
                'updated_at' => '2021-08-19 12:37:18',
            ),
            216 => 
            array (
                'id' => 1717,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:37:39',
                'updated_at' => '2021-08-19 12:37:39',
            ),
            217 => 
            array (
                'id' => 1718,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:37:42',
                'updated_at' => '2021-08-19 12:37:42',
            ),
            218 => 
            array (
                'id' => 1719,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:37:44',
                'updated_at' => '2021-08-19 12:37:44',
            ),
            219 => 
            array (
                'id' => 1720,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:37:55',
                'updated_at' => '2021-08-19 12:37:55',
            ),
            220 => 
            array (
                'id' => 1721,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:38:11',
                'updated_at' => '2021-08-19 12:38:11',
            ),
            221 => 
            array (
                'id' => 1722,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:38:15',
                'updated_at' => '2021-08-19 12:38:15',
            ),
            222 => 
            array (
                'id' => 1723,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:38:35',
                'updated_at' => '2021-08-19 12:38:35',
            ),
            223 => 
            array (
                'id' => 1724,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:38:59',
                'updated_at' => '2021-08-19 12:38:59',
            ),
            224 => 
            array (
                'id' => 1725,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:39:47',
                'updated_at' => '2021-08-19 12:39:47',
            ),
            225 => 
            array (
                'id' => 1726,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:40:20',
                'updated_at' => '2021-08-19 12:40:20',
            ),
            226 => 
            array (
                'id' => 1727,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:40:23',
                'updated_at' => '2021-08-19 12:40:23',
            ),
            227 => 
            array (
                'id' => 1728,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:40:29',
                'updated_at' => '2021-08-19 12:40:29',
            ),
            228 => 
            array (
                'id' => 1729,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:40:39',
                'updated_at' => '2021-08-19 12:40:39',
            ),
            229 => 
            array (
                'id' => 1730,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:40:53',
                'updated_at' => '2021-08-19 12:40:53',
            ),
            230 => 
            array (
                'id' => 1731,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:41:25',
                'updated_at' => '2021-08-19 12:41:25',
            ),
            231 => 
            array (
                'id' => 1732,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:41:35',
                'updated_at' => '2021-08-19 12:41:35',
            ),
            232 => 
            array (
                'id' => 1733,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:41:41',
                'updated_at' => '2021-08-19 12:41:41',
            ),
            233 => 
            array (
                'id' => 1734,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:41:44',
                'updated_at' => '2021-08-19 12:41:44',
            ),
            234 => 
            array (
                'id' => 1735,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:41:52',
                'updated_at' => '2021-08-19 12:41:52',
            ),
            235 => 
            array (
                'id' => 1736,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:41:56',
                'updated_at' => '2021-08-19 12:41:56',
            ),
            236 => 
            array (
                'id' => 1737,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:42:06',
                'updated_at' => '2021-08-19 12:42:06',
            ),
            237 => 
            array (
                'id' => 1738,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:42:15',
                'updated_at' => '2021-08-19 12:42:15',
            ),
            238 => 
            array (
                'id' => 1739,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:42:56',
                'updated_at' => '2021-08-19 12:42:56',
            ),
            239 => 
            array (
                'id' => 1740,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:43:10',
                'updated_at' => '2021-08-19 12:43:10',
            ),
            240 => 
            array (
                'id' => 1741,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:43:32',
                'updated_at' => '2021-08-19 12:43:32',
            ),
            241 => 
            array (
                'id' => 1742,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:46:18',
                'updated_at' => '2021-08-19 12:46:18',
            ),
            242 => 
            array (
                'id' => 1743,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:46:37',
                'updated_at' => '2021-08-19 12:46:37',
            ),
            243 => 
            array (
                'id' => 1744,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:46:50',
                'updated_at' => '2021-08-19 12:46:50',
            ),
            244 => 
            array (
                'id' => 1745,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:47:32',
                'updated_at' => '2021-08-19 12:47:32',
            ),
            245 => 
            array (
                'id' => 1746,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:47:40',
                'updated_at' => '2021-08-19 12:47:40',
            ),
            246 => 
            array (
                'id' => 1747,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:47:45',
                'updated_at' => '2021-08-19 12:47:45',
            ),
            247 => 
            array (
                'id' => 1748,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:47:56',
                'updated_at' => '2021-08-19 12:47:56',
            ),
            248 => 
            array (
                'id' => 1749,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:48:09',
                'updated_at' => '2021-08-19 12:48:09',
            ),
            249 => 
            array (
                'id' => 1750,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:48:20',
                'updated_at' => '2021-08-19 12:48:20',
            ),
            250 => 
            array (
                'id' => 1751,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:48:25',
                'updated_at' => '2021-08-19 12:48:25',
            ),
            251 => 
            array (
                'id' => 1752,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:48:56',
                'updated_at' => '2021-08-19 12:48:56',
            ),
            252 => 
            array (
                'id' => 1753,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:49:11',
                'updated_at' => '2021-08-19 12:49:11',
            ),
            253 => 
            array (
                'id' => 1754,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:49:19',
                'updated_at' => '2021-08-19 12:49:19',
            ),
            254 => 
            array (
                'id' => 1755,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:49:24',
                'updated_at' => '2021-08-19 12:49:24',
            ),
            255 => 
            array (
                'id' => 1756,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:49:30',
                'updated_at' => '2021-08-19 12:49:30',
            ),
            256 => 
            array (
                'id' => 1757,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:49:48',
                'updated_at' => '2021-08-19 12:49:48',
            ),
            257 => 
            array (
                'id' => 1758,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:50:00',
                'updated_at' => '2021-08-19 12:50:00',
            ),
            258 => 
            array (
                'id' => 1759,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:50:03',
                'updated_at' => '2021-08-19 12:50:03',
            ),
            259 => 
            array (
                'id' => 1760,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:50:08',
                'updated_at' => '2021-08-19 12:50:08',
            ),
            260 => 
            array (
                'id' => 1761,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:50:16',
                'updated_at' => '2021-08-19 12:50:16',
            ),
            261 => 
            array (
                'id' => 1762,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:50:50',
                'updated_at' => '2021-08-19 12:50:50',
            ),
            262 => 
            array (
                'id' => 1763,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:51:18',
                'updated_at' => '2021-08-19 12:51:18',
            ),
            263 => 
            array (
                'id' => 1764,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:51:38',
                'updated_at' => '2021-08-19 12:51:38',
            ),
            264 => 
            array (
                'id' => 1765,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:51:53',
                'updated_at' => '2021-08-19 12:51:53',
            ),
            265 => 
            array (
                'id' => 1766,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:52:28',
                'updated_at' => '2021-08-19 12:52:28',
            ),
            266 => 
            array (
                'id' => 1767,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : تيست',
                'en_action' => 'Edit Activation of ads : test',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:52:43',
                'updated_at' => '2021-08-19 12:52:43',
            ),
            267 => 
            array (
                'id' => 1768,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 12:52:45',
                'updated_at' => '2021-08-19 12:52:45',
            ),
            268 => 
            array (
                'id' => 1769,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 13:38:03',
                'updated_at' => '2021-08-19 13:38:03',
            ),
            269 => 
            array (
                'id' => 1770,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة عارض الصور',
                'en_action' => 'Open slider page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 13:44:56',
                'updated_at' => '2021-08-19 13:44:56',
            ),
            270 => 
            array (
                'id' => 1771,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 13:45:13',
                'updated_at' => '2021-08-19 13:45:13',
            ),
            271 => 
            array (
                'id' => 1772,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 13:48:03',
                'updated_at' => '2021-08-19 13:48:03',
            ),
            272 => 
            array (
                'id' => 1773,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 13:48:03',
                'updated_at' => '2021-08-19 13:48:03',
            ),
            273 => 
            array (
                'id' => 1774,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 13:49:11',
                'updated_at' => '2021-08-19 13:49:11',
            ),
            274 => 
            array (
                'id' => 1775,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 14:48:22',
                'updated_at' => '2021-08-19 14:48:22',
            ),
            275 => 
            array (
                'id' => 1776,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 14:56:32',
                'updated_at' => '2021-08-19 14:56:32',
            ),
            276 => 
            array (
                'id' => 1777,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 14:56:47',
                'updated_at' => '2021-08-19 14:56:47',
            ),
            277 => 
            array (
                'id' => 1778,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 14:59:53',
                'updated_at' => '2021-08-19 14:59:53',
            ),
            278 => 
            array (
                'id' => 1779,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : كارفور',
                'en_action' => 'Edit Activation of mall : Karfour',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 14:59:55',
                'updated_at' => '2021-08-19 14:59:55',
            ),
            279 => 
            array (
                'id' => 1780,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 14:59:58',
                'updated_at' => '2021-08-19 14:59:58',
            ),
            280 => 
            array (
                'id' => 1781,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : كارفور',
                'en_action' => 'Edit Activation of mall : Karfour',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:00:00',
                'updated_at' => '2021-08-19 15:00:00',
            ),
            281 => 
            array (
                'id' => 1782,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:27:35',
                'updated_at' => '2021-08-19 15:27:35',
            ),
            282 => 
            array (
                'id' => 1783,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:27:48',
                'updated_at' => '2021-08-19 15:27:48',
            ),
            283 => 
            array (
                'id' => 1784,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:28:04',
                'updated_at' => '2021-08-19 15:28:04',
            ),
            284 => 
            array (
                'id' => 1785,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:31:47',
                'updated_at' => '2021-08-19 15:31:47',
            ),
            285 => 
            array (
                'id' => 1786,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإرشادات ',
                'en_action' => 'Edit current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:32:00',
                'updated_at' => '2021-08-19 15:32:00',
            ),
            286 => 
            array (
                'id' => 1787,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:32:01',
                'updated_at' => '2021-08-19 15:32:01',
            ),
            287 => 
            array (
                'id' => 1788,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الإرشاد : اعلان تطبيق تيست',
                'en_action' => 'Edit Activation of tutorials : test Application tutorials',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:32:05',
                'updated_at' => '2021-08-19 15:32:05',
            ),
            288 => 
            array (
                'id' => 1789,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:32:11',
                'updated_at' => '2021-08-19 15:32:11',
            ),
            289 => 
            array (
                'id' => 1790,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : كارفور',
                'en_action' => 'Edit Activation of mall : Karfour',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:32:14',
                'updated_at' => '2021-08-19 15:32:14',
            ),
            290 => 
            array (
                'id' => 1791,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : كارفور',
                'en_action' => 'Edit Activation of mall : Karfour',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:32:16',
                'updated_at' => '2021-08-19 15:32:16',
            ),
            291 => 
            array (
                'id' => 1792,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:47:36',
                'updated_at' => '2021-08-19 15:47:36',
            ),
            292 => 
            array (
                'id' => 1793,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:47:39',
                'updated_at' => '2021-08-19 15:47:39',
            ),
            293 => 
            array (
                'id' => 1794,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:47:54',
                'updated_at' => '2021-08-19 15:47:54',
            ),
            294 => 
            array (
                'id' => 1795,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:50:13',
                'updated_at' => '2021-08-19 15:50:13',
            ),
            295 => 
            array (
                'id' => 1796,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:52:16',
                'updated_at' => '2021-08-19 15:52:16',
            ),
            296 => 
            array (
                'id' => 1797,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:52:51',
                'updated_at' => '2021-08-19 15:52:51',
            ),
            297 => 
            array (
                'id' => 1798,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:52:52',
                'updated_at' => '2021-08-19 15:52:52',
            ),
            298 => 
            array (
                'id' => 1799,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:56:00',
                'updated_at' => '2021-08-19 15:56:00',
            ),
            299 => 
            array (
                'id' => 1800,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 15:56:14',
                'updated_at' => '2021-08-19 15:56:14',
            ),
            300 => 
            array (
                'id' => 1801,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:01:09',
                'updated_at' => '2021-08-19 16:01:09',
            ),
            301 => 
            array (
                'id' => 1802,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:01:13',
                'updated_at' => '2021-08-19 16:01:13',
            ),
            302 => 
            array (
                'id' => 1803,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:01:17',
                'updated_at' => '2021-08-19 16:01:17',
            ),
            303 => 
            array (
                'id' => 1804,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:01:20',
                'updated_at' => '2021-08-19 16:01:20',
            ),
            304 => 
            array (
                'id' => 1805,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:01:42',
                'updated_at' => '2021-08-19 16:01:42',
            ),
            305 => 
            array (
                'id' => 1806,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:01:44',
                'updated_at' => '2021-08-19 16:01:44',
            ),
            306 => 
            array (
                'id' => 1807,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:01:47',
                'updated_at' => '2021-08-19 16:01:47',
            ),
            307 => 
            array (
                'id' => 1808,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:02:08',
                'updated_at' => '2021-08-19 16:02:08',
            ),
            308 => 
            array (
                'id' => 1809,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:02:12',
                'updated_at' => '2021-08-19 16:02:12',
            ),
            309 => 
            array (
                'id' => 1810,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:04:13',
                'updated_at' => '2021-08-19 16:04:13',
            ),
            310 => 
            array (
                'id' => 1811,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:04:40',
                'updated_at' => '2021-08-19 16:04:40',
            ),
            311 => 
            array (
                'id' => 1812,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:05:18',
                'updated_at' => '2021-08-19 16:05:18',
            ),
            312 => 
            array (
                'id' => 1813,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:05:26',
                'updated_at' => '2021-08-19 16:05:26',
            ),
            313 => 
            array (
                'id' => 1814,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:05:38',
                'updated_at' => '2021-08-19 16:05:38',
            ),
            314 => 
            array (
                'id' => 1815,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:05:53',
                'updated_at' => '2021-08-19 16:05:53',
            ),
            315 => 
            array (
                'id' => 1816,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:06:13',
                'updated_at' => '2021-08-19 16:06:13',
            ),
            316 => 
            array (
                'id' => 1817,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:06:40',
                'updated_at' => '2021-08-19 16:06:40',
            ),
            317 => 
            array (
                'id' => 1818,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:06:51',
                'updated_at' => '2021-08-19 16:06:51',
            ),
            318 => 
            array (
                'id' => 1819,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:07:02',
                'updated_at' => '2021-08-19 16:07:02',
            ),
            319 => 
            array (
                'id' => 1820,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:07:17',
                'updated_at' => '2021-08-19 16:07:17',
            ),
            320 => 
            array (
                'id' => 1821,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:07:27',
                'updated_at' => '2021-08-19 16:07:27',
            ),
            321 => 
            array (
                'id' => 1822,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:08:44',
                'updated_at' => '2021-08-19 16:08:44',
            ),
            322 => 
            array (
                'id' => 1823,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:09:31',
                'updated_at' => '2021-08-19 16:09:31',
            ),
            323 => 
            array (
                'id' => 1824,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : كارفور',
                'en_action' => 'Edit Activation of mall : Karfour',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:09:45',
                'updated_at' => '2021-08-19 16:09:45',
            ),
            324 => 
            array (
                'id' => 1825,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:09:47',
                'updated_at' => '2021-08-19 16:09:47',
            ),
            325 => 
            array (
                'id' => 1826,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : كارفور',
                'en_action' => 'Edit Activation of mall : Karfour',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:09:51',
                'updated_at' => '2021-08-19 16:09:51',
            ),
            326 => 
            array (
                'id' => 1827,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:09:52',
                'updated_at' => '2021-08-19 16:09:52',
            ),
            327 => 
            array (
                'id' => 1828,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:12:10',
                'updated_at' => '2021-08-19 16:12:10',
            ),
            328 => 
            array (
                'id' => 1829,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:12:20',
                'updated_at' => '2021-08-19 16:12:20',
            ),
            329 => 
            array (
                'id' => 1830,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:20:05',
                'updated_at' => '2021-08-19 16:20:05',
            ),
            330 => 
            array (
                'id' => 1831,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:20:05',
                'updated_at' => '2021-08-19 16:20:05',
            ),
            331 => 
            array (
                'id' => 1832,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:20:10',
                'updated_at' => '2021-08-19 16:20:10',
            ),
            332 => 
            array (
                'id' => 1833,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:20:15',
                'updated_at' => '2021-08-19 16:20:15',
            ),
            333 => 
            array (
                'id' => 1834,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:21:01',
                'updated_at' => '2021-08-19 16:21:01',
            ),
            334 => 
            array (
                'id' => 1835,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالإعلانات sda',
                'en_action' => 'Add new ads dsa',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:21:30',
                'updated_at' => '2021-08-19 16:21:30',
            ),
            335 => 
            array (
                'id' => 1836,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:21:33',
                'updated_at' => '2021-08-19 16:21:33',
            ),
            336 => 
            array (
                'id' => 1837,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:21:49',
                'updated_at' => '2021-08-19 16:21:49',
            ),
            337 => 
            array (
                'id' => 1838,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:21:54',
                'updated_at' => '2021-08-19 16:21:54',
            ),
            338 => 
            array (
                'id' => 1839,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:22:26',
                'updated_at' => '2021-08-19 16:22:26',
            ),
            339 => 
            array (
                'id' => 1840,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:23:28',
                'updated_at' => '2021-08-19 16:23:28',
            ),
            340 => 
            array (
                'id' => 1841,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:23:31',
                'updated_at' => '2021-08-19 16:23:31',
            ),
            341 => 
            array (
                'id' => 1842,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:24:57',
                'updated_at' => '2021-08-19 16:24:57',
            ),
            342 => 
            array (
                'id' => 1843,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإرشادات ',
                'en_action' => 'Edit current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:17',
                'updated_at' => '2021-08-19 16:26:17',
            ),
            343 => 
            array (
                'id' => 1844,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:17',
                'updated_at' => '2021-08-19 16:26:17',
            ),
            344 => 
            array (
                'id' => 1845,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:24',
                'updated_at' => '2021-08-19 16:26:24',
            ),
            345 => 
            array (
                'id' => 1846,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:49',
                'updated_at' => '2021-08-19 16:26:49',
            ),
            346 => 
            array (
                'id' => 1847,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بالمولات اعلان ١',
                'en_action' => 'Delete current mall malls 1',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:53',
                'updated_at' => '2021-08-19 16:26:53',
            ),
            347 => 
            array (
                'id' => 1848,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:54',
                'updated_at' => '2021-08-19 16:26:54',
            ),
            348 => 
            array (
                'id' => 1849,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بالمولات كارفور',
                'en_action' => 'Delete current mall Karfour',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:58',
                'updated_at' => '2021-08-19 16:26:58',
            ),
            349 => 
            array (
                'id' => 1850,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:26:58',
                'updated_at' => '2021-08-19 16:26:58',
            ),
            350 => 
            array (
                'id' => 1851,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:27:01',
                'updated_at' => '2021-08-19 16:27:01',
            ),
            351 => 
            array (
                'id' => 1852,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمولات Kevin Schmidt',
                'en_action' => 'Add new mall Richard Griffith',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:38:00',
                'updated_at' => '2021-08-19 16:38:00',
            ),
            352 => 
            array (
                'id' => 1853,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:38:03',
                'updated_at' => '2021-08-19 16:38:03',
            ),
            353 => 
            array (
                'id' => 1854,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:42:05',
                'updated_at' => '2021-08-19 16:42:05',
            ),
            354 => 
            array (
                'id' => 1855,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:42:16',
                'updated_at' => '2021-08-19 16:42:16',
            ),
            355 => 
            array (
                'id' => 1856,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:42:31',
                'updated_at' => '2021-08-19 16:42:31',
            ),
            356 => 
            array (
                'id' => 1857,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Kevin Schmidt',
                'en_action' => 'Edit current mall Richard Griffith',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:47:42',
                'updated_at' => '2021-08-19 16:47:42',
            ),
            357 => 
            array (
                'id' => 1858,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:47:42',
                'updated_at' => '2021-08-19 16:47:42',
            ),
            358 => 
            array (
                'id' => 1859,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Kevin Schmidt dsada',
                'en_action' => 'Edit current mall Richard Griffithdsada',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:47:57',
                'updated_at' => '2021-08-19 16:47:57',
            ),
            359 => 
            array (
                'id' => 1860,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:47:57',
                'updated_at' => '2021-08-19 16:47:57',
            ),
            360 => 
            array (
                'id' => 1861,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Kevin Schmidt dsada',
                'en_action' => 'Edit current mall Richard Griffithdsada',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:49:23',
                'updated_at' => '2021-08-19 16:49:23',
            ),
            361 => 
            array (
                'id' => 1862,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 16:49:23',
                'updated_at' => '2021-08-19 16:49:23',
            ),
            362 => 
            array (
                'id' => 1863,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:08:57',
                'updated_at' => '2021-08-19 17:08:57',
            ),
            363 => 
            array (
                'id' => 1864,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:08:57',
                'updated_at' => '2021-08-19 17:08:57',
            ),
            364 => 
            array (
                'id' => 1865,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:09:09',
                'updated_at' => '2021-08-19 17:09:09',
            ),
            365 => 
            array (
                'id' => 1866,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:09:10',
                'updated_at' => '2021-08-19 17:09:10',
            ),
            366 => 
            array (
                'id' => 1867,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:10:04',
                'updated_at' => '2021-08-19 17:10:04',
            ),
            367 => 
            array (
                'id' => 1868,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:10:05',
                'updated_at' => '2021-08-19 17:10:05',
            ),
            368 => 
            array (
                'id' => 1869,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:11:22',
                'updated_at' => '2021-08-19 17:11:22',
            ),
            369 => 
            array (
                'id' => 1870,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:11:22',
                'updated_at' => '2021-08-19 17:11:22',
            ),
            370 => 
            array (
                'id' => 1871,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:20:24',
                'updated_at' => '2021-08-19 17:20:24',
            ),
            371 => 
            array (
                'id' => 1872,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:22:24',
                'updated_at' => '2021-08-19 17:22:24',
            ),
            372 => 
            array (
                'id' => 1873,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:23:02',
                'updated_at' => '2021-08-19 17:23:02',
            ),
            373 => 
            array (
                'id' => 1874,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:23:05',
                'updated_at' => '2021-08-19 17:23:05',
            ),
            374 => 
            array (
                'id' => 1875,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:23:07',
                'updated_at' => '2021-08-19 17:23:07',
            ),
            375 => 
            array (
                'id' => 1876,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:23:26',
                'updated_at' => '2021-08-19 17:23:26',
            ),
            376 => 
            array (
                'id' => 1877,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:23:41',
                'updated_at' => '2021-08-19 17:23:41',
            ),
            377 => 
            array (
                'id' => 1878,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:23:42',
                'updated_at' => '2021-08-19 17:23:42',
            ),
            378 => 
            array (
                'id' => 1879,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:27:03',
                'updated_at' => '2021-08-19 17:27:03',
            ),
            379 => 
            array (
                'id' => 1880,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:27:03',
                'updated_at' => '2021-08-19 17:27:03',
            ),
            380 => 
            array (
                'id' => 1881,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:27:30',
                'updated_at' => '2021-08-19 17:27:30',
            ),
            381 => 
            array (
                'id' => 1882,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:28:06',
                'updated_at' => '2021-08-19 17:28:06',
            ),
            382 => 
            array (
                'id' => 1883,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:28:06',
                'updated_at' => '2021-08-19 17:28:06',
            ),
            383 => 
            array (
                'id' => 1884,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:28:54',
                'updated_at' => '2021-08-19 17:28:54',
            ),
            384 => 
            array (
                'id' => 1885,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:28:54',
                'updated_at' => '2021-08-19 17:28:54',
            ),
            385 => 
            array (
                'id' => 1886,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:29:02',
                'updated_at' => '2021-08-19 17:29:02',
            ),
            386 => 
            array (
                'id' => 1887,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:29:02',
                'updated_at' => '2021-08-19 17:29:02',
            ),
            387 => 
            array (
                'id' => 1888,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:30:05',
                'updated_at' => '2021-08-19 17:30:05',
            ),
            388 => 
            array (
                'id' => 1889,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:30:05',
                'updated_at' => '2021-08-19 17:30:05',
            ),
            389 => 
            array (
                'id' => 1890,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:30:15',
                'updated_at' => '2021-08-19 17:30:15',
            ),
            390 => 
            array (
                'id' => 1891,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:30:15',
                'updated_at' => '2021-08-19 17:30:15',
            ),
            391 => 
            array (
                'id' => 1892,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:31:31',
                'updated_at' => '2021-08-19 17:31:31',
            ),
            392 => 
            array (
                'id' => 1893,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:31:31',
                'updated_at' => '2021-08-19 17:31:31',
            ),
            393 => 
            array (
                'id' => 1894,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:33:04',
                'updated_at' => '2021-08-19 17:33:04',
            ),
            394 => 
            array (
                'id' => 1895,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:33:04',
                'updated_at' => '2021-08-19 17:33:04',
            ),
            395 => 
            array (
                'id' => 1896,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:33:38',
                'updated_at' => '2021-08-19 17:33:38',
            ),
            396 => 
            array (
                'id' => 1897,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالإرشادات ',
                'en_action' => 'Edit current tutorials ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:33:48',
                'updated_at' => '2021-08-19 17:33:48',
            ),
            397 => 
            array (
                'id' => 1898,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:33:48',
                'updated_at' => '2021-08-19 17:33:48',
            ),
            398 => 
            array (
                'id' => 1899,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:34:00',
                'updated_at' => '2021-08-19 17:34:00',
            ),
            399 => 
            array (
                'id' => 1900,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:34:57',
                'updated_at' => '2021-08-19 17:34:57',
            ),
            400 => 
            array (
                'id' => 1901,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:34:57',
                'updated_at' => '2021-08-19 17:34:57',
            ),
            401 => 
            array (
                'id' => 1902,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:35:04',
                'updated_at' => '2021-08-19 17:35:04',
            ),
            402 => 
            array (
                'id' => 1903,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:35:05',
                'updated_at' => '2021-08-19 17:35:05',
            ),
            403 => 
            array (
                'id' => 1904,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:36:24',
                'updated_at' => '2021-08-19 17:36:24',
            ),
            404 => 
            array (
                'id' => 1905,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:36:38',
                'updated_at' => '2021-08-19 17:36:38',
            ),
            405 => 
            array (
                'id' => 1906,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:36:38',
                'updated_at' => '2021-08-19 17:36:38',
            ),
            406 => 
            array (
                'id' => 1907,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:37:11',
                'updated_at' => '2021-08-19 17:37:11',
            ),
            407 => 
            array (
                'id' => 1908,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:37:28',
                'updated_at' => '2021-08-19 17:37:28',
            ),
            408 => 
            array (
                'id' => 1909,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:37:42',
                'updated_at' => '2021-08-19 17:37:42',
            ),
            409 => 
            array (
                'id' => 1910,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:37:43',
                'updated_at' => '2021-08-19 17:37:43',
            ),
            410 => 
            array (
                'id' => 1911,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:38:03',
                'updated_at' => '2021-08-19 17:38:03',
            ),
            411 => 
            array (
                'id' => 1912,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:38:18',
                'updated_at' => '2021-08-19 17:38:18',
            ),
            412 => 
            array (
                'id' => 1913,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:38:18',
                'updated_at' => '2021-08-19 17:38:18',
            ),
            413 => 
            array (
                'id' => 1914,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:39:28',
                'updated_at' => '2021-08-19 17:39:28',
            ),
            414 => 
            array (
                'id' => 1915,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:39:29',
                'updated_at' => '2021-08-19 17:39:29',
            ),
            415 => 
            array (
                'id' => 1916,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:40:54',
                'updated_at' => '2021-08-19 17:40:54',
            ),
            416 => 
            array (
                'id' => 1917,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:40:55',
                'updated_at' => '2021-08-19 17:40:55',
            ),
            417 => 
            array (
                'id' => 1918,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:43:09',
                'updated_at' => '2021-08-19 17:43:09',
            ),
            418 => 
            array (
                'id' => 1919,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:43:10',
                'updated_at' => '2021-08-19 17:43:10',
            ),
            419 => 
            array (
                'id' => 1920,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:48:27',
                'updated_at' => '2021-08-19 17:48:27',
            ),
            420 => 
            array (
                'id' => 1921,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:48:34',
                'updated_at' => '2021-08-19 17:48:34',
            ),
            421 => 
            array (
                'id' => 1922,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:48:53',
                'updated_at' => '2021-08-19 17:48:53',
            ),
            422 => 
            array (
                'id' => 1923,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:48:54',
                'updated_at' => '2021-08-19 17:48:54',
            ),
            423 => 
            array (
                'id' => 1924,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:51:11',
                'updated_at' => '2021-08-19 17:51:11',
            ),
            424 => 
            array (
                'id' => 1925,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:51:11',
                'updated_at' => '2021-08-19 17:51:11',
            ),
            425 => 
            array (
                'id' => 1926,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  صورة حالية بالمولات Maxine Brooks',
                'en_action' => 'Edit current mall Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:51:24',
                'updated_at' => '2021-08-19 17:51:24',
            ),
            426 => 
            array (
                'id' => 1927,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:51:24',
                'updated_at' => '2021-08-19 17:51:24',
            ),
            427 => 
            array (
                'id' => 1928,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:54:43',
                'updated_at' => '2021-08-19 17:54:43',
            ),
            428 => 
            array (
                'id' => 1929,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:55:23',
                'updated_at' => '2021-08-19 17:55:23',
            ),
            429 => 
            array (
                'id' => 1930,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:55:51',
                'updated_at' => '2021-08-19 17:55:51',
            ),
            430 => 
            array (
                'id' => 1931,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمولات Noble Strong',
                'en_action' => 'Add new mall Wyoming Mathis',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:56:22',
                'updated_at' => '2021-08-19 17:56:22',
            ),
            431 => 
            array (
                'id' => 1932,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:56:26',
                'updated_at' => '2021-08-19 17:56:26',
            ),
            432 => 
            array (
                'id' => 1933,
                'user_id' => '1',
                'ar_action' => 'قام بحذف صورة حالية بالمولات Noble Strong',
                'en_action' => 'Delete current mall Wyoming Mathis',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:56:44',
                'updated_at' => '2021-08-19 17:56:44',
            ),
            433 => 
            array (
                'id' => 1934,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:56:44',
                'updated_at' => '2021-08-19 17:56:44',
            ),
            434 => 
            array (
                'id' => 1935,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:56:48',
                'updated_at' => '2021-08-19 17:56:48',
            ),
            435 => 
            array (
                'id' => 1936,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل تفعيل الاعلان : Maxine Brooks',
                'en_action' => 'Edit Activation of mall : Paloma Johnson',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:56:54',
                'updated_at' => '2021-08-19 17:56:54',
            ),
            436 => 
            array (
                'id' => 1937,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:56:56',
                'updated_at' => '2021-08-19 17:56:56',
            ),
            437 => 
            array (
                'id' => 1938,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة المولات',
                'en_action' => 'Open mall page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-19 17:57:43',
                'updated_at' => '2021-08-19 17:57:43',
            ),
            438 => 
            array (
                'id' => 1939,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:39:21',
                'updated_at' => '2021-08-22 10:39:21',
            ),
            439 => 
            array (
                'id' => 1940,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:39:21',
                'updated_at' => '2021-08-22 10:39:21',
            ),
            440 => 
            array (
                'id' => 1941,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:39:26',
                'updated_at' => '2021-08-22 10:39:26',
            ),
            441 => 
            array (
                'id' => 1942,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:41:11',
                'updated_at' => '2021-08-22 10:41:11',
            ),
            442 => 
            array (
                'id' => 1943,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:43:31',
                'updated_at' => '2021-08-22 10:43:31',
            ),
            443 => 
            array (
                'id' => 1944,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:43:34',
                'updated_at' => '2021-08-22 10:43:34',
            ),
            444 => 
            array (
                'id' => 1945,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:43:42',
                'updated_at' => '2021-08-22 10:43:42',
            ),
            445 => 
            array (
                'id' => 1946,
                'user_id' => '1',
                'ar_action' => 'قام بفتح  رسالة إتصل بنا رقم 1',
                'en_action' => 'Open contact message No. 1',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:44:01',
                'updated_at' => '2021-08-22 10:44:01',
            ),
            446 => 
            array (
                'id' => 1947,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:49:47',
                'updated_at' => '2021-08-22 10:49:47',
            ),
            447 => 
            array (
                'id' => 1948,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:50:25',
                'updated_at' => '2021-08-22 10:50:25',
            ),
            448 => 
            array (
                'id' => 1949,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:50:43',
                'updated_at' => '2021-08-22 10:50:43',
            ),
            449 => 
            array (
                'id' => 1950,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:51:07',
                'updated_at' => '2021-08-22 10:51:07',
            ),
            450 => 
            array (
                'id' => 1951,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإرشادات',
                'en_action' => 'Open tutorials page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:51:45',
                'updated_at' => '2021-08-22 10:51:45',
            ),
            451 => 
            array (
                'id' => 1952,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:51:50',
                'updated_at' => '2021-08-22 10:51:50',
            ),
            452 => 
            array (
                'id' => 1953,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:52:12',
                'updated_at' => '2021-08-22 10:52:12',
            ),
            453 => 
            array (
                'id' => 1954,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:53:38',
                'updated_at' => '2021-08-22 10:53:38',
            ),
            454 => 
            array (
                'id' => 1955,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:53:41',
                'updated_at' => '2021-08-22 10:53:41',
            ),
            455 => 
            array (
                'id' => 1956,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:53:43',
                'updated_at' => '2021-08-22 10:53:43',
            ),
            456 => 
            array (
                'id' => 1957,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:53:59',
                'updated_at' => '2021-08-22 10:53:59',
            ),
            457 => 
            array (
                'id' => 1958,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:54:31',
                'updated_at' => '2021-08-22 10:54:31',
            ),
            458 => 
            array (
                'id' => 1959,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:54:33',
                'updated_at' => '2021-08-22 10:54:33',
            ),
            459 => 
            array (
                'id' => 1960,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:56:13',
                'updated_at' => '2021-08-22 10:56:13',
            ),
            460 => 
            array (
                'id' => 1961,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:56:41',
                'updated_at' => '2021-08-22 10:56:41',
            ),
            461 => 
            array (
                'id' => 1962,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:56:44',
                'updated_at' => '2021-08-22 10:56:44',
            ),
            462 => 
            array (
                'id' => 1963,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:56:59',
                'updated_at' => '2021-08-22 10:56:59',
            ),
            463 => 
            array (
                'id' => 1964,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:57:03',
                'updated_at' => '2021-08-22 10:57:03',
            ),
            464 => 
            array (
                'id' => 1965,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:57:36',
                'updated_at' => '2021-08-22 10:57:36',
            ),
            465 => 
            array (
                'id' => 1966,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:57:39',
                'updated_at' => '2021-08-22 10:57:39',
            ),
            466 => 
            array (
                'id' => 1967,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:57:53',
                'updated_at' => '2021-08-22 10:57:53',
            ),
            467 => 
            array (
                'id' => 1968,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:57:57',
                'updated_at' => '2021-08-22 10:57:57',
            ),
            468 => 
            array (
                'id' => 1969,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:58:16',
                'updated_at' => '2021-08-22 10:58:16',
            ),
            469 => 
            array (
                'id' => 1970,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:58:57',
                'updated_at' => '2021-08-22 10:58:57',
            ),
            470 => 
            array (
                'id' => 1971,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:59:19',
                'updated_at' => '2021-08-22 10:59:19',
            ),
            471 => 
            array (
                'id' => 1972,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:59:23',
                'updated_at' => '2021-08-22 10:59:23',
            ),
            472 => 
            array (
                'id' => 1973,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:59:41',
                'updated_at' => '2021-08-22 10:59:41',
            ),
            473 => 
            array (
                'id' => 1974,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 10:59:50',
                'updated_at' => '2021-08-22 10:59:50',
            ),
            474 => 
            array (
                'id' => 1975,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:00:18',
                'updated_at' => '2021-08-22 11:00:18',
            ),
            475 => 
            array (
                'id' => 1976,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:03:55',
                'updated_at' => '2021-08-22 11:03:55',
            ),
            476 => 
            array (
                'id' => 1977,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:04:15',
                'updated_at' => '2021-08-22 11:04:15',
            ),
            477 => 
            array (
                'id' => 1978,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:04:50',
                'updated_at' => '2021-08-22 11:04:50',
            ),
            478 => 
            array (
                'id' => 1979,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:05:00',
                'updated_at' => '2021-08-22 11:05:00',
            ),
            479 => 
            array (
                'id' => 1980,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:05:31',
                'updated_at' => '2021-08-22 11:05:31',
            ),
            480 => 
            array (
                'id' => 1981,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:05:36',
                'updated_at' => '2021-08-22 11:05:36',
            ),
            481 => 
            array (
                'id' => 1982,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:06:18',
                'updated_at' => '2021-08-22 11:06:18',
            ),
            482 => 
            array (
                'id' => 1983,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:07:03',
                'updated_at' => '2021-08-22 11:07:03',
            ),
            483 => 
            array (
                'id' => 1984,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:07:07',
                'updated_at' => '2021-08-22 11:07:07',
            ),
            484 => 
            array (
                'id' => 1985,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:07:32',
                'updated_at' => '2021-08-22 11:07:32',
            ),
            485 => 
            array (
                'id' => 1986,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:07:55',
                'updated_at' => '2021-08-22 11:07:55',
            ),
            486 => 
            array (
                'id' => 1987,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:08:11',
                'updated_at' => '2021-08-22 11:08:11',
            ),
            487 => 
            array (
                'id' => 1988,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:08:22',
                'updated_at' => '2021-08-22 11:08:22',
            ),
            488 => 
            array (
                'id' => 1989,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:08:47',
                'updated_at' => '2021-08-22 11:08:47',
            ),
            489 => 
            array (
                'id' => 1990,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:09:04',
                'updated_at' => '2021-08-22 11:09:04',
            ),
            490 => 
            array (
                'id' => 1991,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:09:13',
                'updated_at' => '2021-08-22 11:09:13',
            ),
            491 => 
            array (
                'id' => 1992,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:10:10',
                'updated_at' => '2021-08-22 11:10:10',
            ),
            492 => 
            array (
                'id' => 1993,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:10:16',
                'updated_at' => '2021-08-22 11:10:16',
            ),
            493 => 
            array (
                'id' => 1994,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:10:59',
                'updated_at' => '2021-08-22 11:10:59',
            ),
            494 => 
            array (
                'id' => 1995,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:12:12',
                'updated_at' => '2021-08-22 11:12:12',
            ),
            495 => 
            array (
                'id' => 1996,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:13:12',
                'updated_at' => '2021-08-22 11:13:12',
            ),
            496 => 
            array (
                'id' => 1997,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:13:24',
                'updated_at' => '2021-08-22 11:13:24',
            ),
            497 => 
            array (
                'id' => 1998,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:13:35',
                'updated_at' => '2021-08-22 11:13:35',
            ),
            498 => 
            array (
                'id' => 1999,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:14:06',
                'updated_at' => '2021-08-22 11:14:06',
            ),
            499 => 
            array (
                'id' => 2000,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:14:15',
                'updated_at' => '2021-08-22 11:14:15',
            ),
        ));
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:14:20',
                'updated_at' => '2021-08-22 11:14:20',
            ),
            1 => 
            array (
                'id' => 2002,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:14:48',
                'updated_at' => '2021-08-22 11:14:48',
            ),
            2 => 
            array (
                'id' => 2003,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:14:58',
                'updated_at' => '2021-08-22 11:14:58',
            ),
            3 => 
            array (
                'id' => 2004,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:21:55',
                'updated_at' => '2021-08-22 11:21:55',
            ),
            4 => 
            array (
                'id' => 2005,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:22:22',
                'updated_at' => '2021-08-22 11:22:22',
            ),
            5 => 
            array (
                'id' => 2006,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:24:29',
                'updated_at' => '2021-08-22 11:24:29',
            ),
            6 => 
            array (
                'id' => 2007,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:27:41',
                'updated_at' => '2021-08-22 11:27:41',
            ),
            7 => 
            array (
                'id' => 2008,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:28:06',
                'updated_at' => '2021-08-22 11:28:06',
            ),
            8 => 
            array (
                'id' => 2009,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:28:14',
                'updated_at' => '2021-08-22 11:28:14',
            ),
            9 => 
            array (
                'id' => 2010,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:28:22',
                'updated_at' => '2021-08-22 11:28:22',
            ),
            10 => 
            array (
                'id' => 2011,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:43:42',
                'updated_at' => '2021-08-22 11:43:42',
            ),
            11 => 
            array (
                'id' => 2012,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:45:09',
                'updated_at' => '2021-08-22 11:45:09',
            ),
            12 => 
            array (
                'id' => 2013,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:45:14',
                'updated_at' => '2021-08-22 11:45:14',
            ),
            13 => 
            array (
                'id' => 2014,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:45:29',
                'updated_at' => '2021-08-22 11:45:29',
            ),
            14 => 
            array (
                'id' => 2015,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:45:45',
                'updated_at' => '2021-08-22 11:45:45',
            ),
            15 => 
            array (
                'id' => 2016,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:45:48',
                'updated_at' => '2021-08-22 11:45:48',
            ),
            16 => 
            array (
                'id' => 2017,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:45:56',
                'updated_at' => '2021-08-22 11:45:56',
            ),
            17 => 
            array (
                'id' => 2018,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:46:01',
                'updated_at' => '2021-08-22 11:46:01',
            ),
            18 => 
            array (
                'id' => 2019,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:46:35',
                'updated_at' => '2021-08-22 11:46:35',
            ),
            19 => 
            array (
                'id' => 2020,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:46:43',
                'updated_at' => '2021-08-22 11:46:43',
            ),
            20 => 
            array (
                'id' => 2021,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:46:56',
                'updated_at' => '2021-08-22 11:46:56',
            ),
            21 => 
            array (
                'id' => 2022,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 11:47:16',
                'updated_at' => '2021-08-22 11:47:16',
            ),
            22 => 
            array (
                'id' => 2023,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:08:15',
                'updated_at' => '2021-08-22 12:08:15',
            ),
            23 => 
            array (
                'id' => 2024,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:08:21',
                'updated_at' => '2021-08-22 12:08:21',
            ),
            24 => 
            array (
                'id' => 2025,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:08:32',
                'updated_at' => '2021-08-22 12:08:32',
            ),
            25 => 
            array (
                'id' => 2026,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:08:38',
                'updated_at' => '2021-08-22 12:08:38',
            ),
            26 => 
            array (
                'id' => 2027,
                'user_id' => '1',
                'ar_action' => 'قام بفتح  رسالة إتصل بنا رقم 1',
                'en_action' => 'Open contact message No. 1',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:08:44',
                'updated_at' => '2021-08-22 12:08:44',
            ),
            27 => 
            array (
                'id' => 2028,
                'user_id' => '1',
                'ar_action' => 'قام بالرد علي رسالة إتصل بنا رقم 1',
                'en_action' => 'Reply to contact message No. 1',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:08:52',
                'updated_at' => '2021-08-22 12:08:52',
            ),
            28 => 
            array (
                'id' => 2029,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:08:52',
                'updated_at' => '2021-08-22 12:08:52',
            ),
            29 => 
            array (
                'id' => 2030,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة الإعلانات',
                'en_action' => 'Open ads page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:09:28',
                'updated_at' => '2021-08-22 12:09:28',
            ),
            30 => 
            array (
                'id' => 2031,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:29:34',
                'updated_at' => '2021-08-22 12:29:34',
            ),
            31 => 
            array (
                'id' => 2032,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-22 12:29:43',
                'updated_at' => '2021-08-22 12:29:43',
            ),
            32 => 
            array (
                'id' => 2033,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:01:34',
                'updated_at' => '2021-08-23 11:01:34',
            ),
            33 => 
            array (
                'id' => 2034,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:01:34',
                'updated_at' => '2021-08-23 11:01:34',
            ),
            34 => 
            array (
                'id' => 2035,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:01:38',
                'updated_at' => '2021-08-23 11:01:38',
            ),
            35 => 
            array (
                'id' => 2036,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:01:43',
                'updated_at' => '2021-08-23 11:01:43',
            ),
            36 => 
            array (
                'id' => 2037,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:01:52',
                'updated_at' => '2021-08-23 11:01:52',
            ),
            37 => 
            array (
                'id' => 2038,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:01:56',
                'updated_at' => '2021-08-23 11:01:56',
            ),
            38 => 
            array (
                'id' => 2039,
                'user_id' => '1',
                'ar_action' => 'قام بحذف  رسالة إتصل بنا رقم 12',
                'en_action' => 'Delete contact message No. 12',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:02:24',
                'updated_at' => '2021-08-23 11:02:24',
            ),
            39 => 
            array (
                'id' => 2040,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:02:24',
                'updated_at' => '2021-08-23 11:02:24',
            ),
            40 => 
            array (
                'id' => 2041,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:02:40',
                'updated_at' => '2021-08-23 11:02:40',
            ),
            41 => 
            array (
                'id' => 2042,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:03:12',
                'updated_at' => '2021-08-23 11:03:12',
            ),
            42 => 
            array (
                'id' => 2043,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:04:19',
                'updated_at' => '2021-08-23 11:04:19',
            ),
            43 => 
            array (
                'id' => 2044,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:04:36',
                'updated_at' => '2021-08-23 11:04:36',
            ),
            44 => 
            array (
                'id' => 2045,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:04:39',
                'updated_at' => '2021-08-23 11:04:39',
            ),
            45 => 
            array (
                'id' => 2046,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:04:44',
                'updated_at' => '2021-08-23 11:04:44',
            ),
            46 => 
            array (
                'id' => 2047,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:05:23',
                'updated_at' => '2021-08-23 11:05:23',
            ),
            47 => 
            array (
                'id' => 2048,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:05:55',
                'updated_at' => '2021-08-23 11:05:55',
            ),
            48 => 
            array (
                'id' => 2049,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:07:01',
                'updated_at' => '2021-08-23 11:07:01',
            ),
            49 => 
            array (
                'id' => 2050,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:07:05',
                'updated_at' => '2021-08-23 11:07:05',
            ),
            50 => 
            array (
                'id' => 2051,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:07:47',
                'updated_at' => '2021-08-23 11:07:47',
            ),
            51 => 
            array (
                'id' => 2052,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:08:04',
                'updated_at' => '2021-08-23 11:08:04',
            ),
            52 => 
            array (
                'id' => 2053,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:08:08',
                'updated_at' => '2021-08-23 11:08:08',
            ),
            53 => 
            array (
                'id' => 2054,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:09:29',
                'updated_at' => '2021-08-23 11:09:29',
            ),
            54 => 
            array (
                'id' => 2055,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:09:46',
                'updated_at' => '2021-08-23 11:09:46',
            ),
            55 => 
            array (
                'id' => 2056,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:09:58',
                'updated_at' => '2021-08-23 11:09:58',
            ),
            56 => 
            array (
                'id' => 2057,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:10:15',
                'updated_at' => '2021-08-23 11:10:15',
            ),
            57 => 
            array (
                'id' => 2058,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:11:01',
                'updated_at' => '2021-08-23 11:11:01',
            ),
            58 => 
            array (
                'id' => 2059,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:11:16',
                'updated_at' => '2021-08-23 11:11:16',
            ),
            59 => 
            array (
                'id' => 2060,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:11:25',
                'updated_at' => '2021-08-23 11:11:25',
            ),
            60 => 
            array (
                'id' => 2061,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:11:56',
                'updated_at' => '2021-08-23 11:11:56',
            ),
            61 => 
            array (
                'id' => 2062,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:12:13',
                'updated_at' => '2021-08-23 11:12:13',
            ),
            62 => 
            array (
                'id' => 2063,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:21:13',
                'updated_at' => '2021-08-23 11:21:13',
            ),
            63 => 
            array (
                'id' => 2064,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:21:52',
                'updated_at' => '2021-08-23 11:21:52',
            ),
            64 => 
            array (
                'id' => 2065,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:22:05',
                'updated_at' => '2021-08-23 11:22:05',
            ),
            65 => 
            array (
                'id' => 2066,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:22:08',
                'updated_at' => '2021-08-23 11:22:08',
            ),
            66 => 
            array (
                'id' => 2067,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:22:16',
                'updated_at' => '2021-08-23 11:22:16',
            ),
            67 => 
            array (
                'id' => 2068,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:22:37',
                'updated_at' => '2021-08-23 11:22:37',
            ),
            68 => 
            array (
                'id' => 2069,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:22:42',
                'updated_at' => '2021-08-23 11:22:42',
            ),
            69 => 
            array (
                'id' => 2070,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:22:56',
                'updated_at' => '2021-08-23 11:22:56',
            ),
            70 => 
            array (
                'id' => 2071,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:23:01',
                'updated_at' => '2021-08-23 11:23:01',
            ),
            71 => 
            array (
                'id' => 2072,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:23:07',
                'updated_at' => '2021-08-23 11:23:07',
            ),
            72 => 
            array (
                'id' => 2073,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إتصل بنا',
                'en_action' => 'Open contact us page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-23 11:23:14',
                'updated_at' => '2021-08-23 11:23:14',
            ),
            73 => 
            array (
                'id' => 2074,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-24 12:12:14',
                'updated_at' => '2021-08-24 12:12:14',
            ),
            74 => 
            array (
                'id' => 2075,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-24 12:12:14',
                'updated_at' => '2021-08-24 12:12:14',
            ),
            75 => 
            array (
                'id' => 2076,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:28:23',
                'updated_at' => '2021-08-25 15:28:23',
            ),
            76 => 
            array (
                'id' => 2077,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة إعدادات الموقع',
                'en_action' => 'Open site settings page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:28:30',
                'updated_at' => '2021-08-25 15:28:30',
            ),
            77 => 
            array (
                'id' => 2078,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:28:37',
                'updated_at' => '2021-08-25 15:28:37',
            ),
            78 => 
            array (
                'id' => 2079,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة حسابات التواصل الإجتماعي',
                'en_action' => 'Open Social Media page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:28:39',
                'updated_at' => '2021-08-25 15:28:39',
            ),
            79 => 
            array (
                'id' => 2080,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:28:50',
                'updated_at' => '2021-08-25 15:28:50',
            ),
            80 => 
            array (
                'id' => 2081,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:34:08',
                'updated_at' => '2021-08-25 15:34:08',
            ),
            81 => 
            array (
                'id' => 2082,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:34:08',
                'updated_at' => '2021-08-25 15:34:08',
            ),
            82 => 
            array (
                'id' => 2083,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-25 15:34:20',
                'updated_at' => '2021-08-25 15:34:20',
            ),
            83 => 
            array (
                'id' => 2084,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 13:01:13',
                'updated_at' => '2021-08-26 13:01:13',
            ),
            84 => 
            array (
                'id' => 2085,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 13:01:14',
                'updated_at' => '2021-08-26 13:01:14',
            ),
            85 => 
            array (
                'id' => 2086,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 13:01:48',
                'updated_at' => '2021-08-26 13:01:48',
            ),
            86 => 
            array (
                'id' => 2087,
                'user_id' => '1',
                'ar_action' => 'قام بتسجيل الدخول للوحة التحكم',
                'en_action' => 'Login to dashboard',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:13:39',
                'updated_at' => '2021-08-26 15:13:39',
            ),
            87 => 
            array (
                'id' => 2088,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:13:40',
                'updated_at' => '2021-08-26 15:13:40',
            ),
            88 => 
            array (
                'id' => 2089,
                'user_id' => '1',
                'ar_action' => 'قام بفتح الرئيسية للوحة التحكم',
                'en_action' => 'Go to admin dashboard homepage',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:13:43',
                'updated_at' => '2021-08-26 15:13:43',
            ),
            89 => 
            array (
                'id' => 2090,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:20:09',
                'updated_at' => '2021-08-26 15:20:09',
            ),
            90 => 
            array (
                'id' => 2091,
                'user_id' => '1',
                'ar_action' => 'قام بتعديل  مجموعة صلاحيات مشرفين حالية الإدراة العليا',
                'en_action' => 'Edit current supervisors powers group Top Management',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            91 => 
            array (
                'id' => 2092,
                'user_id' => '1',
                'ar_action' => 'قام بفتح صفحة صلاحيات المشرفين',
                'en_action' => 'Open supervisors powers page',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:25:46',
                'updated_at' => '2021-08-26 15:25:46',
            ),
            92 => 
            array (
                'id' => 2093,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:58:28',
                'updated_at' => '2021-08-26 15:58:28',
            ),
            93 => 
            array (
                'id' => 2094,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 15:59:29',
                'updated_at' => '2021-08-26 15:59:29',
            ),
            94 => 
            array (
                'id' => 2095,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 16:03:23',
                'updated_at' => '2021-08-26 16:03:23',
            ),
            95 => 
            array (
                'id' => 2096,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 16:10:23',
                'updated_at' => '2021-08-26 16:10:23',
            ),
            96 => 
            array (
                'id' => 2097,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 16:19:30',
                'updated_at' => '2021-08-26 16:19:30',
            ),
            97 => 
            array (
                'id' => 2098,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 16:20:03',
                'updated_at' => '2021-08-26 16:20:03',
            ),
            98 => 
            array (
                'id' => 2099,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 16:22:30',
                'updated_at' => '2021-08-26 16:22:30',
            ),
            99 => 
            array (
                'id' => 2100,
                'user_id' => '1',
                'ar_action' => 'قام بإضافة صورة جديدة بالمنتجات ',
                'en_action' => 'Add new product ',
                'ip' => '127.0.0.1',
                'created_at' => '2021-08-26 16:29:10',
                'updated_at' => '2021-08-26 16:29:10',
            ),
        ));
        
        
    }
}