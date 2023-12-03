@extends('layouts.index')

@section('custom-head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script src="{{ asset('js/chartjs/chart.js') }}"></script> -->
    <!-- Pastikan ini ditempatkan sebelum kode JavaScript Anda -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .kategori-file li{
            float:left;
            border:solid 1px gray;
            border-radius:20px;
            padding:4px;
            background-color:rgb(128,128,128,0.2);
        }

        .breadcrumb .active {
          font-weight:bold;
          color: black;
        }

        .header {
          background: url('{{ asset('images/main/assets/bg-batik.png') }}');
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          font-weight: bold;
          margin-left: 0px;
          margin-right: 0px;
        }

        .sub-header {
          margin-left: 0px;
          margin-right: 0px;
          background-color: #E7E7E7;
        }

        /* Bordered Tabs */
        .nav-tabs-bordered {
          border-bottom: 2px solid #ebeef4;
        }

        .nav-tabs-bordered .nav-link {
          margin-bottom: -2px;
          border: none;
          color: #2c384e;
        }

        .nav-tabs-bordered .nav-link:hover,
        .nav-tabs-bordered .nav-link:focus {
          color: #D4A216;
        }

        .nav-tabs-bordered .nav-link.active {
          background-color: #fff;
          color: #D4A216;
          border-bottom: 2px solid #D4A216;
        }
    </style>
@endsection

@section('content')
<main class="main px-3">
  <div class="mt-5 container-fluid">
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Beranda</li>
          <li class="breadcrumb-item">Dataset</li>
          <li class="breadcrumb-item active">Jumlah Data Kereta Api</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  </div>

  <div class="my-4 container-fluid">
    <div class="card mb-4">
        <div class="row d-flex align-items-center header">
          <div class="col-3">
            <img src="{{ url('images/main/assets/vector.png') }}" width="200px" alt="" class="ms-4">
          </div>
          <div class="col-9 text-center">
            <h1>Jumlah Data Kereta Api</h1>
          </div>
        </div>
        <div class="row sub-header">
          <div class="col-6 d-flex">
            <div class="d-inline-block ms-5 align-items-center">
                <i class="bi bi-newspaper fs-2"></i>
                <span class="ml-2">Kereta</span>
            </div>
            <div class="d-inline-block ms-5 align-items-center">
                <i class="bi bi-calendar-event fs-2"></i>
                <span class="ml-2">2023</span>
            </div>
            <div class="d-inline-block ms-5 align-items-center">
                <i class="bi bi-ubuntu fs-2"></i>
                <span class="ml-2">3 bulan yang lalu</span>
            </div>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <div class="d-inline-block ms-3">
                <i class="bi bi-download fs-2"></i>
            </div>
            <div class="d-inline-block ms-3 my-2">
              <button class="btn border border-dark rounded-pill">CSV</button>
            </div>
            <div class="d-inline-block ms-3 my-2">
              <button class="btn border border-dark rounded-pill">Json</button>
            </div>
            <div class="d-inline-block ms-3 my-2">
              <button class="btn border border-dark rounded-pill">xlsx</button>
            </div>
            <div class="d-inline-block ms-3 my-2">
              <button class="btn border border-dark rounded-pill">pdf</button>
            </div>
          </div>
        </div>
    </div>

    <div class="card">
      <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">
          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#data">Data</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#meta-data">Meta Data</button>
          </li>
        </ul>
        <div class="tab-content pt-2">
          <div class="tab-pane fade show active profile-overview p-3" id="data">
            <h5 class="card-title">Deskripsi Dataset</h5>
            <p class="small">Dataset ini berisi data jumlah desa yang stop buang air besar sembarangan (babs) berdasarkan kabupaten/kota di Provinsi Jawa Barat dari tahun 2019 s.d. 2022. Dataset terkait topik Kesehatan ini dihasilkan oleh Dinas Kesehatan yang dikeluarkan dalam periode 1 tahun sekali.</p>
          </div>
          <div class="tab-pane fade profile-edit pt-3" id="meta-data">
            <div class="tab-pane fade show active profile-overview p-3" id="data">
              <p class="">Penjelasan mengenai variabel di dalam dataset ini:
                <ul>
                  <li>kode_provinsi: menyatakan kode Provinsi Jawa Barat sesuai ketentuan BPS merujuk pada aturan Peraturan Badan Pusat Statistik Nomor 3 Tahun 2019 dengan tipe data numerik.</li>
                  <li>nama_provinsi: menyatakan lingkup data berasal dari wilayah Provinsi Jawa Barat sesuai ketentuan BPS merujuk pada aturan Peraturan Badan Pusat Statistik Nomor 3 Tahun 2019 dengan tipe data teks.</li>
                  <li>kode_kabupaten_kota: menyatakan kode dari setiap kabupaten dan kota di Provinsi Jawa Barat sesuai ketentuan BPS merujuk pada aturan Peraturan Badan Pusat Statistik Nomor 3 Tahun 2019 dengan tipe data numerik.</li>
                  <li>nama_kabupaten_kota: menyatakan lingkup data berasal dari setiap kabupaten dan kota di Provinsi Jawa Barat sesuai penamaan BPS merujuk pada aturan Peraturan Badan Pusat Statistik Nomor 3 Tahun 2019 dengan tipe data teks.</li>
                  <li>jumlah_desa: menyatakan jumlah desa yang stop buang air besar sembarangan (babs) dengan tipe data numerik.</li>
                  <li>satuan: menyatakan satuan dari pengukuran jumlah desa yang stop buang air besar sembarangan (babs) dalam desa dengan tipe data teks.</li>
                  <li>tahun: menyatakan tahun produksi data dengan tipe data numerik.</li>
                </ul>
              </p>
            </div>
          </div>
        </div><!-- End Bordered Tabs -->
      </div>
    </div>

    <div class="card mt-4">
      <div class="card-body pt-4">
        <h5 class="title">
          Ringkasan Data
        </h5>
        <div class="row">
          <div class="col-3">
            <div class="card p-2">
              <h5>Jumlah Kereta Api</h5>
              <p>1289<i class="bi bi-graph-up-arrow"></i></p>
              <p>Data Tahun 2023</p>
            </div>
          </div>
          <div class="col-3">
            <div class="card p-2">
              <h5>Jumlah Kereta Api</h5>
              <p>1289<i class="bi bi-graph-up-arrow"></i></p>
              <p>Data Tahun 2023</p>
            </div>
          </div>
          <div class="col-3">
            <div class="card p-2">
              <h5>Jumlah Kereta Api</h5>
              <p>1289<i class="bi bi-graph-up-arrow"></i></p>
              <p>Data Tahun 2023</p>
            </div>
          </div>
          <div class="col-3">
            <div class="card p-2">
              <h5>Jumlah Kereta Api</h5>
              <p>1289<i class="bi bi-graph-up-arrow"></i></p>
              <p>Data Tahun 2023</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

    
@endsection