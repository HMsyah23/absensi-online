<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Models\Absensi;
use App\Models\AbsensiStatus;
use Illuminate\Http\Request;
use Mockery\Undefined;

class AbsensiController extends Controller
{

    public function getDistance($latitude2, $longitude2)
    {
        $latitude1  = -0.4951850200423182; 
        $longitude1 = 117.15572739337195;
        $earth_radius = 6371;

        $dLat = deg2rad($latitude2 - $latitude1);
        $dLon = deg2rad($longitude2 - $longitude1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * asin(sqrt($a));
        $d = $earth_radius * $c;

        return $d;
    }

    public function index()
    {
        $data = Absensi::with(['pegawai.bidang', 'pegawai.sub_bidang', 'pegawai.golongan', 'pegawai.statusKerja'])->get();
        return response()->json(['data' => $data], 200);
    }

    public function hadir()
    {
        $data = Absensi::with(['pegawai.bidang', 'pegawai.sub_bidang', 'pegawai.golongan', 'pegawai.statusKerja'])->whereDate('waktu', '=', now())->get()->groupBy('pegawai_id')->values();
        return response()->json(['data' => $data], 200);
    }

    public function create()
    {
        //
    }

    public function datang(Request $r)
    {
        $distance['radius'] = $this->getDistance($r['latitude'], $r['longitude']);
        // $distance['radius'] = $this->getDistance(-0.4951850200423182, 117.15572739337195);
        $r['latitude'] = -0.4951850200423182;
        $r['longitude'] = 117.15572739337195;
        $distance['latitude'] = $r['latitude'];
        $distance['longitude'] = $r['longitude'];
        $distance['lokasi'] = 250 / 1000;
        $distance['lokasi'];

        if (empty($r->file('berkas'))) {
            $r['berkas'] = null;
        }

        // $distance['alamatMAC'] = shell_exec('getmac');
        // $distance['alamatIP'] = $r->ip();
        // $distance['keterangan'] = "Anda Tidak Berada Dalam Radius Kantor";

        // Status :
        //     1 : Datang
        //     2 : Pulang
        //     3 : Dinas Luar
        //     4 : Diklat/Bimtek
        //     5 : Sakit
        //     6 : Ijin
        //     7 : Cuti
        
        if ($r->keterangan == "Sakit" || $r->keterangan == "Menghadiri Rapat") {
            $validator = Validator::make($r->all(), [
                'berkas' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
            ]);       
            if ($validator->fails()) {
                return response()->json(['message' => $validator->messages(), 'status' => 400], 200);
            }
        }
        
        if (($distance['radius'] > $distance['lokasi']) && ($r['lokasi'] == "1")) {
            if ($r['keterangan'] != "0") {
                $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
                return response()->json(['lokasi' => 0, 'status' => 'Data Valid', 'data' => $absen, 'jarak' => $distance], 200);
            } else {
                $distance['keterangan'] = "Anda Tidak Berada Dalam Radius Kantor";
                return response()->json(['lokasi' => 1, 'status' => 'Data Gagal Ditambahkan', 'data' => $distance], 200);
            }
        } else {
            $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
        }
        return response()->json(['lokasi' => 0, 'status' => 'Data Valid', 'data' => $absen, 'jarak' => $distance], 200);
    }

    public function simpanDatang(Request $r)
    {
        $distance['radius'] = $this->getDistance($r['latitude'], $r['longitude']);
        // $distance['radius'] = $this->getDistance(-0.4951850200423182, 117.15572739337195);
        $r['latitude'] = -0.4951850200423182;
        $r['longitude'] = 117.15572739337195;
        $distance['latitude'] = $r['latitude'];
        $distance['longitude'] = $r['longitude'];
        $distance['lokasi'] = 250 / 1000;
        $distance['lokasi'];

        if (empty($r->file('berkas'))) {
            $r['berkas'] = null;
        }
        $berkas = null;

        if ($r->keterangan == "Sakit" || $r->keterangan == "Menghadiri Rapat") {
            $validator = Validator::make($r->all(), [
                'berkas' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
            ]);
                    
            if ($validator->fails()) {
                    return response()->json(['message' => $validator->messages(), 'status' => 400], 200);
            }

                $file = $r->file('berkas') ;
                $fileName = now()->toDateString().$file->hashName();
                $folder = '/absensi/lampiran';
                $destinationPath = public_path().'/'.$folder;
                $file->move($destinationPath,$fileName);
                $berkas = $folder."/".$fileName;
        }
        
        if (($distance['radius'] > $distance['lokasi']) && ($r['lokasi'] == "1")) {
            if ($r['keterangan'] != "0") {
                $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
                $absen->update(['status' => 1,'tanggal' => now()]);
                if ($absen->pegawai->pns == 1) {
                    $r['lokasi'] = 1;
                }
                $distance['keterangan'] = "Anda Berada Dalam Radius Kantor";
                Absensi::create([
                    'pegawai_id'  => $r['pegawai_id'],
                    'lokasi'      => $r['lokasi'],
                    'keterangan'  => $r['keterangan'],
                    'latitude'    => $r['latitude'],
                    'longitude'   => $r['longitude'],
                    'waktu'       => now(),
                    'status'      => 1,
                    'berkas'      => $berkas,
                    'catatan'     => $r['catatan'],
                ]);
                return response()->json(['lokasi' => 0, 'status' => 'Data Berhasil Ditambahkan', 'data' => $absen, 'jarak' => $distance], 200);
            } else {
                $distance['keterangan'] = "Anda Tidak Berada Dalam Radius Kantor";
                return response()->json(['lokasi' => 1, 'status' => 'Data Gagal Ditambahkan', 'data' => $distance], 200);
            }
        } else {
            
            $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
            $absen->update(['status' => 1,'tanggal' => now()]);
            if ($absen->pegawai->pns == 1) {
                $r['lokasi'] = 1;
            }
            $distance['keterangan'] = "Anda Berada Dalam Radius Kantor";
            Absensi::create([
                'pegawai_id'  => $r['pegawai_id'],
                'lokasi'      => $r['lokasi'],
                'keterangan'  => $r['keterangan'],
                'latitude'    => $r['latitude'],
                'longitude'   => $r['longitude'],
                'waktu'       => now(),
                'status'      => 1,
                'berkas'      => $berkas,
                'catatan'     => $r['catatan'],
            ]);
        }

        return response()->json(['lokasi' => 0, 'status' => 'Data Berhasil Ditambahkan', 'data' => $absen, 'jarak' => $distance], 200);
    }

    public function dinas(Request $r)
    {
        $distance['radius'] = $this->getDistance($r['latitude'], $r['longitude']);
        // $distance['radius'] = $this->getDistance(-0.4951850200423182, 117.15572739337195);
        $r['latitude'] = -0.4951850200423182;
        $r['longitude'] = 117.15572739337195;
        $distance['latitude'] = $r['latitude'];
        $distance['longitude'] = $r['longitude'];
        $distance['lokasi'] = 250 / 1000;
        $distance['lokasi'];
        
        if (($distance['radius'] > $distance['lokasi']) && ($r['lokasi'] == "1")) {
            if ($r->keterangan == "Dinas Luar" || $r->keterangan == "Diklat/Bimtek" || $r->keterangan == "Sakit" || $r->keterangan == "Ijin" || $r->keterangan == "Cuti") {
                $validator = Validator::make($r->all(), [
                    'berkas' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
                ]);
                        
                if ($validator->fails()) {
                        return response()->json(['message' => $validator->messages(), 'status' => 400], 200);
                }
            
                $file = $r->file('berkas') ;
                $fileName = now()->toDateString().$file->hashName();
                $folder = '/absensi/lampiran';
                $destinationPath = public_path().'/'.$folder;
                $file->move($destinationPath,$fileName);
                $berkas = $folder."/".$fileName;
        
                $dates = explode(",",$r['dates']);
                foreach ($dates as $key => $value) {
                    Absensi::create([
                        'pegawai_id'  => $r['pegawai_id'],
                        'lokasi'      => $r['lokasi'],
                        'keterangan'  => $r['keterangan'],
                        'latitude'    => $r['latitude'],
                        'longitude'   => $r['longitude'],
                        'waktu'       => Carbon::parse(substr($value,0,34))->toDateTimeString(),
                        'status'      => 1,
                        'berkas'      => $berkas,
                        'catatan'     => $r['catatan'],
                    ]);
                    Absensi::create([
                        'pegawai_id'  => $r['pegawai_id'],
                        'lokasi'      => $r['lokasi'],
                        'keterangan'  => $r['keterangan'],
                        'latitude'    => $r['latitude'],
                        'longitude'   => $r['longitude'],
                        'waktu'       => Carbon::parse(substr($value,0,34))->toDateTimeString(),
                        'status'      => 2,
                        'berkas'      => $berkas,
                        'catatan'     => $r['catatan'],
                    ]);

                    if(end($dates) == $value) {
                        $date = Carbon::parse(substr($value,0,34))->toDateTimeString();
                    }
                }
            }
                $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
                $absen->update(['status' => 2,'tanggal' => $date]);
                $distance['keterangan'] = "Anda Berada Dalam Radius Kantor";
                return response()->json(['lokasi' => 0, 'status' => 'Data Berhasil Ditambahkan', 'data' => $absen, 'jarak' => $distance], 200);
        } else {
            if ($r->keterangan == "Dinas Luar" || $r->keterangan == "Diklat/Bimtek" || $r->keterangan == "Sakit" || $r->keterangan == "Ijin" || $r->keterangan == "Cuti") {
                $validator = Validator::make($r->all(), [
                    'berkas' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
                ]);
                    
                if ($validator->fails()) {
                    return response()->json(['message' => $validator->messages(), 'status' => 400], 200);
                }
        
                $file = $r->file('berkas') ;
                $fileName = now()->toDateString().$file->hashName();
                $folder = '/absensi/lampiran';
                $destinationPath = public_path().'/'.$folder;
                $file->move($destinationPath,$fileName);
                $berkas = $folder."/".$fileName;
    
                $dates = explode(",",$r['dates']);
                foreach ($dates as $key => $value) {
                    Absensi::create([
                        'pegawai_id'  => $r['pegawai_id'],
                        'lokasi'      => $r['lokasi'],
                        'keterangan'  => $r['keterangan'],
                        'latitude'    => $r['latitude'],
                        'longitude'   => $r['longitude'],
                        'waktu'       => Carbon::parse(substr($value,0,34))->toDateTimeString(),
                        'status'      => 1,
                        'berkas'      => $berkas,
                        'catatan'     => $r['catatan'],
                    ]);
                    Absensi::create([
                        'pegawai_id'  => $r['pegawai_id'],
                        'lokasi'      => $r['lokasi'],
                        'keterangan'  => $r['keterangan'],
                        'latitude'    => $r['latitude'],
                        'longitude'   => $r['longitude'],
                        'waktu'       => Carbon::parse(substr($value,0,34))->toDateTimeString(),
                        'status'      => 2,
                        'berkas'      => $berkas,
                        'catatan'     => $r['catatan'],
                    ]);
                    
                    if(end($dates) == $value) {
                        $date = Carbon::parse(substr($value,0,34))->toDateTimeString();
                    }
                }
            }
            $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
            $absen->update(['status' => 2,'tanggal' => $date]);
            $distance['keterangan'] = "Anda Berada Dalam Radius Kantor";
        }

        return response()->json(['lokasi' => 0, 'status' => 'Data Berhasil Ditambahkan', 'data' => $absen, 'jarak' => $distance], 200);
    }

    public function pulang(Request $r)
    {
        $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
        $absensi = Absensi::where('pegawai_id', $r['pegawai_id'])->whereDate('waktu', '=', now())->first();

        if ($absensi->keterangan == "Menghadiri Rapat") {
            $validator = Validator::make($r->all(), [
                'berkas' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
            ]);       
            if ($validator->fails()) {
                return response()->json(['message' => $validator->messages(), 'status' => 400], 200);
            }
        }
        return $this->simpanPulang($r);
    }

    public function simpanPulang(Request $r)
    {
        $distance['radius'] = $this->getDistance($r['latitude'], $r['longitude']);
        $r['latitude'] = -0.4951850200423182;
        $r['longitude'] = 117.15572739337195;
        $distance['latitude'] = $r['latitude'];
        $distance['longitude'] = $r['longitude'];
        $distance['lokasi'] = 250 / 1000;
        $distance['lokasi'];

        if (empty($r->file('berkas'))) {
            $r['berkas'] = null;
        }

        $absen = AbsensiStatus::where('pegawai_id', $r['pegawai_id'])->first();
        $absen->update(['status' => 2]);
        $absensi = Absensi::where('pegawai_id', $r['pegawai_id'])->whereDate('waktu', '=', now())->first();

        $berkas = NULL;

        if ($absensi->keterangan == "Menghadiri Rapat") {
            $file = $r->file('berkas') ;
            $fileName = now()->toDateString().$file->hashName();
            $folder = '/absensi/lampiran';
            $destinationPath = public_path().'/'.$folder;
            $file->move($destinationPath,$fileName);
            $berkas = $folder."/".$fileName;
        }

        Absensi::create([
            'pegawai_id'  => $r['pegawai_id'],
            'lokasi'      => $absensi->lokasi,
            'keterangan'  => $absensi->keterangan,
            'latitude'    => $r['latitude'],
            'longitude'   => $r['longitude'],
            'waktu'       => now(),
            'status'      => 2,
            'berkas'      => $berkas,
            'catatan'     => $r['catatan'],
        ]);

        return response()->json(['status' => 'Data Berhasil Ditambahkan', 'data' => $absen, 'absensi' => $absensi], 200);
    }

    public function store(Request $r)
    {
    }

    public function show($id)
    {
        $data = Absensi::with(['pegawai.bidang', 'pegawai.sub_bidang', 'pegawai.golongan','pegawai.statusKerja'])->where('id',$id)->first();
        return response()->json(['data' => $data], 200);
    }

    public function pegawai($id)
    {
        $data = AbsensiStatus::with(['pegawai.bidang', 'pegawai.sub_bidang', 'pegawai.golongan'])->where('pegawai_id',$id)->first();
        return response()->json(['data' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
