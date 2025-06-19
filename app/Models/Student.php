<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     use HasFactory;

    protected $fillable = [
        'studentname', 'email', 'phone', // Add the fields you want to allow
    ];
}
