<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
// use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable 
{

    use HasFactory,
        Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
        'phone',
        'email',
        'active',
        'type',
        'image_profile',
        'password',
     
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      
        
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Group()
    {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
    
    public function getAll($type)
    {
        if ($type == 'user') {
            return $this->where('type', $type)->orWhereNull('type')->where('active', '!=', 'delete')->get();
        }
        return $this->where('type', $type)->where('active', '!=', 'delete')->get();
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function add($data)
    { // Admin
        $this->email = $data['email'];
        $this->name = $data['name'] ?? '';
        $this->ar_name = $data['ar_name'] ?? '';
        $this->en_name = $data['en_name'] ?? '';
        $this->phone = $data['phone'];
        $this->type = $data['type'];
        $this->active = $data['active'];
        $this->password = Hash::make($data['password']);
        if (isset($data['group_id'])) {
            $this->group_id = $data['group_id'];
        }
        return $this->save();
    }

    public function edit($id, $data)
    {
        $user = $this->find($id);
        $user->email = $data['email'];
         $user->name = $data['name'] ;
       
        if ($data['password'] != "") {
            $user->password = Hash::make($data['password']);
        }
        if (isset($data['group_id'])) {
            $user->group_id = $data['group_id'];
        }
        if (isset($data['active'])) {
            $user->active = $data['active'];
        }
        return $user->save();
    }

    public function edit_user($id, $data, $file = false)
    {
        $user = $this->find($id);
        $user->email = $data['email'];
        $user->name = $data['name'] ?? '';
        $user->gender = $data['gender'];
        $user->birth_date = $data['birth_date'];
        if ($data['password'] != "") {
            $user->password = Hash::make($data['password']);
        }
        if ($file) {
            $path = public_path('upload/users/');
            $filename = $user->image_profile;
            File::Delete($path . $filename);
            $user->image_profile = $file;
        }
        return $user->save();
    }

    public function remove($id)
    {
        $user = $this->find($id);
        $user->active = 'delete';
      //  $user->deleted_at = now();
        return $user->save();
    }

    public function delByBank($id)
    {
        $user = $this->find($id);
        $user->bank_id = 0;
        return $user->save();
    }


    public function getStatusAttribute()
    {
        if (!$this->phone) {
            return 2;
        } elseif ($this->active == 'no') {
            return 0;
        } elseif ($this->active == 'stopped') {
            return -1;
        }
        return 1;
    }

    

}
