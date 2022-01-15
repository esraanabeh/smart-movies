<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $table = 'social_media';
    protected $fillable = ['type','link','image'];


    public function getAll() {
        return $this->all();
    }

    public function getById($id) {
        return $this->find($id);
    }

    public function edit($id, $data) {
        $social_media = $this->find($id);
        $social_media->type = $data['type'];
        $social_media->link = $data['link'];
        return $social_media->save();
    }
}
