<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOKO BINTANG SERASI</title>
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg') }}">
    <style>
        .hero {
            position: relative;
            height: 700px;
            background-size: cover;
            background-position: center;
        }

        .hero .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 200px;
            left: 100px;
            padding: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            z-index: 2;
            color: black;
        }

        .hero-overlay h1 {
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            margin: 0;
            overflow: hidden;
            border-right: .10em white;
            white-space: nowrap;
            letter-spacing: .20em;
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: white
            }
        }

        .content-container {
            padding: 75px;
        }

        .col-container:after {
            content: "";
            display: table;
            clear: both;
        }

        .column-one {
            float: left;
            width: 66.66666%;
            padding: 25px;
        }

        .column-two {
            float: left;
            width: 33.33333%;
            padding: 25px;
        }

        .l-font {
            font-size: 20px;
            color: #03071e;
            text-align: justify;
        }

        .xl-font {
            font-size: 65px;
            color: #03071e;
        }

        @media screen and (max-width: 800px) {

            .column-one,
            .column-two {
                width: 100%;
                text-align: center;
            }

            img {
                margin: auto;
            }
        }

        .text {
            max-height: 150px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            text-align: justify;
        }

        .text.expanded {
            white-space: normal;
            max-height: none;
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

        .box {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px #89CFF0;
            margin-left: 30px;
            margin-right: 30px;
        }

        .profile-img {
            width: 335px;
            height: 400px;
            border-radius: 50%;
            bottom: 50px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 30px;
            border-radius: 50px;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 4px 20px #89CFF0;
            padding: 2px;
            border-radius: 50px;
        }

        .card-body {
            flex-direction: column;
            display: flex;
            justify-content: space-around;
        }

        @media screen and (max-width: 800px) {
            .card-container {
                grid-template-columns: 1fr;
            }
        }

        #garisbawah {
            text-decoration: none;
            color: white;
            padding-bottom: 20px;
        }

        button.berita {
            background-color: #89CFF0;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
            box-shadow: 0 0 5px rgba(137, 207, 240);
        }

        .berita:hover {
            background-color: #7393B3;
        }

        .card img.card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
        }
    </style>
</head>

