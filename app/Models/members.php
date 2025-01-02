<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class members extends Model
{
    protected $table = 'members';
  protected $primarykey = 'id';
    // geting one to one result
  function group(){
    return $this->hasOne("App\Models\groups", "group_id");
  }


}
