<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    protected $table ='slide';
    protected $filable=['image'];
    public $timestamps=true;
}
