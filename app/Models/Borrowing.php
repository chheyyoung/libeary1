<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentname', 'bookname', 'dateborrowed','datereturn', // Add the fields you want to allow
    ];
}
