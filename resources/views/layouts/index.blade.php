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
    @include("includes.assets.headers.home")
    
    @yield('content')
    
    @include("includes.assets.footers.home")

    @yield('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- @include("includes.auth.script") -->
</body>
</html>