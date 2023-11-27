<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLyChiTieu extends Model
{
    use HasFactory;

    public $table = 'qlct';

    public $fillable = ['Title', 'Date', 'Money', 'Note'];
}
