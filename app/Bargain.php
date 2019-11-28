<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bargain extends Model
{
    protected $table ='Bargains';
    protected $filable=['id_user','id_prod','price'];
   public $timestamps=true;
   //Du dung 2 truong created and updated 
   public function Products(){
      return $this->hasMany('App\Product');
   }
}

