<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Absensi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'pegawai_id', 
        'lokasi',
        'keterangan',
        'latitude',
        'longitude',
        'waktu',
        'status',
        'berkas',
        'catatan'
    ];

    protected $appends = [
        'jam',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function getJamAttribute()
    {
        return Carbon::parse($this->waktu)->isoFormat('HH:mm:ss');
    }
}
