<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students_records extends Model
{
    use HasFactory;

    protected $table = 'students_records'; // Ensure this matches your table name

    // Specify the fillable fields
    protected $fillable = [
        'name',
        'date_of_birth',
        'grade',
        '_token', // Add _token here to allow mass assignment
    ];
}
