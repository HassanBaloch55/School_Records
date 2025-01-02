<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
  Use HasFactory;
  protected $table = 'Registers';
  protected $primarykey = 'id';


  public function setCityAttributes ($value){
    $this->attributes['City']= ucwords($value);
}
   public function getCreate_atAttribute($value){
       return date("d-M-Y" , strtotime($value));
   }


};
