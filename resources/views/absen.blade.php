<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="icon" href="{{ asset('app/icons/favicon.ico')}}">
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
        <link rel="manifest" href="{{ asset('manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/icons/icon-192x192.png') }}">
    </head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <div class="header header-fixed header-logo-center">
            <a href="#" class="header-title">Absensi Online DKP3A</a>
            {{-- <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a> --}}
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-1">
            <a href="{{ route('home') }}"><i class="fa fa-home"></i><span>Absensi</span></a>
            <a href="{{ route('daftar-hadir') }}" class="active-nav"><i class="fa fa-users"></i><span>Daftar
                    Hadir</span></a>
        </div>

        <div class="page-content header-clear-medium">

            {{-- <div class="search-page">

                <div class="search-box search-header bg-theme card-style me-3 ms-3">
                    <i class="fa fa-search"></i>
                    <input type="text" class="border-0" placeholder="Pencarian" data-search>
                    <a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
                </div>

                <div class="search-results disabled-search-list card card-style shadow-l">
                    <div class="content">
                        <div data-filter-item data-filter-name="all products eazy mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/32s.jpg"
                                alt="img">
                            <h1>Eazy | Mobile Website</h1>
                            <p>
                                Eazy Mobile, a best seller and trending item, loved by all.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products eazy mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/29s.jpg"
                                alt="img">
                            <h1>Eazy | Cordova App</h1>
                            <p>
                                Eazy is also available as <br> a Cordova & PhoneGap App.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products mega mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/27s.jpg"
                                alt="img">
                            <h1>Mega | Mobile Website</h1>
                            <p>
                                Mega Powerful, Mega Feature Filled, Easy to Use.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products mega mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/28s.jpg"
                                alt="img">
                            <h1>Mega | Cordova App</h1>
                            <p>
                                Mega is also available as <br> a Cordova & PhoneGap App.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products ultra mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/26s.jpg"
                                alt="img">
                            <h1>Ultra | Mobile Website</h1>
                            <p>
                                Ultra Powerful and Fast Mobile Website, an absolute best seller.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products ultra mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/25s.jpg"
                                alt="img">
                            <h1>Ultra | Cordova App</h1>
                            <p>
                                Ultra is also available as <br> a Cordova & PhoneGap App.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products kolor mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/24s.jpg"
                                alt="img">
                            <h1>Kolor | Mobile Website</h1>
                            <p>
                                Kolor is creative, beautiful, and offers beautiful colors.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products kolor mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/23s.jpg"
                                alt="img">
                            <h1>Kolor | Cordova App</h1>
                            <p>
                                Kolor is also available as <br> a Cordova & PhoneGap App.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products vinga mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/22s.jpg"
                                alt="img">
                            <h1>Vinga | Mobile Website</h1>
                            <p>
                                Simplicity and Elegance at it's best. Vinga is very fast.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>

                        <div data-filter-item data-filter-name="all products vinga mobile" class="search-result-list">
                            <img class="shadow-l preload-img" src="images/empty.png" data-src="images/pictures/21s.jpg"
                                alt="img">
                            <h1>Vinga | Cordova App</h1>
                            <p>
                                Vinga is also available as <br> a Cordova & PhoneGap App.
                            </p>
                            <a href="#" class="bg-highlight">VIEW</a>
                        </div>
                        <div class="search-no-results disabled">
                            <h3 class="bold top-10">Nothing found...</h3>
                            <span class="under-heading font-11 opacity-70 color-theme">There's nothing matching the
                                description you're looking for, try a different keyword.</span>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="card card-style">
                <div class="content">
                    <div class="d-flex justify-content-between">
                        <div class="text-start" id="jumlah"> </div>
                        <div class="text-end" id="hari"></div>
                    </div>
                </div>
            </div>

            <div class="card card-style">
                <div class="content mb-0">
                    <h5 class="text-center">Daftar Hadir Pegawai</h5>
                    <div class="input-style has-borders no-icon mb-4">
                        <input autocomplete="off" type="text" id="pencarian"
                            placeholder="Masukkan NIP atau Nama Pegawai" onkeyup="cari()" />
                    </div>
                    <div class="text-center pusing-pegawai">
                        <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                    </div>
                    <div id="list-pegawai"></div>
                </div>
            </div>

        </div>
        <!-- End of Page Content-->

        <!-- menu-payment-status -->
        <div id="menu-payment-status" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="480">
            <div class="menu-title">
                <h1>Detail Kehadiran</h1>
                <p class="color-theme opacity-40" id="detailNip"></p><a href="#" class="close-menu"><i
                        class="fa fa-times"></i></a>
            </div>
            <div class="divider divider-margins mb-1 mt-3"></div>
            <div class="content">
                <div class="row mb-0">
                    <div class="col-3">
                        <img id="detailGambar" src="https://via.placeholder.com/50" width="80" class="rounded-xl">
                    </div>
                    <div class="col-9 ps-4">
                        <div class="d-flex">
                            <div>
                                <p class="font-700 color-theme">Nama</p>
                            </div>
                            <div class="ms-auto">
                                <p id="detailNama"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider mt-3 mb-3"></div>
                <div class="row mb-0">
                    <div class="col-3">
                        <h4 class="font-14">Bidang</h4>
                    </div>
                    <div class="col-9">
                        <h4 class="font-14 text-end" id="detailBidang"></h4>
                    </div>
                    <div class="col-3">
                        <h4 class="font-14">Jabatan</h4>
                    </div>
                    <div class="col-9">
                        <h4 class="font-14 text-end" id="detailJabatan"></h4>
                    </div>
                <div class="divider mt-3 mb-3"></div>
                    <div class="col-6">
                        <h4 class="font-14">Absen Masuk</h4>
                    </div>
                    <div class="col-6">
                        <h4 class="font-14 text-end" id="detailMasuk"></h4>
                    </div>
                    <div class="col-6">
                        <h4 class="font-14 ">Keterangan</h4>
                    </div>
                    <div class="col-6">
                        <h4 class="font-14 text-end " id="detailKeterangan"></h4>
                    </div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6">
                        <h4 class="font-14 mt-1">Absen Pulang</h4>
                    </div>
                    <div class="col-6">
                        <h4 class="font-14 text-end mt-1" id="detailKeluar"></h4>
                    </div>
                    <div class="col-6">
                        <h4 class="font-14 ">Keterangan</h4>
                    </div>
                    <div class="col-6">
                        <h4 class="font-14 text-end " id="detailKeteranganPulang"></h4>
                    </div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-6">
                        <h4 class="font-14 mt-1">Titik Absensi</h4>
                    </div>
                    <div class="col-6">
                        <h5 class="font-14 text-end mt-1 color-green-dark" id="koordinat"></h5>
                    </div>
                    <div class="col-12"><a href="#" id="titikKoordinat"
                            class="close-menu btn btn-full btn-m bg-green-dark rounded-sm text-uppercase font-800">Lihat
                            Lokasi</a></div>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
    <script type="text/javascript">
        const lists = document.createDocumentFragment();
        const url = `{{ url('/api/hadir/absens') }}`;
        const urlJumlah = `{{ url('/api/hadir/absensi') }}`;
        let search_term = "";
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
                if (hadir == 0 && total == 0) {
                    let a = document.createElement('a');
                    a.href = "#";
                    a.className = "d-flex justify-content-center mb-3";
                    a.innerHTML = `<div class="">
                                        <h2 class="font-18 color-dark">Belum ada pegawai yang hadir</h2>
                                    </div>`;
                    lists.append(a);
                    document.getElementById('list-pegawai').appendChild(lists);
                }
            })

        document.addEventListener('DOMContentLoaded', function() {}, false);

        const date = new Date();

        const formattedDate = date.toLocaleString("id-ID", {
            dateStyle: "full"
        });

        document.getElementById('hari').innerHTML = `<span class="bold top-10">${formattedDate}</span>`;

        // GET Pegawai
        const showList = () => {
            fetch(url)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    let pns = data.data;
                    document.getElementById('list-pegawai').innerHTML = "";
                    pns.filter((item) => {
                        if (item[0].pegawai.nama_lengkap.toLowerCase().includes(search_term.toLowerCase())) {
                            return (
                            item[0].pegawai.nama_lengkap.toLowerCase().includes(search_term.toLowerCase()) || 
                            item[0].pegawai.nip.toLowerCase().includes(search_term.toLowerCase())
                        );
                        } else {
                            return '';
                        }
                    }).map(function(pegawai) {
                        let a = document.createElement('a');
                        a.href = "#";
                        a.className = "d-flex mb-3";
                        a.setAttribute('data-menu', `menu-payment-status`);
                        a.setAttribute('id-pegawai', `${pegawai[0].pegawai.id}`);
                        a.setAttribute('status-pegawai', `${pegawai[0].status}`);
                        let align = document.createElement('div');
                        align.className = "align-self-center";
                        let img = document.createElement('img');
                        img.className = "rounded-xl me-3";
                        img.width = '40';
                        if (pegawai[0].pegawai.photo !== null) {
                            img.src = `{{ url('/') }}${pegawai[0].pegawai.photo}`;
                            a.setAttribute('onclick',
                                `showModal('${pegawai[0].pegawai.nama_lengkap}','${pegawai[0].pegawai.id}','{{ url('/') }}${pegawai[0].pegawai.photo}')`
                            );
                        } else {
                            img.src = 'https://via.placeholder.com/50';
                            a.setAttribute('onclick',
                                `showModal('${pegawai[0].pegawai.nama_lengkap}','${pegawai[0].pegawai.id}','{{ url('/') }}${pegawai[0].pegawai.photo}')`
                            );
                        }
                        align.append(img);

                        let align2 = document.createElement('div');
                        align2.className = "align-self-center";
                        let name = document.createElement('h1');
                        name.className = "mb-n2 font-16";
                        name.innerHTML = `${pegawai[0].pegawai.nama_lengkap}`;
                        let nip = document.createElement('p');
                        if (pegawai[0].pegawai.nip !== null) {
                            nip.innerHTML = `NIP : ${pegawai[0].pegawai.nip}`;
                        }
                        align2.append(name);
                        align2.append(nip);
                        let align3 = document.createElement('div');
                        align3.className = "align-self-center ms-auto text-end";
                        let status = document.createElement('h2');
                        let tanggal = document.createElement('p');
                        if (pegawai[0].pegawai.status_kerja.status == 1) {
                            status.className = "mb-n1 font-18 color-green-dark";
                            tanggal.className = "font-12";
                            tanggal.innerHTML = `${pegawai[0].jam}`;
                            status.innerHTML = `Hadir`;
                        } else if (pegawai[0].pegawai.status_kerja.status == 2) {
                            status.className = "mb-n1 font-18 color-red-dark";
                            status.innerHTML = `Pulang`;
                            tanggal.className = "font-12";
                            tanggal.innerHTML = `${pegawai[1].jam}`;
                        } else if (pegawai[0].pegawai.status_kerja.status == 3) {
                            status.className = "mb-n1 font-18 color-blue-dark";
                            status.innerHTML = `Dinas Luar`;
                            tanggal.className = "font-12";
                            tanggal.innerHTML = `${pegawai[1].jam}`;
                        }

                        align3.append(status);
                        align3.append(tanggal);

                        a.append(align);
                        a.append(align2);
                        a.append(align3);
                        lists.append(a);
                    });
                    document.getElementById('list-pegawai').appendChild(lists);
                    document.querySelector('.pusing-pegawai').style.display = 'none';
                })
                .catch(function(error) {
                    console.log(error);
                });
        }



        function showModal(nama, id, photo) {
            document.getElementById('menu-payment-status').classList.add('menu-active');
            document.getElementsByClassName('menu-hider')[0].classList.add('menu-active');
            const url = `{{ url('/api/absensi/${id}') }}`;
            fetch(url)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    let pns = data.data;
                    pns.map(function(pegawai) {
                        document.getElementById('detailNama').innerHTML =
                            `<small>${pegawai[0].pegawai.nama_lengkap}</small>`;
                        document.getElementById('detailBidang').innerHTML =
                            `<small>${pegawai[0].pegawai.bidang.nama}</small>`;

                        if (pegawai[0].pegawai.jabatan == null) {
                            pegawai[0].pegawai.jabatan = 'Tidak Ada';
                        }

                        document.getElementById('detailJabatan').innerHTML =
                            `<small>${pegawai[0].pegawai.jabatan}</small>`;
                        document.getElementById('detailMasuk').innerHTML = `<small>${pegawai[0].jam}</small>`;
                        document.getElementById('detailKeluar').innerHTML = `<small>Sedang Bekerja</small>`;
                        if (pegawai.length > 1) {
                            document.getElementById('detailKeluar').innerHTML =
                                `<small>${pegawai[1].jam}</small>`;
                            document.getElementById('detailKeteranganPulang').innerHTML =
                                `<small>Tidak Ada</small>`;
                            if (pegawai[1].keterangan !== null) {
                                document.getElementById('detailKeteranganPulang').innerHTML =
                                    `<small>${pegawai[1].keterangan}</small>`;
                            }
                        }

                        if (pegawai[0].pegawai.photo !== null) {
                            document.getElementById('detailGambar').src =
                                `{{ url('/') }}${pegawai[0].pegawai.photo}`;

                        } else {
                            document.getElementById('detailGambar').src = `https://via.placeholder.com/50`;

                        }
                        if (pegawai[0].keterangan == 0) {
                            pegawai[0].keterangan = 'Tidak Ada';
                        }
                        document.getElementById('detailKeterangan').innerHTML =
                            `<small>${pegawai[0].keterangan}</small>`;
                        document.getElementById('koordinat').innerHTML =
                            `<small>Lat: ${pegawai[0].latitude}, <br> Long: ${pegawai[0].longitude}</small>`;
                        document.getElementById('titikKoordinat').setAttribute('onclick',
                            `lokasi('${pegawai[0].latitude}','${pegawai[0].longitude}')`);
                    });
                })
                .catch(function(error) {
                    console.log(error);
                });
        };

        function lokasi(lat, lon) {
            window.open(`http://maps.google.com/maps?q=loc:${lat},${lon}`, '_blank');
        }



        showList();

        function cari() {
            document.querySelector('.pusing-pegawai').style.display = 'block';
            search_term = document.getElementById('pencarian').value;
            showList();
        }
    </script>
</body>
