<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    protected $table='Medicine_categories';
    protected $fillable=['name','email','message','phone'];
    public $timestamps=false;
    public  function medichines(){
        return $this->hasMany('App\medichine');
    }
}
