<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sup_category extends Model
{
    protected $table ='sub_categories';
    protected $filable=['id_cat','name'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Products(){
       return $this->hasMany('App\Product');
    }
    public function categories(){
        return $this->belongsto('App\category');
     }
}
