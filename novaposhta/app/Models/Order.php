<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_name',
        'fitst_name',
        'telephone',
        'email',
        'status',
        'payment',
        'citie',
        'department',
    ];
}
