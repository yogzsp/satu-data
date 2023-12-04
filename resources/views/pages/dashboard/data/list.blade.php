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
                        <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#myModal">Set Request</button>
                    </div>
                </div>
            </div>
            <div class="list-menu py-4 px-5 row row-cols-6">
                @foreach($dashboardData as $data)
                    <div class="col-md-3 mb-4">
                        <x-cardMenu url="{{route('dashboard-detail-pages',['id'=>$data->id])}}" wx="18rem" title="Data {{$data->name;}}" source="images/main/profile.png">Lorem ipsum dolor sit amet consectetur adipisicing elit. </x-cardMenu>
                    </div>
                @endforeach
            </div>
        </div>



        <!-- ini modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Tableau</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Input Nama Tableau dan Kode HTML -->
                    <!-- Form Input Nama Tableau dan Kode HTML -->
                    <form action="{{ route('dashboard-up') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="namaTableau" class="form-label">Nama Tableau:</label>
                            <input type="text" class="form-control" id="namaTableau" name="name" placeholder="Masukkan Nama Tableau" required>
                        </div>
                        <div class="mb-3">
                            <label for="kodeHTML" class="form-label">Kode HTML:</label>
                            <textarea class="form-control" id="kodeHTML" name="embed" rows="5" placeholder="Masukkan Kode HTML" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

                </div>
                </div>
            </div>
        </div>
    </main>
@endsection('content')