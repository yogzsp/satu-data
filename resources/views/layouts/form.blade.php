<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title") - Anu</title>
    <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/all.min.css') }}">
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
</body>
</html>