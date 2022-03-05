<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE Carbon\Carbon;

class AbsensiStatus extends Model
{
    use HasFactory;

    protected $table = 'absensi_status';

    public $timestamps = false;

    protected $fillable = [
        'status',
        'tanggal',
    ];

    protected $appends = [
        'absensi',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function getAbsensiAttribute(){
        $data = Absensi::where('pegawai_id',$this->pegawai_id)->whereDate('waktu', Carbon::today())->get();
        return $data;
    }
}
