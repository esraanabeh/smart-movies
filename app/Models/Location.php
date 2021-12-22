<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'longitude',
        'latitude',
        
        
    ];
    protected $table = 'locations';

    
    public function getAll() {
        return $this->all();
    }

    public function getById($id) {
        return $this->find($id);
    }

    public function add($data) {
        $this->longitude = $data['longitude'];
        $this->latitude = $data['latitude'];
       
        
        
        return $this->save();
    }
}
