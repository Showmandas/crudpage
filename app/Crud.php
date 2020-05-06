<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $table='cruddata';
    protected $fillable=['name','email','message'];
    public $timestamps=false;
   
}
