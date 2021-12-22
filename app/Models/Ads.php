<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;
use Illuminate\Database\Eloquent\Builder;

class Ads extends Model
{

    protected $table  = 'ads';
    protected $hidden = ['created_at', 'updated_at'];
    protected static function booted()
    {
        if(not_admin()){
            static::addGlobalScope('active', function (Builder $builder) {
                $builder->where('active', 'yes');
            });
        }
    }

    public function getAll()
    {
        return $this->all();
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function add($data, $fileAr, $fileEn)
    {
        $this->en_name = $data['en_name'];
        $this->ar_name = $data['ar_name'];
        $this->active = 'yes';
        $this->sort = $data['sort'];
        $this->appear = $data['appear'];
        $this->link = $data['link'] ? $data['link'] : null;
        $this->ar_image = $fileAr;
        $this->en_image = $fileEn;
        return $this->save();
    }

    public function edit($id, $data, $file1 = false, $file2 = false)
    {
        $ads = $this->find($id);
        $ads->en_name = $data['en_name'];
        $ads->ar_name = $data['ar_name'];
        $ads->active = $data['active'];
        $ads->sort = $data['sort'];
        $ads->appear = $data['appear'];
        $ads->link = $data['link'] ? $data['link'] : null;
        if ($file1) {
            $path = public_path('upload/ads/');
            $filename = $ads->ar_image;
            File::Delete($path . $filename);
            $ads->ar_image = $file1;
        }
        if ($file2) {
            $path = public_path('upload/ads/');
            $filename = $ads->en_image;
            File::Delete($path . $filename);
            $ads->en_image = $file2;
        }
        return $ads->save();
    }

    public function remove($id)
    {
        $ads = $this->find($id);
        $path1 = public_path('upload/ads/');
        $filename1 = $ads->ar_image;
        $path2 = public_path('upload/ads/');
        $filename2 = $ads->en_image;
        File::Delete($path1 . $filename1);
        File::Delete($path2 . $filename2);
        return $ads->delete();
    }


}
