<nav class="navbar navbar-expand-lg bg-custom1 navbar-dark px-5">
    <!-- navbar logo -->
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
                @include("includes.assets.logo")
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!-- navbar list -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-3 fs-4">
                <a class="nav-link active" aria-current="page" href="{{route('home-pages')}}">Beranda</a>
            </li>
            <li class="nav-item px-3 fs-4">
                <a class="nav-link" href="{{route('data-pages')}}">Data</a>
            </li>
            <li class="nav-item px-3 fs-4">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item px-3 fs-4">
                <a class="nav-link" href="#">Infografis</a>
            </li>
            <li class="nav-item px-3 fs-4">
                <a class="nav-link" href="#">Tentang</a>
            </li>
            <li class="nav-item px-3 fs-4">
                <a class="nav-link" href="{{route('login-pages')}}">
                    <img src="{{ asset('images/main/profile.png') }}" alt="Rounded circle Image" class="rounded-circle" style="width:50px;height:50px;">
                </a>
            </li>
        </ul>
    </div>
</nav>