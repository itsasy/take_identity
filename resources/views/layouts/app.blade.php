<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    @include('partials.navbar')

    <div class="py-4">
        <div class="container">
            @if(session()->has('flash'))
            <div class="alert alert-info" role="alert">
                {{session('flash')}}
            </div>
            @endif
            @yield('content')
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
