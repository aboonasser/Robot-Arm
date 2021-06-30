<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class controll extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Engine_1',
        'Engine_2',
        'Engine_3',
        'Engine_4',
        'Engine_5',
        'Engine_6',


    ];

}
