<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    protected $table = 'groups';
   protected $primarykey = 'group_id';
   // geting one to many result
  function member(){
    return $this->hasmany("App\Models\groups", "group_id", "group_id");
  }
}
