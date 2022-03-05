<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function laporan(Request $request)
    {
        return view('admin.laporan');
    }

    public function setting(Request $request)
    {
        return view('admin.pengaturan');
    }
}
