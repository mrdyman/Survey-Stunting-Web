<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten_kota extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'kabupaten_kota';
}
