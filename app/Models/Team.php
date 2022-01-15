<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name','image'];

    public function getAll() {
        return $this->all();
    }
    
    public function getById($id) {
        return $this->find($id);
    }
}
