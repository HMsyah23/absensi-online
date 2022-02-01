<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        $ip = $request->ip();
        // $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
          dd($ip);
        return view('user', compact('currentUserInfo'));
    }
}
