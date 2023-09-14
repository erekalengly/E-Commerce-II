<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Total_hour extends Model
{
    use HasFactory;

    protected $table = "total_hour";

    protected $fillable = [
        'emp_id',
        'degree_id',
        'dept_id'
    ];
}
