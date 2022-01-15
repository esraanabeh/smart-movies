<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['email','package_text','footer_text','ar_title','en_title'];
    public function getData() {
        return self::first();
    }
    public function edit($data) {
        $slider = $this->find('1');
        $this->ar_title = $data['ar_title'];
        $this->en_title = $data['en_title'];
        $this->ar_desc = $data['package_text'];
        $this->en_desc = $data['footer_text'];
        $this->email = $data['email'];
     
        
        return $this->save();
    }
}
