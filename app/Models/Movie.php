<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','video','package_id'];
    public function package()
    {
        return $this->belongsTo(Package::class);
    } 

    public function getAll() {
        return $this->all();
    }
    
    public function getById($id) {
        return $this->find($id);
    }

  
}
