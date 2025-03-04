<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO BINTANG SERASI</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg') }}">

    <style>
        .nav-orange {
            background-color: #0056b3; /* Modern Blue */
        }

        .nav-link {
            font-size: 26px;
            transition: border-bottom 0.3s ease-in-out;
            margin-right: 20px;
            font-family: 'Arial', sans-serif;
        }

        .nav-link:hover {
            border-bottom: 2px solid #ffffff;
        }

        .nav-link.active {
            border-bottom: 2px solid #ffffff;
        }

        .logo img {
            max-width: 100px;
        }

        .logo .text {
            margin-left: 12px;
        }

        .navbar-nav .dropdown-menu {
            background-color: white;
        }

        span {
            font-family: 'Arial', sans-serif;
            font-size: 26px;
            color: white;
            margin-left: 20px;
        }

        .navbar.fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #0056b3;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-orange">
        <div class="logo clearfix">
            <div class="header">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logoo.jpeg') }}" alt="Logo Sekolah" class="logo" style="width: 80px;">
                    <div class="text float-right" style="margin-top: 20px;">
                        <span class="nav-item text-white">TOKO BINTANG SERASI</span>
                    </div>
                </a>
            </div>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-white" href="{{ route('home') }}">Beranda</a>
                <a class="nav-item nav-link text-white" href="{{ route('artikel') }}">Berita</a>
                <a class="nav-item nav-link text-white"
                    href="{{ route('user.fasilitasuser') }}">Katalog</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('sekolah') }}">Profil Toko</a>
                        <a class="dropdown-item" href="{{ route('alumni') }}">Kritik dan Saran</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() >= 100) {
                $('.navbar').addClass('fixed-top');
            } else {
                $('.navbar').removeClass('fixed-top');
            }
        });
    </script>
</body>

</html>
