<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE Carbon\Carbon;

class Pegawai extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $appends = [
        'nama_lengkap',
        'absensi',
    ];

    protected $fillable = [
        'gelar_depan', 
        'nama_depan',
        'gelar_belakang',
        'nama_belakang',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }

    public function sub_bidang()
    {
        return $this->belongsTo(SubBidang::class);
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }

    public function statusKerja()
    {
        return $this->hasOne(AbsensiStatus::class);
    }

    public function getNamaLengkapAttribute()
    {
        if ($this->gelar_depan) {
            $gelar_depan = $this->gelar_depan;
        } else {
            $gelar_depan = '';
        }

        if ($this->nama_belakang) {
            $nama_belakang = ucfirst(strtolower($this->nama_belakang));
        } else {
            $nama_belakang = '';
        }

        if ($this->gelar_belakang) {
            $gelar_belakang = $this->gelar_belakang;
        } else {
            $gelar_belakang = '';
        }

        return $gelar_depan . ' ' . ucfirst(strtolower($this->nama_depan)) . ' ' . $nama_belakang . ' ' . $gelar_belakang;
    }

    public function getAbsensiAttribute(){
        $data = Absensi::where('pegawai_id',$this->id)->whereDate('waktu', Carbon::today())->get();
        return $data;
    }
}