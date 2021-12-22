<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model {

    protected $table = 'site';

    public function getData() {
        return self::first();
    }

    public function edit($data) {
        $slider = $this->find('1');
        $this->ar_title = $data['ar_title'];
        $this->en_title = $data['en_title'];
        $this->ar_desc = $data['ar_desc'];
        $this->en_desc = $data['en_desc'];
        $this->ar_touch = $data['ar_touch'];
        $this->en_touch = $data['en_touch'];
        $this->ar_cons = $data['ar_cons'];
        $this->en_cons = $data['en_cons'];
        $this->ar_help = $data['ar_help'];
        $this->en_help = $data['en_help'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->phone1 = $data['phone1'];
        $this->phone2 = $data['phone2'];
        $this->phone3 = $data['phone3'];
        $this->phone4 = $data['phone4'];
        $this->hotline = $data['hotline'];
        $this->whatsapp = $data['whatsapp'];
        $this->location = $data['location'];
        // if ($file1) {
        //     $path = public_path('upload/site/');
        //     $filename = $site->image;
        //     File::Delete($path . $filename);
        //     $site->image = $file1;
        // }
        // if ($file2) {
        //     $path = public_path('upload/site/');
        //     $filename = $site->twitter_image;
        //     File::Delete($path . $filename);
        //     $site->twitter_image = $file2;
        // }
        
        return $this->save();
    }

}
