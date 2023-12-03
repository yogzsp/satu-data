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
    </style>
@endsection

@section('content')
    <div class="w-100 py-5">
        <div class="search-bar container-fluid w-100 d-flex justify-content-center">
            <div class="form-search row">
                <div class="input-group" style="width:60vw;">
                    <input type="text" class="form-control p-3 rounded-start-4" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    <span class="input-group-text rounded-end-4 px-4" id="basic-addon2" style="background:#9F7760;"><i class="bi bi-search"></i></span>
                </div>
                <select class="form-select ms-3" aria-label="Default select example" style="width:10vw;">
                    <option selected>Filter</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="search-bar container-fluid w-75 d-flex justify-content-start mt-5 fs-2">
            <span class="badge badge-warning"> &nbsp; </span><b class="me-2">100</b> Data Ditemukan
        </div>
        <div class="list-dataset w-100 d-flex justify-content-center my-5">
            <div class="list-group rounded-4 border border-dark w-75">
                <x-itemListGroup :dataJenis="['CSV','XLSX']" title="Jumlah Data Peserta Magang Provinsi Banten di DPR RI" pusatData="Dewan Perwakilan Rakyat" date="12 Desember 2022">Dataset yang berisi data para peserta magang dari Provinsin Banten.</x-itemListGroup>
                <x-itemListGroup :dataJenis="['CSV','XLSX']" title="Jumlah Data Peserta Magang Provinsi Banten di DPR RI" pusatData="Dewan Perwakilan Rakyat" date="12 Desember 2022">Dataset yang berisi data para peserta magang dari Provinsin Banten.</x-itemListGroup>
                <x-itemListGroup :dataJenis="['CSV','XLSX']" title="Jumlah Data Peserta Magang Provinsi Banten di DPR RI" pusatData="Dewan Perwakilan Rakyat" date="12 Desember 2022">Dataset yang berisi data para peserta magang dari Provinsin Banten.</x-itemListGroup>
                <x-itemListGroup :dataJenis="['CSV','XLSX']" title="Jumlah Data Peserta Magang Provinsi Banten di DPR RI" pusatData="Dewan Perwakilan Rakyat" date="12 Desember 2022">Dataset yang berisi data para peserta magang dari Provinsin Banten.</x-itemListGroup>
                <x-itemListGroup :dataJenis="['CSV','XLSX']" title="Jumlah Data Peserta Magang Provinsi Banten di DPR RI" pusatData="Dewan Perwakilan Rakyat" date="12 Desember 2022">Dataset yang berisi data para peserta magang dari Provinsin Banten.</x-itemListGroup>
                <x-itemListGroup :dataJenis="['CSV','XLSX']" title="Jumlah Data Peserta Magang Provinsi Banten di DPR RI" pusatData="Dewan Perwakilan Rakyat" date="12 Desember 2022">Dataset yang berisi data para peserta magang dari Provinsin Banten.</x-itemListGroup>
                <x-itemListGroup :dataJenis="['CSV','XLSX']" title="Jumlah Data Peserta Magang Provinsi Banten di DPR RI" pusatData="Dewan Perwakilan Rakyat" date="12 Desember 2022">Dataset yang berisi data para peserta magang dari Provinsin Banten.</x-itemListGroup>
            </div>
        </div>
    </div>
@endsection