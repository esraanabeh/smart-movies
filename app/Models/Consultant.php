<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    protected $table = 'consultants';

    public function getAll() {
        return $this->all();
    }

    public function getById($id) {
        return $this->find($id);
    }

    public function add($data) {
        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->consultant = $data['consultant'];
        $this->reply = "";
        return $this->save();
    }

    public function update_seen($id) {
        $one = $this->find($id);
        $one->seen = 'yes';
        return $one->save();
    }

    public function edit($id, $data) {
        $consultant = $this->find($id);
        if ($data['reply'] != "") {
            $consultant->reply = $data['reply'];
        } else {
            $consultant->reply = "";
        }
        return $consultant->save();
    }

    public function remove($id) {
        $consultant = $this->find($id);
        return $consultant->delete();
    }

    public function delByComplaint($id) {
        return $this->where('complaint_id', $id)->delete();
    }
}
