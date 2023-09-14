<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = "salary";

    protected $fillable = [
        'salary_id',
        'degree_id',
        'academicyear_id'
    ];
}
