<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function home()
    {
        return view('admin.pegawai.index');
    }

    public function index(Request $request)
    {
        $data = Pegawai::with(['bidang','sub_bidang','golongan','statusKerja'])->get();
        return response()->json(['data' => $data], 200);
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($pegawai)
    {
        $data = Pegawai::with(['bidang','sub_bidang','golongan','statusKerja'])->where('nip',$pegawai)->first();
        return response()->json(['data' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('admin.pegawai.show', compact('pegawai'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($pegawai)
    {
        $data = Pegawai::where('nip',$pegawai)->first();
        $data->delete();
        return response()->json(['data' => $data], 200);
    }
}
