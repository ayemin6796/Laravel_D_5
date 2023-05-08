<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">;
    <title>@yield('title')</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 border p-3 rounded">
                @include("Layouts.header")
            </div>
            <div class="col-12 col-md-3">
                @include('Layouts.nav')
            </div>
            <div class="col-12 col-md-9 mt-3">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>