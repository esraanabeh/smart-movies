<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['ar_title' ,
     'en_title',
     'image',
     'ar_desc',
     'en_desc',
];

public function getAll() {
    return $this->all();
}

public function getById($id) {
    return $this->find($id);
}

public function remove($id) {
    $service = $this->find($id);
    $path = public_path('upload/services/');
    $filename = $service->image;
    File::Delete($path . $filename);
    return $service->delete();
}


}
