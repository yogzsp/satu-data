@extends('layouts.index')

@section('custom-head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script src="{{ asset('js/chartjs/chart.js') }}"></script> -->
    <!-- Pastikan ini ditempatkan sebelum kode JavaScript Anda -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('content')
    <div class="container-fluid p-3">
         {!!$dataDS->embed!!}

    </div>

@endsection