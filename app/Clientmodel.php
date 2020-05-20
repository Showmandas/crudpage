<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientmodel extends Model
{
    protected $table='client';
    protected $fillable=['name','email','phone'];
    public $timestamps=false;
    
}
