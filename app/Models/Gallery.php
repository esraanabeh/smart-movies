<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use File;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = ['file', 'type','ar_title','en_title'];

    public function getAll()
    {
        return $this->all();
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function add($data, $file )
    {
        $this->type = $data['type'];
        $this->file = $file;
      
        return $this->save();
    }

    public function edit($id, $data, $file = false, )
    {
        $gallery = $this->find($id);
        
        $gallery->type = $data['type'];
       
        if ($file) {
            $path = public_path('upload/gallery/');
            $filename = $gallery->file;
            File::Delete($path . $filename);
            $gallery->file = $file;
        }

        
        return $gallery->save();
    }
}

