<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa_kelurahan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'desa_kelurahan';
}
