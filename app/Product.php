<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $filable=['name', 'id_supcat', 'image', 'description', 'status'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function sub_categories(){
       return $this->belongsto('App\sup_category');
    }
}

