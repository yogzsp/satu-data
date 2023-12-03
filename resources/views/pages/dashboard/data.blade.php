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

    <div class="w-100 py-5">
        <div class="w-100 bg-back position-fixed bg-batik" style="height:100%;top:0;z-index:-1;opacity:0.5;"></div>
        <div class="w-100 bg-back position-absolute" style="background-color:#DADADA;min-height:430px;top:0;z-index:-1;"></div>
        <div class="w-100 wellcome-screen container-fluid px-5 mx-5 d-flex justify-content-center">
            <div class="row row-cols-2 w-75">
                <div class="col-7 ps-5 d-flex align-items-center">
                    <div class="title-logo">
                        <h1 class="text-black" style="font-size:32px;">
                            Data Dewan Perwakilan Rakyat,<br>
                            Pengelolaan Satu Data
                        </h1>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <img src="{{ asset('images/main/assets/komputer2.png') }}" style="width:300px;">
                </div>
            </div>
        </div>
        <div class="search-bar container-fluid w-100 d-flex justify-content-center">
            <div class="input-group" style="width:60vw;">
                <input type="text" class="form-control p-3 rounded-start-4" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                <span class="input-group-text rounded-end-4 px-4" id="basic-addon2" style="background:#9F7760;"><i class="bi bi-search"></i></span>
            </div>
        </div>
        <div class="topik-list container-fluid w-100 d-flex justify-content-center my-5">
            <div class="row row-cols-4 w-50">
                <div class="col">
                    <div class="rounded-3 icon-topik bg-white border border-secondary d-flex justify-content-center" style="width:200px;height:200px; overflow:hidden;">
                        <img src="{{ asset('images/main/assets/icons/pilot.png') }}" style="width:95%;" class="align-self-end">
                    </div>
                    <div class="title-topik text-center fw-bold fs-3">
                        Kereta
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-3 icon-topik bg-white border border-secondary d-flex justify-content-center" style="width:200px;height:200px; overflow:hidden;">
                        <img src="{{ asset('images/main/assets/icons/pariwisata.png') }}" style="width:95%;" class="align-self-end">
                    </div>
                    <div class="title-topik text-center fw-bold fs-3">
                        Pariwisata
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-3 icon-topik bg-white border border-secondary d-flex justify-content-center" style="width:200px;height:200px; overflow:hidden;">
                        <img src="{{ asset('images/main/assets/icons/sailor.png') }}" style="width:82%;" class="align-self-end">
                    </div>
                    <div class="title-topik text-center fw-bold fs-3">
                        Pelabuhan
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-3 icon-topik bg-white border border-secondary d-flex justify-content-center" style="width:200px;height:200px; overflow:hidden;">
                        <img src="{{ asset('images/main/assets/icons/health.png') }}" style="width:100%;" class="align-self-end">
                    </div>
                    <div class="title-topik text-center fw-bold fs-3">
                        Kesehatan
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection