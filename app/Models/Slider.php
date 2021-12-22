<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;
use Illuminate\Database\Eloquent\Builder;

class Slider extends Model
{

    protected $table = 'slider';

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

    public function add($data, $file1)
    {
        $this->ar_name = $data['ar_name'];
        $this->en_name = $data['en_name'];
        $this->ar_title = $data['ar_title'];
        $this->en_title = $data['en_title'];
      
        $this->sort = $data['sort'] ? $data['sort'] : 0;
        // $this->link = $data['link'] ? $data['link'] : null;
        $this->ar_image = $file1;
        // $this->en_image = $file2;
        return $this->save();
    }

    public function edit($id, $data, $file1 = false, $file2 = false)
    {
        $slider = $this->find($id);
        $slider->active = $data['active'];
        $slider->ar_name = $data['ar_name'];
        $slider->en_name = $data['en_name'];
        $slider->ar_title = $data['ar_title'];
        $slider->en_title = $data['en_title'];
        
        $slider->sort = $data['sort'] ? $data['sort'] : 0;
        // $slider->link = $data['link'] ? $data['link'] : null;
        if ($file1) {
            $path = public_path('upload/slider/');
            $filename = $slider->ar_image;
            File::Delete($path . $filename);
            $slider->ar_image = $file1;
        }

      
        return $slider->save();
    }

    public function remove($id)
    {
        $slider = $this->find($id);
        $path1 = public_path('upload/slider/');
        $filename1 = $slider->ar_image;
        $path2 = public_path('upload/slider/');
        $filename2 = $slider->en_image;
        File::Delete($path1 . $filename1);
        // File::Delete($path2 . $filename2);
        return $slider->delete();
    }

}
