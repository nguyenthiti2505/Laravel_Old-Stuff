<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageClub extends Model
{
    protected $table ='image_club';
    protected $filable=['id', 'id_activity','image'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function ActivityClub(){
       return $this->belongsto('App\ActivityClub');
    }
}
