<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDS Filadelfia Tarutung</title>
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 80%;
            margin: 25px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 20px #89CFF0;
            border-radius: 10px;
        }

        .title {
            color: #007BFF;
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            align-items: center;
        }

        .image {
            max-width: 200px;
            margin-right: 20px;
        }

        .description {
            flex: 1;
        }

        .description p {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: white;
        }

        a:hover {
            color: #0056b3;
            text-decoration: none;
        }

        .read-more-btn {
            background-color: #89CFF0;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
            box-shadow: 0 0 5px rgba(137, 207, 240);
        }

        .read-more-btn:hover {
            background-color: #7393B3;
        }

        #garisbawah {
            text-decoration: none;
            color: white;
        }
        /* h3 {
            color: #2976DF;
        } */
    </style>
</head>

<body>

    {{-- jangan lupa coba $beranda --}}
    @php
        $beritas = \App\Models\Berita::all();
    @endphp

    @php
        $beritas = \App\Models\Berita::latest()->select('berita.*')->paginate(100);
    @endphp


    <!-- Navbar -->
    @include('navbar')

    <!-- Hero image -->
    <div class="hero">
        <img src="{{ asset('img/Berita.jpg') }}" alt="Background Image" class="hero-image" style="width: 100%; height: 440px">
        <div class="hero-overlay">
            <h1 id="welcome-part1"></h1>
            <h1 id="welcome-part2"></h1>
        </div>
    </div>
        <div class="col-md-12 text-center fh5co-heading">
            <h2>Berita Terbaru</h2><br>
        </div>
        <br>
        @foreach ($beritas->items() as $berita)
            <div class="container">
                <div class="content">
                    <img src="{{ asset('images/berita/' . $berita->image) }}" class="image" alt="{{ $berita->informasi_berita }}" style="width: 90%; border-radius: 15px;">
                    <div class="description">
                        <h3 style="color: #2976DF">{{ $berita->informasi_berita }}</h3>
                        @php
                            $words = explode(' ', $berita->informasi_alumni);
                            $preview = implode(' ', array_slice($words, 0, 20)) . (count($words) > 20 ? '...' : '');
                        @endphp
                        <p>{{ $preview }}</p>
                        <button class="read-more-btn">
                            <a href="{{ route('user.berita.show', ['berita_id' => $berita->berita_id]) }}" id="garisbawah">
                                Baca Lebih Lanjut
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="col-md-12 text-center fh5co-heading" style="margin-top: 50px; text-align: center;">
        <h2 style="font-size: 40px;">Berita</h2><br>
    </div>
    <br>
    @foreach ($beritas->items() as $berita)
        <div class="container">
            <h1 class="title">{{ $berita->informasi_berita }}</h1>
            <div class="content">
                <img src="{{ asset('/storage/' . $berita->image) }}" class="image">
                <div class="description">
                    @php
                        $words = explode(' ', $berita->informasi_alumni);
                        $preview = implode(' ', array_slice($words, 0, 20)) . (count($words) > 20 ? '...' : '');
                    @endphp
                    <p>{{ $preview }}</p>
                    <button class="read-more-btn">
                        <a href="{{ route('user.berita.show', ['berita_id' => $berita->berita_id]) }}" id="garisbawah">
                            Baca Lebih Lanjut
                        </a>
                    </button>
                </div>
            </div>
        </div>
    @endforeach --}}

    <br><br>
    @include('components.scroll-to-top')
    <!-- Footer -->
    @include('footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
