<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name', 
    //     'color', 
    //     'price'
    // ];
    protected $fillable = [
        'name', 
        'data'
    ];

    protected $casts = [
        'data' => 'array',
    ];


}
