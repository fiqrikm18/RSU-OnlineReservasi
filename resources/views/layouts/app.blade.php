<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('image/icon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title") | Reservasi Online</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('image/logo.png') }}" alt="logo_rs" width="50" height="50" />
                    Rumah Sakit Muhammadiyah Bandung
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/profile') }}" class="nav-link">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/poliklinik') }}" class="nav-link">Poliklinik</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/jadwal-dokter') }}" class="nav-link">Jadwal Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/daftar-antrian') }}" class="nav-link">Daftar Antrian</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" id="content">
            @yield('content')
        </main>

        <footer class="footer mt-auto py-3 cust-footer">
            <div class="container" style="color:white">
                <div class="row">
                    <div class="col">
                        <p>Alamat<br />Jl. K.H. Ahmad Dahlan No.53, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264</p>
                    </div>

                    <div class="col">
                        <p>Telpon:<br />022-7301062</p>
                        <p>Email:<br />kontak@rsmb.co.id</p>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <span>Rumah Sakit Muhammadiyah Bandung</span>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</script>
</body>

</html>
