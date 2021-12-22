<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    public  $timestamps = true;
    protected $fillable = ['image_url', 'imagable_id','imagable_type'];

    public function imagable()
    {
        return $this->morphTo();
    }
}
