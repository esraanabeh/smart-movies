<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable = [
     'ar_name',
     'en_name',
     'ar_title',
     'en_title',
     'ar_details',
     'en_details',
      'image'
    ];


    public function getAll() {
        return $this->all();
    }
    
    public function getById($id) {
        return $this->find($id);
    }
}
