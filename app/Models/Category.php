<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Config;

class Category extends Model
{
    use HasFactory ;


    protected $table = 'categories';
    protected $fillable = ['ar_name', 'en_name', 'image'];
    
    public function scopeSearch($query , $word){
        return $query->where('ar_name', 'Like',  $word . '%')
                    ->orWhere('en_name', 'Like',  $word . '%');
    }

    public function getList() {
        $lang = Config::get('app.locale');
        return $this->pluck($lang.'_name', 'id')->toArray();
    }
    public function stores()
    {
        return $this->belongsToMany(User::class)->where(['type'=>'seller','vendor'=>'store']);
    }
   
    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'category_product','category_id','product_id');
    }

    public function parent(){
        return $this->belongsTo(Category::class , 'parent_id');
    }

    public function categories(){
        return $this->hasMany(Category::class , 'parent_id');
    }

    public function getMytypeAttribute(){
        if($this->parent){
            return getLang($this->parent , 'name');
        }
        return __('Main Category');
    }

    
}
