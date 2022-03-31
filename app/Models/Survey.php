<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'survey';
    protected $guarded = [];

    public function responden()
    {
        return $this->belongsTo(Responden::class, 'kode_unik_responden', 'kode_unik');
    }

    public function namaSurvey()
    {
        return $this->belongsTo(NamaSurvey::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
