<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTable extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'time',
        'people',
        'message'
    ];
}
