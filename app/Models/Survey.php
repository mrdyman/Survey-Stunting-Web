<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'survey';

    public function responden()
    {
        return $this->belongsTo(Responden::class);
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
