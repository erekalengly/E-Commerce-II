<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amount_type extends Model
{
    use HasFactory;

    protected $table = "amount_type";

    protected $fillable = [
        'amount',
        'id',
        'currency',
        'position'
        

    ];

}
