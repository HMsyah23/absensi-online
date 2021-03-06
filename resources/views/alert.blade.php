<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta name="theme-color" content="#8CC152">
<title>Absensi Online | DKP3A</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="app/icons/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
        
    <div class="header header-fixed header-transparent header-logo-center">
        {{-- <a href="index.html" class="header-title color-theme">Sticky Mobile</a>
        <a href="#" data-back-button class="header-icon color-theme header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon color-theme header-icon-4"><i class="fas fa-lightbulb"></i></a> --}}
    </div>

        
    <div class="page-content pb-0">
        
        <div class="card" data-card-height="cover">
            
            <!-- shows in light mode-->
            <div class="show-on-theme-light card-center text-center">
                <img class="preload-img" src="{{asset('images/preload-logo.png')}}" width="90">
                <h1 class="color-black font-40 font-800 mt-3">ABSENSI ONLINE</h1>
                <p class="color-black opacity-50">DINAS KEPENDUDUKAN PEMBERDAYAAN PEREMPUAN <br> DAN PERLINDUNGAN ANAK</p>
                
                {{-- <p class="boxed-text-xl font-14 font-400 line-height-l color-black">
                    Silahkan Masukkan Token Untuk Masuk Ke Aplikasi
                </p> --}}

                {{-- <div class="mr-5">
                    <div class="input-style has-borders no-icon validate-field mb-4">
                        <input type="name" class="form-control validate-name" id="form1" placeholder="John">
                        <label for="form1" class="color-highlight disabled">John</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(optional)</em>
                    </div>
                </div> --}}

                <a href="#" class="btn btn-m font-900 text-uppercase rounded-l btn-center-l bg-red-dark">Aplikasi Hanya Dapat Diakses Melalui Perangkat Selular</a>
            </div>
            
            <div class="card-overlay bg-theme opacity-85"></div>
            <div class="card-overlay-infinite preload-img" data-src="{{asset('images/pictures/_bg-infinite.jpg')}}"></div>
        </div>
    
    </div>

</div>

<script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
</body>
