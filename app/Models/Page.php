<?php

namespace App\Models;
use File;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['type','content','title'];
    protected $table = 'pages';
    public function getAll() {
        return $this->all();
    }
    public function getById($id) {
        return $this->find($id);
    }

    public function edit($id, $data, $file = false) {
        $page = $this->find($id);
        $page->title = $data['title'];
        $page->content = $data['content'];
       $page->type = $data['type'];
      
        return $page->save();
    }

    
    public function remove($id) {
        $page = $this->find($id);
        $path = public_path('upload/pages/');
        $filename = $page->image;
        File::Delete($path . $filename);
        return $page->delete();
    }
}
