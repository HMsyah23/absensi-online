<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {

      $agent = new Agent();
      if($agent->isMobile()){
        $ip = $request->ip();
        // $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
          dd($ip);
      }else{
        dd($agent);
      };
        
        return view('user', compact('currentUserInfo'));
    }
}
