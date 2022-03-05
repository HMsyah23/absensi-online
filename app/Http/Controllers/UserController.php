<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        if(Auth::check()){
            return view('pegawai.index');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function history(){
        if(Auth::check()){
            return view('pegawai.history',);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function show($user)
    {
        $data = User::with('pegawai')->where('id',$user)->first();
        return response()->json(['data' => $data], 200);
    }

    public function list(){
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) {
            return view('pegawai.absen');
        } 
        return redirect()->route('user.dashboard');
    }


    public function makeOut(){
        
        $pegawais = Pegawai::all();
                foreach ($pegawais as $pegawai) {
                    if ($pegawai->pns == 1) {
                        $nip = $pegawai->nip;
                    } else {
                        $nip = $pegawai->no_absensi;
                    }
                    
                    User::create([
                        'pegawai_id'  => $pegawai->id,
                        'role_id'     => 3,
                        'name'        => $pegawai->nama_lengkap,
                        'email'       => $nip,
                        'password'    => bcrypt($nip),
                    ]);
                }
        
        return dd(User::all());
    }
}
