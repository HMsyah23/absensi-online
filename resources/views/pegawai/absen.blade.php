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

        <div class="header header-fixed header-auto-show header-logo-center">
            <a href="index.html" class="header-title">Absensi Online</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-1">
            <a href="{{ route('user.dashboard') }}" ><i
                    class="fa fa-home "></i><span>Dashboard</span></a>
            @if (Auth::user()->role->role == 'Super Admin' || Auth::user()->role->role == 'Admin')
                <a class="color-green-dark" href="{{ route('user.list') }}"><i class="fa fa-users"></i><span>Daftar Hadir</span></a>
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
                                NIP : {{ Auth::user()->pegawai->nip }}
                            </p>
                            <span id="statusPegawai">
                                <div class="badge bg-primary">WFH</div>
                            </span>
                        </div>
                    </div>
                    <div>
                        <img src="images/empty.png" data-src="{{ url('/') }}{{ Auth::user()->pegawai->photo }}"
                            width="80" class="rounded-circle mt- shadow-xl preload-img">
                    </div>
                </div>
            </div>

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
                        <h4 class="font-12 text-end" id="detailBidang"></h4>
                    </div>
                    <div class="col-3">
                        <h4 class="font-14">Jabatan</h4>
                    </div>
                    <div class="col-9">
                        <h4 class="font-12 text-end" id="detailJabatan"></h4>
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
                    <div class="col-6">
                        <h4 class="font-14 " id="buktiDatang">Bukti</h4>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#" id="detailBukti" class="btn btn-3d btn-xxs mb-3 rounded-xl text-uppercase font-900 shadow-s  border-blue-dark bg-blue-light"> 
                            <i class="fas fa-file-alt"></i> Bukti
                        </a>
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
                    <div class="col-6">
                        <h4 class="font-14" id="buktiPulang">Bukti</h4>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#" id="detailBuktiPulang" class="btn btn-3d btn-xxs mb-3 rounded-xl text-uppercase font-900 shadow-s  border-blue-dark bg-blue-light"> 
                            <i class="fas fa-file-alt"></i> Bukti
                        </a>
                    </div>
                    <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                    <div class="col-12 text-center">
                        <h4 class="font-14 mt-1">Titik Absensi</h4>
                        <h5 class="font-10 mt-1 color-green-dark" id="koordinat"></h5>
                    </div>
                    <div class="col-12 mb-3">
                        <a href="#" id="titikKoordinat"
                            class="close-menu btn btn-3d btn-full btn-m rounded-xl text-uppercase font-800 border-green-dark bg-green-light">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Lihat Lokasi
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="instant-3" class="menu menu-box-left" data-menu-width="cover" data-menu-effect="menu-over">

            <div class="card card-style preload-img mt-3" data-src="{{ asset('images/pictures/_bg-infinite.jpg') }}"
                data-card-height="130">
                <div class="card-center ms-3">
                    <h1 class="color-white mb-0">Bukti File</h1>
                    <p class="color-white mt-n1 mb-0">Pegawai</p>
                </div>
                <div class="card-center me-3">
                    <a href="#"
                        class="close-menu btn btn-m float-end rounded-xl shadow-xl text-uppercase font-800 bg-yellow-dark"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
                <div class="card-overlay bg-black opacity-80"></div>
            </div>
    
            <div class="content" id="docBukti">
                
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('scripts/pdf/webviewer.min.js')}}"></script>
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
                            tanggal.className = "font-12";
                            status.className = "mb-n1 font-18 color-red-dark";
                            status.innerHTML = `Pulang`;
                            tanggal.innerHTML = `${pegawai[1].jam}`;
                            if (pegawai[0].pegawai.status_kerja.absensi[0].keterangan != '0') {
                            status.className = "mb-n1 font-18 color-yellow-dark";
                                status.innerHTML = `${pegawai[0].pegawai.status_kerja.absensi[1].keterangan}`;
                                tanggal.innerHTML = ``;
                            }
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
                            if (pegawai[1].keterangan !== '0') {
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
                            `<small>Latitude : ${pegawai[0].latitude}, Longitude : ${pegawai[0].longitude}</small>`;
                        document.getElementById('titikKoordinat').setAttribute('onclick',
                            `lokasi('${pegawai[0].latitude}','${pegawai[0].longitude}')`);
                        if (pegawai[0].berkas !== null) {
                            document.getElementById('buktiDatang').classList.remove('d-none');
                            document.getElementById('detailBukti').classList.remove('d-none');
                            document.getElementById('detailBukti').setAttribute('onclick',
                            `showBukti('${pegawai[0].berkas}')`);
                        } else {
                            document.getElementById('buktiDatang').classList.add('d-none');
                            document.getElementById('detailBukti').classList.add('d-none');
                        }

                        if (pegawai[1].berkas !== null) {
                            document.getElementById('buktiPulang').classList.remove('d-none');
                            document.getElementById('detailBuktiPulang').classList.remove('d-none');
                            document.getElementById('detailBuktiPulang').setAttribute('onclick',
                                `showBukti('${pegawai[1].berkas}')`);
                        } else {
                            document.getElementById('buktiPulang').classList.add('d-none');
                            document.getElementById('detailBuktiPulang').classList.add('d-none');
                        }
                        
                        
                    });
                })
                .catch(function(error) {
                    console.log(error);
                });
        };

        function lokasi(lat, lon) {
            window.open(`http://maps.google.com/maps?q=loc:${lat},${lon}`, '_blank');
        }

        function bukti(link) {
            window.open(`${link}`, '_blank');
        }

        function showBukti($file) {
            console.log($file.split(".").pop());
            if ($file.split(".").pop() == 'pdf') {
                document.getElementById('docBukti').innerHTML = `
                <div  id="viewer" style='width: 100%; height: 600px; margin: 0 auto;'>
                </div>
            `;

            WebViewer({
      path: `{{url('scripts/pdf')}}`, // path to the PDF.js Express'lib' folder on your server
      licenseKey: 'LT50O9taczydVZKcomTR',
      initialDoc: `${$file}`,
      // initialDoc: '/path/to/my/file.pdf',  // You can also use documents on your server
    }, document.getElementById('viewer'))
    .then(instance => {
      // now you can access APIs through the WebViewer instance
      const { Core, UI } = instance;
  
      // adding an event listener for when a document is loaded
      Core.documentViewer.addEventListener('documentLoaded', () => {
        console.log('document loaded');
      });
  
      // adding an event listener for when the page number has changed
      Core.documentViewer.addEventListener('pageNumberUpdated', (pageNumber) => {
        console.log(`Page number is: ${pageNumber}`);
      });
    });

            } else {
                document.getElementById('docBukti').innerHTML = `
                    <img src="{{ url('/') }}${$file}" class="img-fluid" alt="...">
                `;
            }
            document.getElementById("instant-3").classList.add('menu-active');
        }

        showList();

        function cari() {
            document.querySelector('.pusing-pegawai').style.display = 'block';
            search_term = document.getElementById('pencarian').value;
            showList();
        }
    </script>
</body>
