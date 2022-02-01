<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Absensi Online | Home</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center">
        <a href="index.html" class="header-title">Absensi Online</a>
        {{-- <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a> --}}
    </div>
    
    <div id="footer-bar" class="footer-bar-1">
        <a href="{{route('home')}}"  class="active-nav"><i class="fa fa-home"></i><span>Absensi</span></a>
        <a href="{{route('daftar-hadir')}}"><i class="fa fa-users"></i><span>Daftar Hadir</span></a>
    </div>
        
    <div class="page-content header-clear-medium">
        
        <div class="card card-style bg-theme pb-0">
            <div class="content" id="tab-group-3">
				<p class="text-center">
					<small><strong>Dinas Kependudukan, Pemberdayaan Perempuan dan Perlindungan Anak Prov. Kaltim</strong></small> <br> Ini adalah absensi online dalam rangka Pencegahan Penyebaran Corona Virus Disease 2019 (Covid-19) di Dinas Kependudukan, Pemberdayan Perempuan dan Perlindungan Anak Prov. Kaltim
				</p>
                <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-green-dark">
                    <a href="#" class="no-effect" data-active data-bs-toggle="collapse" data-bs-target="#tab-8">Pegawai Negeri Sipil</a>
                    <a href="#" class="no-effect" data-bs-toggle="collapse" data-bs-target="#tab-9">Tenaga Kontrak</a>
                </div>
                <div class="clearfix mb-3"></div>
                <div data-bs-parent="#tab-group-3" class="collapse show" id="tab-8">
                    <div class="content mb-2">
                        <h3>Daftar Pegawai Negeri Sipil</h3>
                        <div class="list-group list-custom-large">    
                            <a href="#" data-menu="modal-wizard-step-1">
                                <img src="images/pictures/faces/1n.png" class="me-3 rounded-circle shadow-l" width="50">
                                <span>Hj. Noryani Sorayalita S.E., M.M</span>
                                <span class="badge bg-blue-dark">Absen Masuk</span>
                                <strong>NIP : 196512151986012002</strong>
                                <i class="fa fa-angle-right"></i>      
                            </a>   
                        </div>
                    </div>
                </div>
                <div data-bs-parent="#tab-group-3" class="collapse" id="tab-9">
                    <div class="content mb-2">
                        <h3>Daftar Tenaga Kontrak</h3>
                        <div class="list-group list-custom-large">    
                            <a href="#" data-menu="menu-wizard-step-1">
                                <img src="images/pictures/faces/1s.png" class="me-3 rounded-circle shadow-l" width="50">
                                <span>Hj. Noryani Sorayalita S.E., M.M</span>
                                <span class="badge bg-blue-dark">Absen Masuk</span>
                                {{-- <strong>NIP : 1922235786235896</strong> --}}
                                <i class="fa fa-angle-right"></i>      
                            </a>   
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    <!-- End of Page Content--> 

    <!-- Form Wizard Modal-->
	<!-- Form Wizard Modal-->
	<!-- Form Wizard Modal-->
	<!-- Form Wizard Modal-->
	<!-- Form Wizard Modal-->
	<div id="modal-wizard-step-1" class="menu menu-box-modal rounded-m" data-menu-width="330">
		<div class="content">
			<h1 class="pt-4 mt-3">Absensi Online</h1>
				<p>
					<small><strong>Dinas Kependudukan, Pemberdayaan Perempuan dan Perlindungan Anak Prov. Kaltim</strong></small>
				</p>
				<h5>Lokasi Bekerja</h5>
				<div class="input-style has-borders no-icon mb-4">
					<label for="form5" class="color-highlight disabled">Pilih Lokasi</label>
					<select id="form5">
						<option value="default" disabled selected>Pilih Lokasi</option>
						<option value="1">Kantor (WFO)</option>
						<option value="2">Rumah (WFH)</option>
						<option value="3">Lainnya</option>
					</select>
					<span><i class="fa fa-chevron-down"></i></span>
					<i class="fa fa-check disabled valid color-green-dark"></i>
					<i class="fa fa-check disabled invalid color-red-dark"></i>
					<em></em>
				</div>
                <h5>Keterangan Dinas</h5>
				<div class="input-style has-borders no-icon mb-4">
					<label for="form5" class="color-highlight disabled">Pilih Keterangan Dinas</label>
					<select id="form5">
						<option value="default" disabled selected>Pilih Keterangan Dinas</option>
						<option value="1">Dinas Luar</option>
						<option value="2">Diklat</option>
						<option value="3">Sakit</option>
						<option value="4">Ijin</option>
					</select>
					<span><i class="fa fa-chevron-down"></i></span>
					<i class="fa fa-check disabled valid color-green-dark"></i>
					<i class="fa fa-check disabled invalid color-red-dark"></i>
					<em>(optional)</em>
				</div>
			<a href="#" data-menu="modal-wizard-step-4" class="btn btn-full btn-m rounded-m bg-blue-dark font-700 text-uppercase mt-4 mb-4">Absen Masuk</a>				
		</div>
	</div>

	<div id="modal-wizard-step-4"  class="menu menu-box-modal rounded-m" data-menu-width="330">
		<div class="content text-center px-3">
			<i class="fa fa-check-circle scale-box color-green-dark fa-5x pb-3 pt-2"></i>
			<h1>Terima Kasih!</h1>
			<p class="px-2 mb-3">
				Data absensi Anda telah kami rekam kedalam database sistem, Selamat Bekerja!
			</p>
			<a href="#" class="close-menu btn btn-full btn-m rounded-m bg-green-dark font-700 text-uppercase mb-4">Kerja</a>
		</div>
	</div>
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
