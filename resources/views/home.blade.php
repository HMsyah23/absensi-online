<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" href="app/icons/favicon.ico">
    <meta name="theme-color" content="#8CC152">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Absensi Online | Beranda</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/icons/icon-192x192.png') }}">
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <div class="header header-fixed header-logo-center">
            <a href="index.html" class="header-title">Absensi Online DKP3A</a>
            {{-- <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a> --}}
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-1">
            <a href="{{ route('home') }}" class="active-nav"><i class="fa fa-home"></i><span>Absensi</span></a>
            <a href="{{ route('daftar-hadir') }}"><i class="fa fa-users"></i><span>Daftar Hadir</span></a>
        </div>

        <div class="page-content header-clear-medium">

            <div class="card card-style">
                <div class="content">
                    <div class="d-flex justify-content-between">
                        <div class="text-start" id="jumlah"> </div>
                        <div class="text-end" id="hari"></div>
                    </div>
                </div>
            </div>

            <div class="card card-style bg-theme pb-0">
                <div class="content" id="tab-group-3">
                    <p class="text-center">
                        <small><strong>Dinas Kependudukan, Pemberdayaan Perempuan <br> dan Perlindungan Anak Prov.
                                Kaltim</strong></small> <br> Ini adalah absensi online dalam rangka Pencegahan
                        Penyebaran Corona Virus Disease 2019 (Covid-19) di Dinas Kependudukan, Pemberdayan Perempuan dan
                        Perlindungan Anak Prov. Kaltim
                    </p>
                    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-green-dark">
                        <a href="#" class="no-effect" data-active data-bs-toggle="collapse"
                            data-bs-target="#tab-8">Pegawai Negeri Sipil</a>
                        <a href="#" class="no-effect" data-bs-toggle="collapse" data-bs-target="#tab-9">Tenaga
                            Kontrak</a>
                    </div>
                    <div class="clearfix mb-3"></div>
                    <div data-bs-parent="#tab-group-3" class="collapse show" id="tab-8">
                        <div class="content mb-2">
                            <h3>Daftar Pegawai Negeri Sipil</h3>
                            <div class="input-style has-borders no-icon mb-4">
                                <input autocomplete="off" type="text" id="pencarianPNS"
                                    placeholder="Masukkan NIP atau Nama Pegawai" onkeyup="cariPNS()" />
                            </div>
                            <div class="text-center pusing-pns">
                                <div class="spinner-border text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div id="list-pns" class="list-group list-custom-large"></div>
                        </div>
                    </div>
                    <div data-bs-parent="#tab-group-3" class="collapse" id="tab-9">
                        <div class="content mb-2">
                            <h3>Daftar Tenaga Kontrak</h3>
                            <div class="input-style has-borders no-icon mb-4">
                                <input autocomplete="off" type="text" id="pencarianTK"
                                    placeholder="Masukkan Nama Pegawai" onkeyup="cariTK()" />
                            </div>
                            <div class="text-center pusing-tk">
                                <div class="spinner-border text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div id="list-tk" class="list-group list-custom-large"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Page Content-->
    </div>

    <div id="modal-wizard-step-1" class="menu menu-box-modal rounded-m" data-menu-width="330">
        <div class="content">
            <h1 class="pt-4 mt-3 text-center text-primary">Absensi Datang</h1>
            <p>
                <img id="fotoPegawai" class="me-3 rounded-circle shadow-l" width="50">
                <span><strong id="namaPegawai" class="text-center"></strong></span>
            </p>
            <h5 id="loc">Lokasi Bekerja</h5>
            <div class="input-style has-borders no-icon mb-4">
                <input type="hidden" id="idPegawai">
                <label for="lokasi" class="color-highlight disabled">Pilih Lokasi</label>
                <select id="lokasi">
                    <option value="1">Kantor (WFO)</option>
                    <option value="2">Rumah (WFH)</option>
                </select>
                {{-- <span><i class="fa fa-chevron-down"></i></span> --}}
                {{-- <i class="fa fa-check disabled valid color-green-dark"></i>
                <i class="fa fa-check disabled invalid color-red-dark"></i> --}}
                <em></em>
            </div>
            <h5>Keterangan Dinas (Optional)</h5>
            <div class="input-style has-borders no-icon mb-4">
                <label for="keterangan" class="color-highlight disabled">Pilih Keterangan Dinas</label>
                <select id="keterangan">
                    <option value="0" disabled selected>Pilih Keterangan Dinas</option>
                    <option value="0">Tidak Ada</option>
                    <option>Dinas Luar</option>
                    <option>Diklat/Bimtek</option>
                    <option>Sakit</option>
                    <option>Ijin</option>
                    <option>Cuti</option>
                </select>
                {{-- <span><i class="fa fa-chevron-down"></i></span> --}}
                {{-- <i class="fa fa-check disabled valid color-green-dark"></i>
                <i class="fa fa-check disabled invalid color-red-dark"></i> --}}
                <em>(optional)</em>
            </div>
            <a href="#" id="datangBtn" onclick="onDatang()" {{-- data-menu="modal-wizard-step-4" --}}
                class="btn btn-full btn-m rounded-m bg-blue-dark font-700 text-uppercase mt-4 mb-4">Absen Datang
            </a>
        </div>
    </div>

    <div id="modal-wizard-step-2" class="menu menu-box-modal rounded-m" data-menu-width="330">
        <div class="content">
            <h1 class="pt-4 mt-3 text-center text-warning">Absensi Pulang</h1>
            <p>
                <img id="fotoPegawais" class="me-3 rounded-circle shadow-l" width="50">
                <span><strong id="namaPegawais" class="text-center"></strong></span>
            </p>
            <h5>Keterangan Pulang </h5>
            <div class="input-style has-borders no-icon mb-4">
                <label for="keterangan" class="color-highlight disabled">Pilih Keterangan Dinas</label>
                <input type="hidden" id="idPegawais">
                <input type="text" id="keteranganPulang" placeholder="Keterangan Pulang">
                <em>(optional)</em>
                <small>(Hanya diisi jika Pegawai pulang sebelum jadwal kerja)</small>
            </div>
            <a href="#" id="pulangBtn" onclick="onPulang()" {{-- data-menu="modal-wizard-step-4" --}}
                class="btn btn-full btn-m rounded-m bg-yellow-dark font-700 text-uppercase mt-4 mb-4">Absen Pulang
            </a>
        </div>
    </div>

    <div id="modal-wizard-step-4" class="menu menu-box-modal rounded-m" data-menu-width="330">
        <div class="content text-center px-3">
            <i class="fa fa-check-circle scale-box color-green-dark fa-5x pb-3 pt-2"></i>
            <h1>Terima Kasih!</h1>
            <p class="px-2 mb-3 pesan">
                Data absensi Anda telah kami rekam kedalam database sistem, Selamat Bekerja!
            </p>
            <small class="badge bg-red-dark"><strong>Jika terdapat surat keterangan yang wajib diberikan,<br>mohon
                    segera diberikan kepada pihak terkait</strong></small>
            <a href="#" class="close-menu btn btn-full btn-m rounded-m bg-green-dark font-700 text-uppercase">Awesome!</a>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>
    <script type="text/javascript">
        let latitude, longitude;
        navigator.geolocation.watchPosition(position => {
            latitude = position.coords['latitude'];
            longitude = position.coords['longitude'];
        })

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Browser tidak mensupport aplikasi ini \n gunakan chrome atau safari agar dapat melakukan absensi online");
            }
        }

        function showPosition(position) {
            latitude  = position.coords.latitude;
            longitude = position.coords.longitude;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("Anda tidak menginjikan aplikasi untuk mengakses lokasi anda, \nIjinkan aplikasi mengakses lokasi anda sebelum melakukan absensi online");
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


        let myModal = new bootstrap.Modal(document.getElementById("modal-wizard-step-1"), {});

        function showModal(nama, id, photo, status) {
            let pegawai = document.querySelector(`[id-pegawai="${id}"]`);
            let stat = pegawai.getAttribute('status-pegawai');
            if (parseInt(stat) == 1) {
                document.getElementById('modal-wizard-step-2').classList.add('menu-active');
                document.getElementById('namaPegawais').innerHTML = ``;
                document.getElementById('namaPegawais').append(`${nama}`);
                document.getElementById('idPegawais').value = id;
                document.getElementById('fotoPegawais').src = photo;
                document.getElementsByClassName('menu-hider')[0].classList.add('menu-active');
            } else if (parseInt(stat) == 0) {
                document.getElementById('modal-wizard-step-1').classList.add('menu-active');
                document.getElementById('namaPegawai').innerHTML = ``;
                document.getElementById('namaPegawai').append(`${nama}`);
                document.getElementById('idPegawai').value = id;
                document.getElementById('fotoPegawai').src = photo;
                if (status == 1) {
                    document.getElementById('loc').style.display = 'none';
                    document.getElementById('lokasi').style.display = 'none';
                } else {
                    document.getElementById('loc').style.display = 'block';
                    document.getElementById('lokasi').style.display = 'block';
                }
                document.getElementsByClassName('menu-hider')[0].classList.add('menu-active');
            }

        };

        const lists = document.createDocumentFragment();
        const urlPNS = `{{ url('/api/pns/absensi') }}`;
        const urlTK = `{{ url('/api/tk/absensi') }}`;
        let search_term = "";

        document.addEventListener('DOMContentLoaded', function() {}, false);

        // GET PNS
        const showListPNS = () => {
            fetch(urlPNS)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    let pns = data.data;
                    document.getElementById('list-pns').innerHTML = "";
                    pns.filter((item) => {
                        return (
                            item.pegawai.nama_lengkap.toLowerCase().includes(search_term
                                .toLowerCase()) ||
                            item.pegawai.nip.toLowerCase().includes(search_term.toLowerCase())
                        );
                    }).map(function(pegawai) {
                        let a = document.createElement('a');
                        a.href = "#";
                        a.setAttribute('id-pegawai', `${pegawai.pegawai.id}`);
                        a.setAttribute('status-pegawai', `${pegawai.status}`);
                        let img = document.createElement('img');
                        img.className = 'me-3 rounded-circle shadow-l';
                        img.width = '50';
                        if (pegawai.pegawai.photo !== null) {
                            img.src = `{{ url('/') }}${pegawai.pegawai.photo}`;
                            a.setAttribute('onclick',
                                `showModal('${pegawai.pegawai.nama_lengkap}','${pegawai.pegawai.id}','{{ url('/') }}${pegawai.pegawai.photo}','${pegawai.pegawai.pns}')`
                            );
                        } else {
                            img.src = 'https://via.placeholder.com/50';
                            a.setAttribute('onclick',
                                `showModal('${pegawai.pegawai.nama_lengkap}','${pegawai.pegawai.id}','https://via.placeholder.com/50','${pegawai.pegawai.pns}')`
                            );
                        }
                        let name = document.createElement('span');
                        let status = document.createElement('span');
                        let nip = document.createElement('strong');
                        let i = document.createElement('i');
                        name.innerHTML = `${pegawai.pegawai.nama_lengkap}`;
                        if (pegawai.status == 1) {
                            status.innerHTML = `Absen Pulang`;
                            status.className = 'badge bg-yellow-dark';
                        } else if (pegawai.status == 2) {
                            status.innerHTML = `Selesai Bekerja`;
                            status.className = 'badge bg-green-dark';
                        } else {
                            status.innerHTML = `Absen Datang`;
                            status.className = 'badge bg-blue-dark';
                        }
                        nip.innerHTML = `NIP : ${pegawai.pegawai.nip}`;
                        i.className = 'fa fa-angle-right';

                        a.append(img);
                        a.append(name);
                        a.append(status);
                        a.append(nip);
                        a.append(i);
                        lists.append(a);
                    });
                    document.getElementById('list-pns').appendChild(lists);
                    document.querySelector('.pusing-pns').style.display = 'none';
                })
                .catch(function(error) {
                    // console.log(error);
                });
        }

        // GET TK
        const showListTK = () => {
            fetch(urlTK)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    let tk = data.data;
                    document.getElementById('list-tk').innerHTML = "";
                    tk.filter((item) => {
                        return (
                            item.pegawai.nama_lengkap.toLowerCase().includes(search_term.toLowerCase())
                        );
                    }).map(function(pegawai) {
                        let a = document.createElement('a');
                        a.href = "#";
                        a.setAttribute('id-pegawai', `${pegawai.pegawai.id}`);
                        a.setAttribute('status-pegawai', `${pegawai.status}`);
                        let img = document.createElement('img');
                        img.className = 'me-3 rounded-circle shadow-l skeleton-animation';
                        img.width = '50';
                        if (pegawai.pegawai.photo !== null) {
                            img.src = `{{ url('/') }}${pegawai.pegawai.photo}`;
                            a.setAttribute('onclick',
                                `showModal('${pegawai.pegawai.nama_lengkap}','${pegawai.pegawai.id}','{{ url('/') }}${pegawai.pegawai.photo}')`
                            );
                        } else {
                            img.src = 'https://via.placeholder.com/50';
                            a.setAttribute('onclick',
                                `showModal('${pegawai.pegawai.nama_lengkap}','${pegawai.pegawai.id}','https://via.placeholder.com/50')`
                            );
                        }
                        let name = document.createElement('span');
                        let status = document.createElement('span');
                        // let nip = document.createElement('strong');
                        let i = document.createElement('i');
                        name.innerHTML = `${pegawai.pegawai.nama_lengkap}`;
                        if (pegawai.status == 1) {
                            status.innerHTML = `Absen Pulang`;
                            status.className = 'badge bg-yellow-dark';
                        } else if (pegawai.status == 2) {
                            status.innerHTML = `Selesai Bekerja`;
                            status.className = 'badge bg-green-dark';
                        } else {
                            status.innerHTML = `Absen Datang`;
                            status.className = 'badge bg-blue-dark';
                        }
                        // nip.innerHTML = `NIP : ${pegawai.pegawai.nip}`;
                        i.className = 'fa fa-angle-right';

                        a.append(img);
                        a.append(name);
                        a.append(status);
                        // a.append(nip);
                        a.append(i);
                        lists.append(a);
                    });
                    document.getElementById('list-tk').appendChild(lists);
                    document.querySelector('.pusing-tk').style.display = 'none';
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        showListPNS();
        showListTK();

        function cariPNS() {
            document.querySelector('.pusing-pns').style.display = 'block';
            search_term = document.getElementById('pencarianPNS').value;
            showListPNS();
        }

        function cariTK() {
            document.querySelector('.pusing-tk').style.display = 'block';
            search_term = document.getElementById('pencarianTK').value;
            showListTK();
        }

        const date = new Date();

        const formattedDate = date.toLocaleString("id-ID", {
            dateStyle: "full"
        });

        document.getElementById('hari').innerHTML = `<span class="bold top-10">${formattedDate}</span>`;

        function jum() {
            const urlJumlah = `{{ url('/api/hadir/absensi') }}`;
            let jumlah;
            fetch(urlJumlah)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    jumlah = data.data.jumlah.length;
                    hadir = data.data.hadir.length;
                    total = data.data.total.length;
                    document.getElementById('jumlah').innerHTML =
                        `<span class="bold top-10"><i class="fas fa-users"></i> ${hadir} / ${jumlah} Pegawai</span>`;
                })
        }

        jum();

        // Absensi
        let urlDatang = `{{ url('/api/datang/absens') }}`;
        let urlPulang = `{{ url('/api/pulang/absens') }}`;
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function onDatang() {
            getLocation();
            document.getElementById('datangBtn').innerHTML = `
            <div class="spinner-border text-white" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>`;
            lokasi = document.getElementById('lokasi').value;
            keterangan = document.getElementById('keterangan').value;
            idPegawai = document.getElementById('idPegawai').value;
            fetch(urlDatang, {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'POST',
                    credentials: "same-origin",
                    body: JSON.stringify({
                        pegawai_id: idPegawai,
                        lokasi: lokasi,
                        keterangan: keterangan,
                        latitude: latitude,
                        longitude: longitude
                    })
                })
                .then((response) => response.json())
                .then((json) => {
                    alert(json.lokasi);
                    if (json.lokasi == 1) {
                        alert(
                            `${json.data.keterangan} \nJarak Anda Dari Kantor : ${(json.data.radius * 1000).toFixed(2)} Meter`);
                        document.getElementById('datangBtn').innerHTML = `Absen Datang`;
                    } else {
                        document.getElementById('modal-wizard-step-1').classList.remove('menu-active');
                        document.getElementById('modal-wizard-step-4').classList.add('menu-active');
                        document.querySelector('.pesan').innerHTML =
                            `Data absensi berhasil disimpan,<br>Selamat Bekerja!`;
                        document.querySelector('.close-menu').innerHTML = `Kerja`;
                        let pegawai = document.querySelector(`[id-pegawai="${json.data.pegawai_id}"]`);
                        let status = pegawai.querySelector(".badge");
                        pegawai.setAttribute('status-pegawai', `${json.data.status}`);
                        status.innerHTML = `Absen Pulang`;
                        status.className = 'badge bg-yellow-dark';
                        jum();
                        document.getElementById('datangBtn').innerHTML = `Absen Datang`;
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function onPulang() {
            document.getElementById('pulangBtn').innerHTML = `
            <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>`;
            keteranganPulang = document.getElementById('keteranganPulang').value;
            idPegawai = document.getElementById('idPegawais').value;
            fetch(urlPulang, {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'POST',
                    credentials: "same-origin",
                    body: JSON.stringify({
                        pegawai_id: idPegawai,
                        keterangan: keteranganPulang,
                        latitude: latitude,
                        longitude: longitude
                    })
                })
                .then((response) => response.json())
                .then((json) => {
                    document.getElementById('modal-wizard-step-2').classList.remove('menu-active');
                    document.getElementById('modal-wizard-step-4').classList.add('menu-active');
                    document.querySelector('.pesan').innerHTML =
                        `Data absensi berhasil disimpan,<br>Hati - hati dalam perjalan pulang!`;
                    document.querySelector('.close-menu').innerHTML = `Pulang`;
                    let pegawai = document.querySelector(`[id-pegawai="${json.data.pegawai_id}"]`);
                    let status = pegawai.querySelector(".badge");
                    pegawai.setAttribute('status-pegawai', `${json.data.status}`);
                    status.innerHTML = `Selesai Bekerja`;
                    status.className = 'badge bg-green-dark';
                    jum();
                    document.getElementById('pulangBtn').innerHTML = `Absen Pulang`;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>
</body>
