@extends('layouts.index')

@section('custom-head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script src="{{ asset('js/chartjs/chart.js') }}"></script> -->
    <!-- Pastikan ini ditempatkan sebelum kode JavaScript Anda -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
  /* Ganti warna latar belakang datepicker */
  .ui-datepicker {
    background-color: rgb(47, 42, 39, 0.7);
    color:white;
    border-radius:15px;
    overflow:hidden;
    width:400px;
    height:500px;
  }
  .ui-datepicker .ui-datepicker-header{
    background:transparent;
    border:none;
    margin-top:15px;
    padding-x:20px;
  }
 .ui-datepicker table{
    height:70%;
 }
 .ui-datepicker td > a:hover{
    background-color: rgb(47, 42, 39, 0.4) !important;
    transition:0.5s;
 }
 .ui-datepicker td > a{
    display:flex;
    align-items:center;
    justify-content:center;
    background:transparent !important;
    border:none !important;
    width:100%;
    height:100%;
    color:white !important;
    transition:0.5s;
 }
 
    </style>
@endsection

@section('content')
    <div class="w-100 py-5">
        <div class="w-100 bg-back position-fixed bg-batik" style="height:100%;top:0;z-index:-1;opacity:0.5;"></div>
        <div class="w-100 bg-back position-absolute" style="background-color:#969492;min-height:800px;top:0;z-index:-1;"></div>
        <div class="w-100 wellcome-screen container-fluid px-5 m-5">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="title-logo">
                        <h1 class="text-black" style="font-size:50px;">
                            Satu Data<br>Dewan Perwakilan Rakyat
                        </h1>
                        <h5 class="text-white w-50">
                            Selamat Datang di Portal Satu Data
                            Dewan Perwakilan Rakyat
                            Republik Indonesia
                        </h5>
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ asset('images/main/assets/komputer.png') }}">
                </div>
            </div>
        </div>
        <!-- card list -->
        <div class="container-fluid w-100 justify-content-between py-5 px-5">        
            <div class="row row-cols-3">
                <div class="col d-flex justify-content-center">
                    <x-card1 title="Data" images="{{ asset('images/main/assets/1.png') }}">
                        Dapatkan data terkait Dewan Perwakilan
                        Rakyat.
                    </x-card1>
                </div>
                <div class="col d-flex justify-content-center">
                    <x-card1 title="Dashboard" images="{{ asset('images/main/assets/2.png') }}">
                        Dapatkan informasi mengenai indikator utama 
                        suatu informasi dari Dewan Perwakilan Rakyat
                        dalam bentuk dashboard yang telah
                        dimodifikasi.
                    </x-card1>
                </div>
                <div class="col d-flex justify-content-center">
                    <x-card1 title="Infografis" images="{{ asset('images/main/assets/3.png') }}">
                        Dapatkan informasi mengenai indikator utama 
                        suatu informasi dari Dewan Perwakilan Rakyat
                        dalam bentuk dashboard yang telah
                        dimodifikasi.
                    </x-card1>
                </div>
            </div>
        </div>
        <!-- list data terbaru -->
        <div class="container-fluid">
            <div class="row row-cols-2 p-5 mx-5">
                <div class="col-9">
                    <h1 class="title-logo" style="font-size:40px;">Data Terbaru</h1>
                    <div class="list-group rounded-4 border border-dark">
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" id="datepicker" class="form-control" id="floatingInput" placeholder="MM/DD/YYYY">
                        <label for="floatingInput">Tanggal</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="p-5 mx-5">
                <h1 class="title-logo" style="font-size:40px;">Data Insight</h1>
                <div class="row row-cols-2 m-vh-100 border-solid border m-1 border-dark rounded-3 p-3 bg-white">
                    <div class="col">
                        <h1>Perbandingan Data</h1>
                        <div class="row row-cols-2">
                            <div class="col">
                                <x-donutChart borderw="0.5" label='["saty","dua","tiga","empat"]' tag="dataHaha" data='[100,200,300,400]' bg='["#C8CFDA", "#ACB6C6", "#7A8CA6", "#2268D1"]'>
                                    Nilai dari 
                                </x-donutChart>
                            </div>
                            <div class="col">
                                <x-donutChart label='["saty","dua","tiga","empat"]' tag="dataHahaHa" data='[100,200,300,400]' bg='["#C8CFDA", "#ACB6C6", "#7A8CA6", "#2268D1"]'>
                                    Nilai dari 
                                </x-donutChart>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h1>Harga Barang</h1>
                        <x-lineChart label='["saty","dua","tiga","empat"]' tag="dataLine" data='[100,500,200,300]' bg='["red"]'>
                            Nilai dari 
                        </x-lineChart>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid my-3">
            <div class="px-5">
                <h1 class="px-5 title-logo"  style="font-size:40px;">Berita Baru</h1>
            </div>
            <div id="myCarousel" class="carousel slide px-5" data-bs-ride="carousel">
                <div class="carousel-inner container-fluid px-5">
                    <!-- Tempatkan slide carousel di sini -->
                    <div class="carousel-item active">
                        <div style="overflow:hidden;height:50vh;" class="rounded-4">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100" alt="Slide 1">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="overflow:hidden;height:50vh;" class="rounded-4">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="d-block w-100" alt="Slide 2">
                        </div>
                    </div>
                    <!-- Tambahkan slide tambahan jika diperlukan -->
                </div>
            </div>

        </div>
    </div>
@endsection 

@section('custom-script')
    <script>
        // date picker
        $(document).ready(function() {
            $("#datepicker").datepicker({
                dateFormat: "mm/dd/yy", // Format tanggal
                showButtonPanel: true,   // Menampilkan tombol panel
                changeMonth: true,       // Menampilkan dropdown bulan
                changeYear: true         // Menampilkan dropdown tahun
                // Tambahan opsi lainnya sesuai kebutuhan
            });
        });
        
        var myCarousel = new bootstrap.Carousel(document.getElementById('myCarousel'));
    </script>
@endsection