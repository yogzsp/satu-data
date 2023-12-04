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
    <main class="main px-3">
        <div class="container-fluid">
            <div class="search-bar container-fluid w-100 d-flex justify-content-center pt-5">
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
            <div class="search-bar container-fluid w-75 d-flex justify-content-start fs-2">
                <div class="row row-cols-2 w-100">
                    <div class="col d-flex align-items-center">
                        <span class="text-warning p-0 me-1" style="font-size:70px;">&bull;</span> <b class="me-2">100</b> Data Ditemukan
                    </div>
                    <div class="col text-end d-flex align-items-center justify-content-end">
                        <button class="btn btn-primary">Set Request</button>
                    </div>
                </div>
            </div>
            <div class="list-menu py-4 px-5 row row-cols-6">
                @foreach(range(1, 30) as $index)
                    <div class="col-md-3 mb-4">
                        <x-cardMenu wx="22rem" title="Data {{$index}}" source="images/main/profile.png">Lorem ipsum dolor sit amet consectetur adipisicing elit. </x-cardMenu>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection('content')