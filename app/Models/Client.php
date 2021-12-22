<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = ['ar_name', 'en_name', 'logo'];


    public function getAll() {
        return $this->all();
    }
    
    public function getById($id) {
        return $this->find($id);
    }

    
}
