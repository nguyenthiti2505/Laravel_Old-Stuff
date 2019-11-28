<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    protected $filable=['id_user','id_prod', 'content','status'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function users(){
       return $this->belongsto('App\User');
    }
}
