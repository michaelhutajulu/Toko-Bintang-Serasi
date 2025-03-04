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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .custom-card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            margin: 20px;
            background-color: #fff;
        }

        .custom-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .custom-card h3 {
            margin-top: 15px;
            font-size: 20px;
        }

        .custom-card p {
            margin-top: 15px;
            font-size: 16px;
        }

        .row-centered {
            display: flex;
            justify-content: center;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;

        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            background-color: #0066cc;
            color: white;
            padding: 10px;
            margin: 0;
        }

        .section-content {
            padding: 20px;
            border: 1px solid #ddd;
            width: 80%;
            margin: 0 auto;
        }

        .identitas-sekolah,
        .kontak-utama {
            display: inline-block;
            width: 48%;
            vertical-align: top;
        }

        .identitas-sekolah h3,
        .kontak-utama h3 {
            background-color: #007bff;
            color: white;
            padding: 5px;
            margin: 0;
        }

        .section p {
            margin: 5px 0;
        }

        .visi,
        .misi,
        .sejarah {
            margin-top: 20px;
        }

        .visi h3,
        .misi h3,
        .sejarah h3 {
            color: rgb(9, 9, 9);
            padding: 5px;
            margin: 0;
        }

        .misi ul {
            padding-left: 20px;
        }
        .section-visi {
            margin-left: 3%
        }
        .section-misi {
            margin-left: 3%
        }
        .section-sejarah {
            margin-left: 3%
        }
    </style>
</head>

<body>
    <div>
        <!-- Navbar -->
        @include('navbar')

        <!-- Hero image -->
        <div class="hero">
            <img src="{{ asset('img/Data Sekolah.jpg') }}" alt="" style="filter: brightness(0.5) contrast(1.3); height: 450px;">
        </div>
    </div>
    <div class="container">
        <h2>TENTANG DATA SEKOLAH</h2>
    </div>
    @if ($datasekolahuser)
        @foreach(explode("\n", $datasekolahuser->visi) as $visi)
            <div class="section-visi">
                <h3>Visi :</h3>
                <p>{{ $visi }}</p>
            </div>
        @endforeach
    @endif

    @if (!is_null($datasekolahuser) && !empty($datasekolahuser->misi))
        <div class="section-misi">
            <h3>Misi :</h3>
            <ol id="misi-list">
                @foreach(explode("\n", $datasekolahuser->misi) as $misi)
                    <li>{{ $misi }}</li>
                @endforeach
            </ol>
        </div>
    @endif

    <div class="section-sejarah">
        <h3>Sejarah :</h3>
        <p>Sekolah tersebut sebagai hasil dari aspirasi seorang ketua yayasan yang terinspirasi oleh kualitas pendidikan tinggi yang dimiliki oleh sekolah-sekolah di Medan. Melihat keberhasilan sekolah-sekolah tersebut, dia berkomitmen untuk membangun sebuah lembaga pendidikan yang serupa, yang menawarkan standar pendidikan yang sama tingginya.</p>
        <p>Dengan demikian, sekolah tersebut didirikan dengan tujuan untuk memberikan pendidikan berkualitas tinggi kepada masyarakat Tarutung, mengikuti jejak keberhasilan sekolah-sekolah di Medan sebagai model. Proses pembentukan sekolah tersebut dipandu oleh visi dan misi yayasan, serta komitmen untuk menyediakan lingkungan belajar yang kondusif dan program akademik yang unggul, sehingga menciptakan sebuah lembaga pendidikan yang menjadi kebanggaan.</p>
    </div>

    <div class="section-content">
        <div class="identitas-sekolah">
            <h3>Identitas Sekolah</h3>
            <p>NPSN : 69774567</p>
            <p>Status : Swasta</p>
            <p>Bentuk Pendidikan : SD</p>
            <p>Status Kepemilikan : Yayasan</p>
            <p>SK Pendirian Sekolah : 02/IY/YPF/2012</p>
            <p>Tanggal SK Pendirian : 2012-02-09</p>
            <p>SK Izin Operasional : 425/2265/BDM/DP/2013</p>
            <p>Tanggal SK Izin Operasional : 2013-09-12</p>
        </div>
        <div class="kontak-utama">
            <h3>Kontak Utama</h3>
            <p>Alamt : Jl. Sutan Sumurung, Sait Ni Huta, Tarutung</p>
            <p>RT / RW : 0 / 0</p>
            <p>Dusun : Saitnihuta</p>
            <p>Desa / Kelurahan : Huta Toruan IV</p>
            <p>Kecamatan : Kec. Tarutung</p>
            <p>Kabupaten : Kab. Tapanuli Utara</p>
            <p>Provinsi : Prov. Sumatera Utara</p>
            <p>Kode Pos : 22411</p>
            <p>Lintang : 2</p>
            <p>Bujur : 98</p>
        </div>
    </div>


    @include('components.scroll-to-top')
    @include('footer')

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzYh4YH06R2E3h2i5i7rSjSUsHfuCWjzNk6y7R+QpXa2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-6mxUfyH9s6NV2Z47r+BhgLh3lbZ9U9F4zG9Ssq1I/0xH7X2v33Yf5e3vYhRXstnv" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#spinner-border').hide();

            $('#misi').keypress(function(e) {
    if (e.which == 13) {
        e.preventDefault();
        var misiValue = $(this).val();
        if (misiValue.trim() !== '') {
            $('#misi-list').append('<li>' + misiValue + '</li>');
            $(this).val('');
        }
    }
});


            function submitForm(form) {
                $('#spinner-border').show();
                // Add form submission logic here
            }

            window.submitForm = submitForm;
        });
    </script>
</body>

</html>
