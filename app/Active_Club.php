<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active_Club extends Model
{
    protected $table ='Active_club';
    protected $filable=['id_club', 'content','image'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Clubs(){
       return $this->belongsto('App\club');
    }
}
