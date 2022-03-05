<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" href="{{asset('app/icons/favicon.ico')}}">
    <meta name="theme-color" content="#8CC152">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Absensi Online | Laporan</title>
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/style.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/css/fontawesome-all.min.css')}}">
    <link rel="manifest" href="{{asset('manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('app/icons/icon-192x192.png')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
        
    <div id="page">
        
        <div class="header header-fixed header-logo-center">
            <a href="#" class="header-title">Dashboard Admin</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>
        
        <div id="footer-bar" class="footer-bar-1">
            <a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i><span>Dashboard</span></a>
            <a href="{{route('admin.laporan')}}" class="active-nav"><i class="fa fa-file-pdf"></i><span>Laporan</span></a>
            <a href="{{route('admin.pegawais')}}" ><i class="fa fa-users"></i><span>Data Pegawai</span></a>
            <a href="{{route('admin.pengaturan')}}"><i class="fa fa-cog"></i><span>Pengaturan</span></a>
            <a href="{{route('admin.logout')}}"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </div>
            
        <div class="page-content header-clear-medium">
            
            <div class="card card-style">
                <div class="content mb-2">
                    <h3>Laporan</h3>
                    <p>
                        Daftar Absensi Pegawai DKP3A
                    </p>
                    <table id="myTable" class="table table-borderless text-center rounded-sm shadow-l display nowrap" style="width:100%">
                        <thead>
                            <tr class="bg-gray-dark">
                                <th scope="col" class="color-white">No</th>
                                <th scope="col" class="color-white">NIP/ID</th>
                                <th scope="col" class="color-white">Nama</th>
                                <th scope="col" class="color-white">Waktu</th>
                                <th scope="col" class="color-white">Status</th>
                                <th scope="col" class="color-white">Jenis</th>
                                <th scope="col" class="color-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End of Page Content--> 
        <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->
            <div id="menu-detail" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="480">
                <div class="menu-title"><h1>Detail Laporan</h1><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                <div class="divider divider-margins mb-1 mt-3"></div>
                <div class="content">
                    <div class="row mb-0">
                        <div class="col-3">
                            <img id="fotoPegawai" src="images/pictures/faces/1s.png" width="80" class="rounded-xl">
                        </div>
                        <div class="col-9 ps-4">
                            <div class="d-flex">
                                <div><p class="font-700 color-theme">Nama</p></div>
                                <div class="ms-auto" id="namaPegawai"><p>-</p></div>
                            </div>
                            <div class="d-flex">
                                <div><p class="font-700 color-theme">NIP/ID</p></div>
                                <div class="ms-auto" id="nipId"><p>-</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider mt-3 mb-3"></div>
                    <div class="row mb-0">
                        <div class="col-6"><h4 class="font-14">Jenis</h4></div>
                        <div class="col-6"><h4 class="font-14 text-end" id="jenisPegawai">-</h4></div>
                        <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                        <div class="col-6"><h4 class="font-14 mt-1">Jam</h4></div>
                        <div class="col-6"><h4 class="font-14 text-end mt-1" id="jamPegawai">-</h4></div>
                        <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                        <div class="col-6"><h4 class="font-14 mt-1">Keterangan</h4></div>
                        <div class="col-6"><h4 class="font-14 text-end mt-1" id="keteranganPegawai">-</h4></div>
                        <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                        <div class="col-6"><h4 class="font-14 mt-1">Titik Koordinat</h4></div>
                        <div class="col-6"><h4 class="font-14 text-end mt-1 color-green-dark" id="lokasiKoordinat">-</h4></div>
                        <div class="divider divider-margins w-100 mt-2 mb-3"></div>
                        <div class="col-12"><a href="#" id="titikKoordinat" class="close-menu btn btn-full btn-m bg-blue-dark rounded-sm text-uppercase font-800"> Cek Lokasi</a></div>
                    </div>
                </div>
            </div>   
    </div>
    
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script>
        URL = `{{url('/')}}`;
        $(document).ready( function () {
            $('#myTable').DataTable({
                    "ajax": `${URL}/api/absens`,
                    dom: 'Bfrtip',
                    buttons: [
                        'csv', 'excel', 'pdf', 'print'
                    ],
                    "columns": [
                        {"data": "id" , render : function ( data, type, row, meta ) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }},
                        {"data": "pegawai.nip" , render : function ( data, type, row, meta ) {
                        return data === null  ? `-` :
                            data;
                        }},
                        {"data": "pegawai.nama_lengkap" },
                        {"data": "waktu" },
                        {"data": "keterangan" , render : function ( data, type, row, meta ) {
                        return data === '0'  ? `Kerja` : data;
                        }},
                        {"data": "status" , render : function ( data, type, row, meta ) {
                        return data === '1'  ? `Absen Masuk` : 'Absen Pulang';
                        }},
                        {"data": "id" , render : function ( data, type, row, meta ) {
                        return type === 'display'  ? `
                            <a href="#" onclick="showModal('${data}')" class="me-3 mb-3 icon icon-s rounded-sm bg-facebook"><i class="fas fa-eye"></i></a>
                        ` :
                        // <a href="#" onclick="showEdit('${data}')"  class="me-3 mb-3 icon icon-s rounded-sm bg-green-dark"><i class="fas fa-edit"></i></a>
                            data;
                        }},
                    ],
                    "order": [[ 0, "asc" ]],
                    "paging": true,
                    responsive: true,
            });
        } );

        function showModal(id)
        {
            const url = `{{ url('/api/absens/${id}') }}`;
            fetch(url)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    document.getElementById('jenisPegawai').innerHTML = ``;
                    if (data.data.status == `1`) {
                        document.getElementById('jenisPegawai').innerHTML = `<span class="badge bg-blue-dark">Absen Masuk</span>`;
                    } else {
                        document.getElementById('jenisPegawai').innerHTML = `<span class="badge bg-yellow-dark">Absen Pulang</span>`;
                    }

                    if (data.data.pegawai.photo !== null) {
                            document.getElementById('fotoPegawai').src = data.data.pegawai.photo;
                        } else {
                            document.getElementById('fotoPegawai').src = 'https://via.placeholder.com/50';
                        }
                    
                        if (data.data.keterangan != 0) {
                            document.getElementById('keteranganPegawai').innerHTML = data.data.keterangan;
                        } else {
                            document.getElementById('keteranganPegawai').innerHTML = 'Tidak Ada';
                        }

                    document.getElementById('namaPegawai').innerHTML = data.data.pegawai.nama_lengkap;
                    document.getElementById('nipId').innerHTML = data.data.pegawai.nip;
                    document.getElementById('jamPegawai').innerHTML = data.data.jam;
                    document.getElementById('lokasiKoordinat').innerHTML =`
                    <small>Lat: ${data.data.latitude}, <br> Long: ${data.data.longitude}</small>`;
                        document.getElementById('titikKoordinat').setAttribute('onclick',
                            `lokasi('${data.data.latitude}','${data.data.longitude}')`);
                })
            document.getElementById('menu-detail').classList.add('menu-active');
            document.getElementsByClassName('menu-hider')[0].classList.add('menu-active');
        }

        function showEdit(id)
        {
            const url = `{{ url('/api/absens/${id}') }}`;
            fetch(url)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    document.getElementById('jenisPegawai').innerHTML = ``;
                    if (data.data.status == `1`) {
                        document.getElementById('jenisPegawai').innerHTML = `<span class="badge bg-blue-dark">Absen Masuk</span>`;
                    } else {
                        document.getElementById('jenisPegawai').innerHTML = `<span class="badge bg-yellow-dark">Absen Pulang</span>`;
                    }

                    if (data.data.pegawai.photo !== null) {
                            document.getElementById('fotoPegawai').src = data.data.pegawai.photo;
                        } else {
                            document.getElementById('fotoPegawai').src = 'https://via.placeholder.com/50';
                        }
                    
                        if (data.data.keterangan != 0) {
                            document.getElementById('keteranganPegawai').innerHTML = data.data.keterangan;
                        } else {
                            document.getElementById('keteranganPegawai').innerHTML = 'Tidak Ada';
                        }

                    document.getElementById('namaPegawai').innerHTML = data.data.pegawai.nama_lengkap;
                    document.getElementById('nipId').innerHTML = data.data.pegawai.nip;
                    document.getElementById('jamPegawai').innerHTML = data.data.jam;
                    document.getElementById('lokasiKoordinat').innerHTML =`
                    <small>Lat: ${data.data.latitude}, <br> Long: ${data.data.longitude}</small>`;
                        document.getElementById('titikKoordinat').setAttribute('onclick',
                            `lokasi('${data.data.latitude}','${data.data.longitude}')`);
                })
            document.getElementById('menu-detail').classList.add('menu-active');
            document.getElementsByClassName('menu-hider')[0].classList.add('menu-active');
        }

        function lokasi(lat, lon) {
            window.open(`http://maps.google.com/maps?q=loc:${lat},${lon}`, '_blank');
        }
    </script>
    <script type="text/javascript" src="{{asset('scripts/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
    </body>
