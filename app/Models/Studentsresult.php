<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Studentsresult extends Model
{
     use HasFactory;
     use SoftDeletes;
    protected $table = '_students';

    protected $primarykey = 'id';
}
