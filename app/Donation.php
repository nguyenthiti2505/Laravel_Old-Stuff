<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table ='Donation';
    protected $filable=['id_user', 'id_prod','id_club', 'content'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Clubs(){
       return $this->belongsto('Clubs');
    }
    public function Users(){
        return $this->belongsto('App\user');
    }
    public function Products(){
        return $this->belongsto('App\product');
    }
}
