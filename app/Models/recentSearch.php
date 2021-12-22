<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recentSearch extends Model
{
    use HasFactory;
    protected $fillable = [
        'key_word', 'type', ' user_id' , 'guest_id'
    ];
}