<body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const readMoreButtons = document.querySelectorAll('.read-more-btn');

            readMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const text = this.previousElementSibling;

                    if (text.classList.contains('expanded')) {
                        text.classList.remove('expanded');
                        this.textContent = 'Baca Lebih Lanjut';
                    } else {
                        text.classList.add('expanded');
                        this.textContent = 'Baca Lebih Sedikit';
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const textPart1 = "SELAMAT DATANG DI WEBSITE";
            const textPart2 = "Toko Bintang Serasi Balige";
            let i = 0;
            let j = 0;
            const speed = 70;
            const welcomeElement1 = document.getElementById("welcome-part1");
            const welcomeElement2 = document.getElementById("welcome-part2");

            function typeWriter1() {
                if (i < textPart1.length) {
                    welcomeElement1.innerHTML += textPart1.charAt(i);
                    i++;
                    setTimeout(typeWriter1, speed);
                } else {
                    setTimeout(typeWriter2, 500); // Start the second text after a delay
                }
            }

            function typeWriter2() {
                if (j < textPart2.length) {
                    welcomeElement2.innerHTML += textPart2.charAt(j);
                    j++;
                    setTimeout(typeWriter2, speed);
                }
            }

            typeWriter1();
        });
    </script>

    @php
        $beranda = \App\Models\Beranda::all();
    @endphp

    @php
        $beritas = \App\Models\Berita::latest()->select('berita.*')->paginate(4);
    @endphp

    <div>
        <!-- Navbar -->
        @include('navbar')
        <!-- Hero image -->
        <div>
            <img src="{{ asset('img/toko.png') }}" alt="Background Image" class="hero-image"
                style="height: 470px; width:100%;">
            <div class="hero-overlay">
                <h1 id="welcome-part1"></h1>
                <h1 id="welcome-part2"></h1>
            </div>
        </div>
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Container slider */
        .slider-container {
            width: 100%;
            height: 500px; /* Sesuaikan tinggi agar tidak terlalu besar */
            overflow: hidden;
            position: relative;
        }

        .slider {
            display: flex;
            width: 100%; /* Menyesuaikan jumlah gambar */
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            width: 100%;
            flex-shrink: 0;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Menyesuaikan tanpa merusak proporsi */
        }

        /* Tombol Navigasi */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 15px;
            border: none;
            cursor: pointer;
            font-size: 24px;
            border-radius: 5px;
            z-index: 10;
        }

        .prev { left: 20px; }
        .next { right: 20px; }

        .prev:hover, .next:hover {
            background: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>

    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="img/slider1.png" alt="Gambar 1"></div>
            <div class="slide"><img src="img/slider2.png" alt="Gambar 2"></div>
            <div class="slide"><img src="img/slider3.png" alt="Gambar 3"></div>
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>

    <script>
        let index = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        const slider = document.querySelector('.slider');

        function updateSlide() {
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            index = (index + 1) % totalSlides;
            updateSlide();
        }

        function prevSlide() {
            index = (index - 1 + totalSlides) % totalSlides;
            updateSlide();
        }

        setInterval(nextSlide, 3000); // Pindah otomatis setiap 3 detik
    </script>

        <br>

        <div class="col-md-12 text-center fh5co-heading" style="text-align: center;">
            <h2>Kata Sambutan</h2><br>
        </div><br><br>

        @foreach ($beranda as $key => $value)
            <!-- Ketua Yayasan -->
            <div class="box">
                <div class="content-container">
                    <div class="col-container">
                        <div class="column-one">
                            <h1 class="xl-font"><b>Ketua Yayasan</b></h1>
                            <h2><b class="l-font text">{{ $value->namaketua }}</b></h2>
                            <p class="l-font text">{{ $value->ketua }}</p>
                            <button class="read-more-btn" data-target=".text">Baca Lebih Lanjut</button>
                        </div>
                        <div class="column-two">
                            <center>
                                <img src="{{ asset('images/beranda/' . $value->ketua_image) }}" alt="Ketua Yayasan"
                                    class="profile-img">
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

            <!-- Kepala Sekolah -->
            <div class="box">
                <div class="content-container">
                    <div class="col-container">
                        <div class="column-two">
                            <center>
                                <img src="{{ asset('images/beranda/' . $value->kepala_image) }}" alt="Kepala Sekolah"
                                    class="profile-img">
                            </center>
                        </div>
                        <div class="column-one">
                            <h1 class="xl-font"><b>Kepala Sekolah</b></h1>
                            <h2><b class="l-font text">{{ $value->namakepala }}</b></h2>
                            <p class="l-font text">{{ $value->kepala }}</p>
                            <button class="read-more-btn" data-target=".text">Baca Lebih Lanjut</button>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>
        @endforeach
    </div>

    <div class="container">
        <div class="col-md-12 text-center fh5co-heading">
            <h2>Berita Terbaru</h2><br>
        </div>
        <br><br><br>
        <div class="card-container" style="border-radius: 15px;">
            @foreach ($beritas as $key => $value)
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/berita/' . $value->image) }}" alt="{{ $value->image }}"
                            class="card-img-top" style="width: 100%; ">
                        <h5 class="card-title" style="color: #007BFF;">{{ $value->informasi_berita }}</h5>
                        <p class="card-text text" id="berita-{{ $key }}" style="text-align: center;">
                            {{ $value->informasi_alumni }}</p>
                        <!-- Tambahkan link menuju halaman artikel/show/berita_id -->
                        <button class="berita" data-target="#berita-{{ $key }}">
                            <a href="{{ route('user.berita.show', ['berita_id' => $value->berita_id]) }}"
                                id="garisbawah">Baca Selengkapnya</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <!-- Pagination -->
    <div class="container" id="next">
        <center>
            {{ $beritas->links() }}
        </center>
    </div> --}}

    {{-- <div class="row animate-box">
        <div class="col-md-12 text-center fh5co-heading" style="margin-top: 50px; text-align: center;">
            <h2>Informasi Terbaru</h2><br>
        </div>
        <br><br>
        <div class="container">
            <div class="card-container" style="margin-top: 60px;">
                @foreach ($beritas as $key => $value)
    <div class="card">
        <div class="card-body text-center">
            <img src="{{ asset('storage/'. $value->image) }}" alt="{{$value->image}}" class="img-fluid mb-3" style="width: 90%">
            <h5 class="card-title" style="color: #007BFF;">{{$value->informasi_berita}}</h5>
            <p class="card-text text" id="berita-{{$key}}" style="text-align: center;">{{$value->informasi_alumni}}</p>
            <!-- Tambahkan link menuju halaman artikel/show/berita_id -->
            <button class="berita" data-target="#berita-{{$key}}">
            <a href="{{ route('user.berita.show', ['berita_id' => $value->berita_id]) }}" id="garisbawah">Baca Selengkapnya</a>
            </button>
        </div>
    </div>
@endforeach

            </div>
        </div>
    </div> --}}
    <br><br>

    @include('components.scroll-to-top')
    <!-- Footer -->
    @include('footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
