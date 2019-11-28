<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='commnets';
    protected $filable=['id_user','content'];
    public $timestamps=true;
    public function Users(){
        return $this->belongsto('App\User');
     }
}
