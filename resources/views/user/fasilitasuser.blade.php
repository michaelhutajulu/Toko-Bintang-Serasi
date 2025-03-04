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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .hero img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card {
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, #ffffff, #f1f1f1);
            padding: 15px;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover::before {
            opacity: 1;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 100%;
            height: 200px; /* Set a fixed height for consistency */
            object-fit: cover; /* Ensure the image covers the area, cropping if necessary */
            margin-bottom: 15px;
            transition: transform 0.3s;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        .card-title {
            color: #007BFF;
            margin-top: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            min-height: 50px; /* Ensure consistent height for titles */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .card-text {
            color: #555;
            margin-top: 10px;
            font-size: 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .text-center {
            text-align: center !important;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-md-4 {
            flex: 0 0 auto;
            width: 33.333333%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-md-12 {
            flex: 0 0 auto;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        .d-flex {
            display: flex !important;
        }

        .flex-column {
            flex-direction: column !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .btn {
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div>
        <!-- Navbar -->
        @include('navbar')

        <!-- Hero image -->
        <div class="hero">
            <img src="{{ asset('img/Fasilitas.jpg') }}" alt="" style="height: 450px;width:100%;">
        </div>
    </div>
    <!-- Fasilitas Section -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h2>Fasilitas SD Swasta Filadelfia</h2>
            </div>
        </div>
        <div class="row">
            @forelse($fasilitas as $item)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/fasilitas/' . $item->fasilitas_image) }}" class="card-img-top" alt="{{ $item->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12 text-center">
                    <p>Data fasilitas belum tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Footer -->
    @include('components.scroll-to-top')
    @include('footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
