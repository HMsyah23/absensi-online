<!DOCTYPE HTML>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="icon" href="{{asset('app/icons/favicon.ico')}}">
        <meta name="theme-color" content="#8CC152">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title>Absensi Online | Login Admin</title>
        <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/style.css')}}">
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/css/fontawesome-all.min.css')}}">
        <link rel="manifest" href="{{asset('manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('app/icons/icon-192x192.png')}}">
    </head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="preloader"><div class="spinner-border color-green-dark" role="status"></div></div>

<div id="page">

    <div class="page-content pb-0">

        <div data-card-height="cover" class="card">
            {{-- <div class="card-top notch-clear">
                <div class="d-flex">
                    <a href="#" data-back-button class="me-auto icon icon-m"><i class="font-14 fa fa-arrow-left color-theme"></i></a>
                    <a href="#" data-toggle-theme class="show-on-theme-light ms-auto icon icon-m"><i class="font-12 fa fa-moon color-theme"></i></a>
                    <a href="#" data-toggle-theme class="show-on-theme-dark ms-auto icon icon-m"><i class="font-12 fa fa-lightbulb color-yellow-dark"></i></a>
                </div>
            </div> --}}
            <div class="card-center">
                <div class="ps-5 pe-5">
                    <img class="text-center rounded mx-auto d-block mt-5" src="{{asset('images/preload-logo.png')}}" width="90">
                    <h1 class="text-center font-800 font-40 mb-1">Login</h1>
                    <p class="color-green-dark text-center font-12">Halaman Admin Absensi Online DKP3A</p>
                    <form id="formLogin" method="POST" action="{{ route('login.custom') }}">
                        @csrf
                    <div class="input-style no-borders has-icon validate-field">
                        <i class="fa fa-user"></i>
                        <input type="email" required name="email" class="form-control validate-name" id="form1a" placeholder="Masukkan NIP/ID" value="{{ old('email') }}" required>
                        <label for="form1a" class="color-blue-dark font-10 mt-1">NIP/ID</label>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                    </div>

                    <div class="input-style no-borders has-icon validate-field mt-4">
                        <i class="fa fa-lock"></i>
                        <input type="password" required name="password" class="form-control validate-password" id="form3a" placeholder="Masukkan Password" required>
                        <label for="form3a" class="color-blue-dark font-10 mt-1">Password</label>
                        @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>

                    {{-- <div class="form-check icon-check">
                        <input class="form-check-input" type="checkbox" value="true" name="remember" id="check3" >
                        <label class="form-check-label" for="check3">Ingat Saya</label>
                        <i class="icon-check-1 far fa-square color-gray-dark font-16"></i>
                        <i class="icon-check-2 far fa-check-square font-16 color-green-dark"></i>
                    </div> --}}

                    <a href="#" onclick="coba();" class="back-button btn btn-full btn-m shadow-large rounded-sm text-uppercase font-700 bg-green-dark">LOGIN</a>
                    {{-- <div class="divider mt-4"></div> --}}
                </form>
                    {{-- <a href="{{route('home')}}" class="btn btn-icon btn-m btn-full shadow-l rounded-sm bg-green-dark text-uppercase font-700 text-start"><i class="fas fa-users text-center bg-transparent"></i>Halaman Absensi</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Content-->
</div>

    <script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>    
    <script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('scripts/indexedDB.js')}}"></script>-->
    <script>
        function coba(){
            document.querySelector('.back-button').innerHTML = `
            <div class="spinner-border text-white" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>`;
            document.getElementById('formLogin').submit();
        }
    </script>
</body>
