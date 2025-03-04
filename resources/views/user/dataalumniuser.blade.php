<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SDS Filadelfia Tarutung</title>
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg ') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .button-container {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        .button {
            border: none;
            border-radius: 50%;
            padding: 20px;
            text-align: center;
            background-color: #f0f0f0;
            cursor: pointer;
            height: min-content;
        }

        .button img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .button-text {
            font-weight: bold;
        }

        .button-subtext {
            display: block;
            color: #555;
        }

        h2 {
            text-align: center;
        }

        .table {
            margin: auto;
            width: 100%; /* Adjust the width as needed */
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px; /* Adjust the padding as needed */
        }

        table {
            margin: auto; /* Center the table horizontally */
            width: 100%; /* Adjust the width as needed */
            border-collapse: collapse;
        }

        th, td {
            text-align: center; /* Center text within cells */
            border: 1px solid #ddd;
            padding: 8px;
        }

        /* Add margin to create space between the image and the text */
        .hero {
            margin-bottom: 50px; /* Adjust the value as needed */
        }

        /* Add padding to create space between the table and other elements */
        .table {
            padding-top: 50px; /* Adjust the value as needed */
        }

        thead th {
            background-color: #007bff; /* Blue background for thead */
            color: white; /* White text color for thead */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')

    <!-- content -->
    <div class="hero">
        <div class="hero">
            <img src="{{ asset('img/Data Alumni.jpg') }}" alt="" style="filter: brightness(0.5) contrast(1.3); height:450px;">
        </div>
        <div class="container mt-5">
            <h2>DATA ALUMNI</h2>
            <div class="table-container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="col" style="background-color: #007bff; color: white; width: 50%; text-align: center;">Nama</td>
                            <td scope="col" style="background-color: #007bff; color: white; width: 50%; text-align: center;">Tahun Lulus</td>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataalumnis->sortBy('tahun') as $dataalumni)
                        <tr>
                            <td>{{ $dataalumni->nama }}</td>
                            <td>{{ $dataalumni->tahun }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('components.scroll-to-top')
    @include('footer')

    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>
</body>

</html>
