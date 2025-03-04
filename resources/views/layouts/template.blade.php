<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->informasi_berita }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }

        .content {
            padding: 2em 0;
        }
        .content img {
            max-width: 100%;
            height: auto;
        }
        .content h1 {
            color: black;
        }
    </style>
</head>
<body>
    @include('navbar')

    <div class="container">
        <div class="content">
                <img src="{{ asset('images/berita/' . $berita->image) }}" alt="{{ $berita->informasi_berita }}"><br><br>
            <h1>{{ $berita->informasi_berita }}</h1><br>
            <p>{{ $berita->informasi_alumni }}</p>
        </div>
    </div>
    @include('footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
