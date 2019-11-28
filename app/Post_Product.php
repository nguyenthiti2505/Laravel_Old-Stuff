<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Product extends Model
{
    protected $table ='Post_Product';
    protected $filable=['id_post', 'id_prod'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Posts(){
       return $this->belongsto('App\Post');
    }
    public function Products(){
        return $this->belongsto('App\products');
     }
}
