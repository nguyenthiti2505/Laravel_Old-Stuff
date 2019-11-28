<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';
    protected $filable=['name'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function sup_categories(){
       return $this->hasMany('App\sup_category');
    }
}