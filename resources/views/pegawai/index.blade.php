<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" href="{{ asset('app/icons/favicon.ico') }}">
    <meta name="theme-color" content="#8CC152">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Absensi Online | Pegawai</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/icons/icon-192x192.png') }}">
    <style>
        .sembunyi {
            display: none;
        }
        #videoCanvas {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        canvas{
            position: absolute;
        }
    </style>
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

    <div id="preloader">
        <div class="spinner-border color-green-dark" role="status"></div>
    </div>

    <div id="page">

        <div class="header header-fixed header-auto-show header-logo-center">
            <a href="index.html" class="header-title">Absensi Online</a>
            {{-- <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a> --}}
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-1">
            <a href="{{ route('user.dashboard') }}" class="color-green-dark"><i
                    class="fa fa-home "></i><span>Dashboard</span></a>
            @if (Auth::user()->role->role == 'Super Admin' || Auth::user()->role->role == 'Admin')
                <a href="{{ route('user.list') }}"><i class="fa fa-users"></i><span>Daftar Hadir</span></a>
            @endif
            <a href="{{ route('user.logout') }}"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </div>

        <div class="page-content header-clear-small">

            <div class="card card-style">
                <div class="d-flex content">
                    <div class="flex-grow-1">
                        <div>
                            <h3 class="font-700 mb-1">{{ Auth::user()->pegawai->nama_lengkap }}</h3>
                            <p class="mb-0 pb-1 pe-3">
                                @if (Auth::user()->pegawai->nip)
                                    NIP : {{ Auth::user()->pegawai->nip }}
                                @else
                                    ID : {{ Auth::user()->pegawai->no_absensi }}
                                @endif
                            </p>
                            <span id="pegawaiStatus" >
                                @if (!Auth::user()->pegawai->absensi->isEmpty())
                                    <div class="badge bg-success">
                                        @if (Auth::user()->pegawai->absensi[0]->lokasi == 1)
                                            Work From Office
                                        @else
                                            Work From Home
                                        @endif
                                    </div>
                                    <div class="badge bg-dark" id="bdgBekerja">
                                        @if (Auth::user()->pegawai->absensi[0]->keterangan != '0')
                                            {{Auth::user()->pegawai->absensi[0]->keterangan}}
                                        @else
                                          @if (isset(Auth::user()->pegawai->absensi[1]->keterangan))
                                            @if (Auth::user()->pegawai->absensi[1]->keterangan != '0')
                                              {{Auth::user()->pegawai->absensi[1]->keterangan}}
                                            @else
                                              Selesai Bekerja
                                            @endif
                                          @else
                                            Sedang Bekerja
                                          @endif
                                        @endif
                                    </div>
                                    <br>
                                    <div class="badge bg-primary">
                                        Hadir | {{Auth::user()->pegawai->absensi[0]->jam ?? '-'}}
                                    </div>
                                    <div class="badge bg-warning text-dark" id="bdgPulang">
                                        Pulang | {{Auth::user()->pegawai->absensi[1]->jam ?? '-'}}
                                    </div>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/50" 
                        @if (Auth::user()->pegawai->photo)
                            data-src="{{ url('/').Auth::user()->pegawai->photo }}"
                        @else
                            data-src="{{ 'https://via.placeholder.com/50' }}"
                        @endif
                        width="80" class="rounded-circle mt- shadow-xl preload-img">
                    </div>
                </div>
            </div>

            <div class="card card-style">
                <div class="content">
                    <h1 class="text-center"><span class="color-green-dark">Absensi Online</span></h1>
                    <div class="divider"></div>
                    <div class="row mb-0 text-center">
                        <a href="#" onclick="showMasuk()" class="col-4">
                            <i class="fa fa-calendar-alt font-30 color-blue-dark"></i>
                            <p class="font-11 font-700 text-uppercase">Absen Masuk</p>
                        </a>
                        <a href="#" onclick="showPulang()" class="col-4">
                            <i class="fa fa-calendar-alt font-30 color-yellow-dark"></i>
                            <p class="font-11 font-700 text-uppercase">Absen Pulang</p>
                        </a>
                        {{-- <a href="{{route('user.history')}}" class="col-4">
                            <i class="fa fa-history font-30 color-green-dark"></i>
                            <p class="font-11 font-700 text-uppercase">Riwayat</p>
                        </a> --}}
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Page Content-->
    </div>

    <div id="instant-2" class="menu menu-box-left" data-menu-width="cover" data-menu-effect="menu-over">

        <div class="card card-style preload-img mt-3" data-src="{{ asset('images/pictures/_bg-infinite.jpg') }}"
            data-card-height="130">
            <div class="card-center ms-3">
                <h1 class="color-white mb-0">Absen Masuk</h1>
                <p class="color-white mt-n1 mb-0">Absensi Masuk Pegawai</p>
            </div>
            <div class="card-center me-3">
                <a href="#"
                    class="close-menu btn btn-m float-end rounded-xl shadow-xl text-uppercase font-800 bg-blue-dark"><i
                        class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </div>

        <div class="content">
            <div class="input-style has-borders no-icon mb-4">
                <input type="hidden" id="idPegawai" value="{{ Auth::user()->pegawai->id }}">
                <label for="lokasi" class="color-blue-dark">Pilih Lokasi</label>
                <select required id="lokasi">
                    <option value="1" disabled selected>Pilih Lokasi</option>
                    <option value="1">Kantor (WFO)</option>
                    <option value="2">Rumah (WFH)</option>
                </select>
                <span><i class="fa fa-chevron-down"></i></span>
                <em></em>
            </div>
            <div class="input-style has-borders no-icon mb-4">
                <label for="keterangan" class="color-blue-dark">Pilih Keterangan Dinas</label>
                <select required onchange="keteranganDinas()" id="keterangan">
                    <option value="0" disabled selected>Pilih Keterangan Dinas</option>
                    <option value="0">Tidak Ada</option>
                    <option>Dinas Luar</option>
                    <option>Diklat/Bimtek</option>
                    <option>Menghadiri Rapat</option>
                    <option>Sakit</option>
                    <option>Ijin</option>
                    <option>Cuti</option>
                </select>
                <span><i class="fa fa-chevron-down"></i></span>
                <em></em>
            </div>

            <div id="tanggal" class="row mb-4 sembunyi">
                <div class="col-6">
                    <div class="has-borders no-icon">
                        <label for="sejak" class="color-blue-dark">Sejak Tanggal</label>
                        <input required type="date" value="{{ date('Y-m-d') }}" class="form-control validate-text"
                            id="sejak" placeholder="Sejak Tanggal">
                    </div>
                </div>
                <div class="col-6">
                    <div class="has-borders no-icon">
                        <label for="hingga" class="color-blue-dark">Hingga Tanggal</label>
                        <input required type="date" value="{{ date('Y-m-d') }}" class="form-control validate-text"
                            id="hingga" placeholder="Hinggal Tanggal">
                    </div>
                </div>
            </div>

            <div id="uploadBukti" class="has-borders no-icon mb-4">
                <label for="bukti" class="color-blue-dark">Upload Bukti**</label><br>
                <strong id="errorBerkas"></strong>
                <input type="file" required class="form-control" id="bukti" placeholder="Bukti Surat">
                <small>**Berikan Bukti Autentik</small>
                <small>**Ukuran File Max : 2Mb</small>
            </div>

            <div id="jelas" class="input-style has-borders no-icon mb-4">
                <textarea id="catatan" placeholder="Masukkan Keterangan Tambahan"></textarea>
                <label for="catatan" class="color-blue-dark">Masukkan Keterangan Tambahan</label>
                <em class="mt-n3">(optional)</em>
            </div>
        </div>

        {{-- Kalau Absensi Wajah valid diubah menjadi 1 --}}
        <a href="#" id="datangBtn" 
        onclick="absenDatang('valid')"
        {{-- data-menu="menu-author-2" --}}
            class="btn bg-blue-dark btn-full btn-m rounded-s text-uppercase font-900 me-3 ms-3 mt-2 mb-3">Absen
            Masuk</a>
    </div>

    <div id="instant-3" class="menu menu-box-left" data-menu-width="cover" data-menu-effect="menu-over">

        <div class="card card-style preload-img mt-3" data-src="{{ asset('images/pictures/_bg-infinite.jpg') }}"
            data-card-height="130">
            <div class="card-center ms-3">
                <h1 class="color-white mb-0">Absen Pulang</h1>
                <p class="color-white mt-n1 mb-0">Absensi Pulang Pegawai</p>
            </div>
            <div class="card-center me-3">
                <a href="#"
                    class="close-menu btn btn-m float-end rounded-xl shadow-xl text-uppercase font-800 bg-yellow-dark"><i
                        class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </div>

        <div class="content">
            <div class="input-style has-borders no-icon mb-4">
                <textarea id="keteranganPulang" placeholder="Masukkan Keterangan"></textarea>
                <label for="keteranganPulang" class="color-yellow-dark">Masukkan Keterangan</label>
                <em class="mt-n3">(optional)</em>
                <small>(Hanya diisi jika Pegawai pulang diluar jadwal kerja)</small>
            </div>
            <div id="uploadBukti" class="has-borders no-icon mb-4">
                <label for="bukti" class="color-blue-dark">Upload Bukti**</label><br>
                <strong id="errorBerkasPulang"></strong>
                <input type="file" required class="form-control" id="buktiPulang" placeholder="Bukti Surat">
                <small>(Hanya diunggah jika Pegawai pulang diluar jadwal kerja)</small> <br>
                <small>**Upload Bukti jika telah selesai menghadiri rapat</small> <br>
                <small>**Ukuran File Max : 2Mb</small>
            </div>
        </div>

        {{-- Kalau Absensi Wajah valid diubah menjadi 2 --}}
        <a href="#" id="pulangBtn" onclick="absenPulang('valid')"
            class="btn bg-yellow-dark btn-full btn-m rounded-s text-uppercase font-900 me-3 ms-3 mt-2 mb-3">Absen
            Pulang</a>
    </div>

    <div id="instant-4" class="menu menu-box-left" data-menu-height="cover" data-menu-width="cover">
        <div class="card card-style bg-transparent shadow-0 mb-0" style="height:100%;">
            <div class="card-center text-center">
                <i class="fa fa-check-circle scale-box color-green-dark fa-5x pb-3 pt-3"></i>
                <h1>Terima Kasih!</h1>
                <p class="px-2 mb-3" id="pesan">
                    
                </p>
                <small class="badge bg-red-dark"><strong>Jika terdapat surat keterangan yang wajib diberikan,<br>mohon
                        segera diberikan kepada pihak terkait</strong></small>
            </div>
            <div class="card-bottom mb-5 pb-3">
                <a href="#" id="pesanBtn"
                    class="close-menu btn btn-full btn-m rounded-m bg-green-dark font-700 text-uppercase"></a>
            </div>
        </div>
    </div>

    <div id="instant-5" class="menu menu-box-left" data-menu-height="cover" data-menu-width="cover">
        <div class="card card-style preload-img mt-3" data-src="{{ asset('images/pictures/_bg-infinite.jpg') }}"
            data-card-height="130">
            <div class="card-center ms-3 text-center">
                <h1 class="color-white mb-0">Deteksi Wajah</h1>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </div>

        <div class="content">
            <div id="videoCanvas">
                <video style='border: 1px solid #8CC152; border-radius: 25px;' id="videoInput" width="400" height="700" muted></video>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/custom2.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('scripts/face-api.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/script.js') }}"></script> --}}
    <script>
        URL = `{{url('/')}}`;

        let latitude, longitude;
        navigator.geolocation.watchPosition(position => {
            latitude = position.coords['latitude'];
            longitude = position.coords['longitude'];
        })

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert(
                    "Browser tidak mensupport aplikasi ini \n gunakan chrome atau safari agar dapat melakukan absensi online"
                    );
            }
        }

        function showPosition(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert(
                        "Anda tidak menginjikan aplikasi untuk mengakses lokasi anda, \nIjinkan aplikasi mengakses lokasi anda sebelum melakukan absensi online"
                        );
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Lokasi Tidak Ditemukan");
                    break;
                case error.TIMEOUT:
                    alert("Permintaan Berakhir");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("Error");
                    break;
            }
        }
    </script>
    <script>
        parameter = 0;
        function showMasuk() {
            idPegawai = document.getElementById('idPegawai').value;
            let urlPegawai = `{{ url('/api/pegawai/absens/${idPegawai}') }}`;

            fetch(urlPegawai)
                .then((response) => response.json())
                .then((json) => {
                    if (json.data.status == 1) {
                        alert('Anda telah melakukan absensi pada hari ini')
                    } else if (json.data.status == 2) {
                        alert('Anda telah melakukan absensi pada hari ini')
                    } else {
                        document.getElementById("instant-2").classList.add('menu-active');
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });

        }

        function showPulang() {
            idPegawai = document.getElementById('idPegawai').value;
            let urlPegawai = `{{ url('/api/pegawai/absens/${idPegawai}') }}`;

            fetch(urlPegawai)
                .then((response) => response.json())
                .then((json) => {
                    if (json.data.status == 0) {
                        alert('Anda Belum melakukan absensi masuk pada hari ini')
                    } else if (json.data.status == 2) {
                        alert('Anda Telah melakukan absensi pulang pada hari ini')
                    } else {
                        document.getElementById("instant-3").classList.add('menu-active');
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function dateRange(startDate, endDate, steps = 1) {
            const dateArray = [];
            let currentDate = new Date(startDate);

            while (currentDate <= new Date(endDate)) {
                dateArray.push(new Date(currentDate));
                // Use UTC date to prevent problems with time zones and DST
                currentDate.setUTCDate(currentDate.getUTCDate() + steps);
            }
            return dateArray;
        }

        function keteranganDinas() {
            let elTanggal = document.getElementById('tanggal');
            let elKeterangan = document.getElementById('jelas');
            let elUploadBukti = document.getElementById('uploadBukti');
            let pilih = document.getElementById("keterangan").value;
            if (pilih == "Sakit" || pilih == "Menghadiri Rapat" || pilih == "Ijin" || pilih == "Dinas Luar" || pilih == "Diklat/Bimtek" || pilih ==
                "Cuti") {
                elKeterangan.classList.remove('sembunyi');
                elUploadBukti.classList.remove('sembunyi');
                elTanggal.classList.add('sembunyi');
                if (pilih == "Ijin" || pilih == "Dinas Luar" || pilih == "Diklat/Bimtek" || pilih == "Cuti") {
                    elTanggal.classList.remove('sembunyi');
                    elUploadBukti.classList.remove('sembunyi');
                }
            } else {
                elTanggal.classList.add('sembunyi');
                elKeterangan.classList.add('sembunyi');
                elUploadBukti.classList.add('sembunyi');
            }
        }
        document.getElementById('tanggal').classList.add('sembunyi');
        document.getElementById('jelas').classList.add('sembunyi');
        document.getElementById('uploadBukti').classList.add('sembunyi');

        // Absensi
        let urlPulang = `{{ url('/api/pulang/absens') }}`;
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function absenDatang($parameter) {
            parameter = $parameter;
            const dates = dateRange(document.getElementById('sejak').value, document.getElementById('hingga').value);
            
            lokasi = document.getElementById('lokasi').value;
            keterangan = document.getElementById('keterangan').value;
            idPegawai = document.getElementById('idPegawai').value;
            catatan = document.getElementById('catatan').value;
            bukti = document.getElementById('bukti').files[0];

            const form_data = new FormData();
            form_data.append('berkas', bukti);
            form_data.append('lokasi', lokasi);
            form_data.append('keterangan', keterangan);
            form_data.append('pegawai_id', idPegawai);
            form_data.append('catatan', catatan);
            form_data.append('latitude', latitude);
            form_data.append('longitude', longitude);
            form_data.append('dates', dates);
            getLocation();

            document.getElementById('datangBtn').innerHTML = `
            <div class="spinner-border text-white" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>`;
            

            urlDatang = `{{ url('/api/datang/absens') }}`;
            if ($parameter == '1') {
                fetch(urlDatang, {
                  headers: {
                        "X-CSRF-TOKEN": token
                },
                  method: 'POST',
                  credentials: "same-origin",
                  body: form_data
                }).then((response) => response.json())
                .then((json) => {
                    console.log(json);
                    if (json.status == 400) {
                        console.log(json.message);
                        document.getElementById('errorBerkas').innerHTML = ``;
                        json.message.berkas.forEach(element => {
                            document.getElementById('errorBerkas').insertAdjacentHTML(
                                'afterbegin',
                                `<small class="text-danger" >${element}</small><br>`);
                        });
                        document.getElementById('datangBtn').innerHTML = `Absen Masuk`;
                    } else {
                        if (json.lokasi == 1) {
                            alert(
                                `${json.data.keterangan} \nJarak Anda Dari Kantor : ${(json.data.radius * 1000).toFixed(2)} Meter`
                                );
                            document.getElementById('datangBtn').innerHTML = `Absen Masuk`;
                        } else {
                            // Scan Wajah
                            // document.getElementById('instant-5').classList.add('menu-active');
                            // video.play()
                        }
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });   
            } else {
                if (keterangan == "Dinas Luar" || keterangan == "Diklat/Bimtek" || keterangan == "Cuti" || keterangan == "Ijin") {
                    urlDatang = `{{ url('/api/dinas/absens') }}`;
                } else {
                    urlDatang = `{{ url('/api/simpan/datang/absens') }}`;
                }

                fetch(urlDatang, {
                headers: {
                        "X-CSRF-TOKEN": token
                },
                method: 'POST',
                credentials: "same-origin",
                body: form_data
                }).then((response) => response.json())
                .then((json) => {
                    console.log(json)
                    // Absen Biasa
                    if (json.status == 400) {
                        console.log(json.message);
                        document.getElementById('errorBerkas').innerHTML = ``;
                        json.message.berkas.forEach(element => {
                            document.getElementById('errorBerkas').insertAdjacentHTML(
                                'afterbegin',
                                `<small class="text-danger" >${element}</small><br>`);
                        });
                        document.getElementById('datangBtn').innerHTML = `Absen Masuk`;
                    } else {
                      document.getElementById('instant-4').classList.add('menu-active');
                      document.getElementById('datangBtn').innerHTML = `Absen Masuk`;
                      document.getElementById('pesan').innerHTML = `Data absensi Anda telah kami rekam kedalam database sistem, Selamat Bekerja!`;
                      document.getElementById('pesanBtn').innerHTML = `Kerja`;

                      let lokasi = (json.data.absensi[0].lokasi == 1) ? (`Work From Office`) : (`Work From Home`)
                      let keterangan = (json.data.absensi[0].keterangan != 0) ? (`${json.data.absensi[0].keterangan}`) : (`Sedang Bekerja`)
                            
                      document.getElementById('pegawaiStatus').innerHTML = `
                        <div class="badge bg-success">${lokasi}</div>
                        <div class="badge bg-dark"  id="bdgBekerja">${keterangan}</div>
                        <br>
                        <div class="badge bg-primary">Hadir | ${json.data.absensi[0].jam}</div>
                        <div class="badge bg-warning text-dark" id="bdgPulang">Pulang | -</div>
                      `;
                    }
                })
                .catch(function(error) {
                        console.log(error);
                }); 
            } 

        }

        function absenPulang($paramater) {
            parameter = $paramater;
            document.getElementById('pulangBtn').innerHTML = `
            <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>`;
            keteranganPulang = document.getElementById('keteranganPulang').value;
            idPegawai = document.getElementById('idPegawai').value;
            buktiPulang = document.getElementById('buktiPulang').files[0];

            const form_data = new FormData();
            form_data.append('berkas', buktiPulang);
            form_data.append('keterangan', keteranganPulang);
            form_data.append('pegawai_id', idPegawai);
            form_data.append('latitude', latitude);
            form_data.append('longitude', longitude);
            
            if (parameter == '2') {
            fetch(urlPulang, {
                headers: {
                        "X-CSRF-TOKEN": token
                },
                method: 'POST',
                credentials: "same-origin",
                body: form_data
                })
                .then((response) => response.json())
                .then((json) => {
                    if (json.status == 400) {
                        console.log(json);
                        document.getElementById('errorBerkasPulang').innerHTML = ``;
                        json.message.berkas.forEach(element => {
                            document.getElementById('errorBerkasPulang').insertAdjacentHTML(
                                'afterbegin',
                                `<small class="text-danger" >${element}</small><br>`);
                        });
                        document.getElementById('pulangBtn').innerHTML = `Absen Pulang`;
                    } else {
                        // Scan Wajah
                        // document.getElementById('instant-5').classList.add('menu-active');
                        // video.play()
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
            } else {

                urlPulang = `{{ url('/api/pulang/absens') }}`;
                fetch(urlPulang, {
                headers: {
                        "X-CSRF-TOKEN": token
                },
                method: 'POST',
                credentials: "same-origin",
                body: form_data
            }).then((response) => response.json())
                .then((json) => {
                    console.log(json)
                    if (json.status == 400) {
                        console.log(json);
                        document.getElementById('errorBerkasPulang').innerHTML = ``;
                        json.message.berkas.forEach(element => {
                            document.getElementById('errorBerkasPulang').insertAdjacentHTML(
                                'afterbegin',
                                `<small class="text-danger" >${element}</small><br>`);
                        });
                        document.getElementById('pulangBtn').innerHTML = `Absen Pulang`;
                    } else {
                    // Absen Biasa
                        document.getElementById('instant-4').classList.add('menu-active');
                        document.getElementById('pulangBtn').innerHTML = `Absen Pulang`;
                        document.getElementById('pesan').innerHTML = `Data absensi Anda telah kami rekam kedalam database sistem, Selamat Beristirahat!`;
                        document.getElementById('pesanBtn').innerHTML = `Pulang`;

                      let keterangan = (json.data.absensi[1].keterangan != 0) ? (`${json.data.absensi[1].keterangan}`) : (`Selesai Bekerja`)

                        document.getElementById('bdgBekerja').innerHTML = `${keterangan}`;

                        document.getElementById('bdgPulang').innerHTML = `Pulang | ${json.data.absensi[1].jam}`;
                    }
                })
                .catch(function(error) {
                    console.log(error);
                }); 
            }
        }

    </script>
    {{-- <div class="menu-hider"></div> --}}
</body>
