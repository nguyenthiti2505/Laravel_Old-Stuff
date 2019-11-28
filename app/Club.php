<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table ='club';
    protected $filable=['name', 'email','phone', 'username','password', 'avata','address', 'status'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Active_club(){
       return $this->hasMany('App\Active_club');
    }
    public function Donation(){
        return $this->hasMany('App\Donation');
    }
}
