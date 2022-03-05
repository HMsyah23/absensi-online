<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Jenssegers\Agent\Agent;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if($request->hasCookie('password') && $request->hasCookie('username')) {
            $credentials = [
                'email' => Cookie::get('username'),
                'password' => Cookie::get('password'),
            ];
            if (Auth::attempt($credentials,1)) {
                if (Auth::user()->role_id == 1) {
                    return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
                } else {
                    return redirect()->intended('user/dashboard')->withSuccess('Signed in');
                }
            }
        } else {
            return view('login');
        }
    }

    public function mobile(Request $request)
    {
        $agent = new Agent();
        if ($agent->isMobile()) {
            if($request->hasCookie('password') && $request->hasCookie('username')) {
                $credentials = [
                    'email' => Cookie::get('username'),
                    'password' => Cookie::get('password'),
                ];
                if (Auth::attempt($credentials,1)) {
                    if (Auth::user()->role_id == 1) {
                        return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
                    } else {
                        return redirect()->intended('user/dashboard')->withSuccess('Signed in');
                    }
                }
            } else {
                return view('login');
            }
        } else {
            return view('alert');
        }
    }

    public function customLogin(Request $request)
    {
        // if ($request->remember) {
        //     $remember = true;
        // } else {
        //     $remember = false;
        // }

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], 1)) {
            Cookie::queue('username',$request->email, 2628000);
            Cookie::queue('password',$request->password, 2628000);
            Cookie::queue('auth_token', Auth::user()->createToken('absensi')->plainTextToken, 2628000);
            Cache::put('remember_me', Auth::user()->remember_token);
            if (Auth::user()->role_id == 1) {
                return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
            } else {
                return redirect()->intended('user/dashboard')->withSuccess('Signed in');
            }
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        auth()->user()->tokens()->delete();
        Cookie::queue(Cookie::forget('username'));
        Cookie::queue(Cookie::forget('password'));
        Cookie::queue(Cookie::forget('auth_token'));
        Auth::logout();
    
        return Redirect()->route('login.mobile');
    }
    
}
