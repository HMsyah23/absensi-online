<?php

namespace App\Http\Controllers;

use App\Models\AbsensiStatus;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiStatusController extends Controller
{
    public function index()
    {
        $data = AbsensiStatus::with(['pegawai.bidang','pegawai.sub_bidang','pegawai.golongan'])->get();
        return response()->json(['data' => $data], 200);
    }

    public function pns()
    {
        $data = AbsensiStatus::with(['pegawai.bidang','pegawai.sub_bidang','pegawai.golongan'])
                            ->whereHas('pegawai', function ($query) {
                                return $query->where('pns', 1);
                            })->get();
        return response()->json(['data' => $data], 200);
    }

    public function tk()
    {
        $data = AbsensiStatus::with(['pegawai.bidang','pegawai.sub_bidang','pegawai.golongan'])
                            ->whereHas('pegawai', function ($query) {
                                return $query->where('pns', 0);
                            })->get();
        return response()->json(['data' => $data], 200);
    }

    public function reset(){
        AbsensiStatus::query()->update(['status' => 0]);
        // Absensi::truncate();
        return response()->json(['status' => 'Berhasil Mereset Status Data'], 200);
    }

    public function hadir()
    {
        $data['jumlah'] = AbsensiStatus::with(['pegawai.bidang','pegawai.sub_bidang','pegawai.golongan'])->get();
        $data['hadir']  = AbsensiStatus::with(['pegawai.bidang','pegawai.sub_bidang','pegawai.golongan'])->where('status',1)->get();
        $data['total']  = Absensi::with(['pegawai.bidang','pegawai.sub_bidang','pegawai.golongan','pegawai.statusKerja'])->whereDate('waktu', '=', now())->get()->groupBy('pegawai_id')->values();
        return response()->json(['data' => $data], 200);
    }

    public function show($id)
    {
        $data = Absensi::with(['pegawai.bidang','pegawai.sub_bidang','pegawai.golongan'])->where('pegawai_id',$id)->whereDate('waktu', '=', now())->get()->groupBy('pegawai_id')->values();
        return response()->json(['data' => $data], 200);
    }
}
