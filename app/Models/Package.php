<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','rate','price','is_discount','price_after_discount'];
    public function movies()
    {
        return $this->hasMany(Movie::class);
    } 
    public function getAll() {
        return $this->all();
    }
    
    public function getById($id) {
        return $this->find($id);
    }

    public function getList() {
        $lang = Config::get('app.locale');
        return $this->pluck('name', 'id')->toArray();
    }
}
