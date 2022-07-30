<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use DateTimeInterface;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'survey';
    protected $guarded = [];

    public function responden()
    {
        return $this->belongsTo(Responden::class, 'kode_unik_responden', 'kode_unik')->withTrashed();
    }

    public function namaSurvey()
    {
        return $this->belongsTo(NamaSurvey::class)->withTrashed();
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class)->withTrashed();
    }

    public function anggotaSupervisor()
    {
        return $this->hasMany(AnggotaSupervisor::class, 'profile_surveyor', 'profile_id');
    }

    public function supervisor()
    {
        return $this->hasMany(AnggotaSupervisor::class, 'profile_surveyor', 'profile_id')->groupBy('profile_dpl');
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
