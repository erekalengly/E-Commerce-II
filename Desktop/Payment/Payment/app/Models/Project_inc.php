<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_inc extends Model
{
    use HasFactory;

    protected $table = "project_inc";

    protected $fillable = [
        'project_id',
        'name',
        'start_date',
        'end_date',
        'price'
    ];
}
