<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', // Add the fields you want to allow
    ];
}
