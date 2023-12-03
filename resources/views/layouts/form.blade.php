<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title") - Anu</title>
    @include("includes.default")
    @include("includes.auth.style")
    @yield('custom-head')
</head>
<body>
    @include("includes.assets.headers.auth")
    <div class="d-flex justify-content-center align-items-center min-vw-100 bg-batik" style="min-height:86vh;">
        @yield('content')
    </div>
    
    @include("includes.assets.footers.auth")
    <!-- @include("includes.auth.script") -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>