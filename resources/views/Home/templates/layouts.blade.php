<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora:700|Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('Home/assets/css/styles.css')}}">
    <link rel="icon" href="{{url('Home/assets/img/LOGO.png')}}">
    <title>SIDIPI - @yield('title')</title>
</head>

<body>
    <!-- navbar -->
    @if(Request::url() === route('sidipi-artikel'))
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="{{url('Home/assets/img/LOGO.png')}}" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{route('sidipi-home')}}">HOME</a>
                    <a class="nav-item nav-link" href="{{route('sidipi-artikel')}}">ARTIKEL</a>
                    <a class="nav-item nav-link" href="{{route('sidipi-penyakit')}}">PENYAKIT</a>
                    <a class="nav-item nav-link" href="{{route('sidipi-diagnosa')}}">DIAGNOSA</a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-artikel navbar-expand-lg fixed-top">
        <div class="container">
            <a class="nav-item nav-link" href="{{route('sidipi-home')}}"> <span class="popular">Popular</span></a>
            <a class="nav-item nav-link" href="{{route('sidipi-artikel')}}">Info Kesehatan</a>
            <a class="nav-item nav-link" href="{{route('sidipi-penyakit')}}">CoronaVirus</a>
            <a class="nav-item nav-link" href="{{route('sidipi-diagnosa')}}">Tips Hidup Sehat</a>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="{{url('Home/assets/img/LOGO.png')}}" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{route('sidipi-home')}}">HOME</a>
                    <a class="nav-item nav-link" href="{{route('sidipi-artikel')}}">ARTIKEL</a>
                    <a class="nav-item nav-link" href="{{route('sidipi-penyakit')}}">PENYAKIT</a>
                    <a class="nav-item nav-link" href="{{route('sidipi-diagnosa')}}">DIAGNOSA</a>
                </div>
            </div>
        </div>
    </nav>
    @endif


    <!-- navbar -->
    @yield('content')


    <!-- section footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="footer-title">
                                Informasi
                            </h4>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <a href="#" class="footer-link">
                                Kebijakan
                            </a>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <a href="#" class="footer-link">
                                informasi Kesehatan
                            </a>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <a href="#" class="footer-link">
                                penyakit
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="footer-title">
                                SIDIPI
                            </h4>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <a href="#" class="footer-link">
                                Tentang Kami
                            </a>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <a href="#" class="footer-link">
                                Kontak Kami
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="footer-title">
                                Social Media
                            </h4>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <a href="#" class="footer-icon-link">
                                <img src="{{url('Home/assets/img/facebook.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="footer-icon-link">
                                <img src="{{url('Home/assets/img/instagram.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="footer-icon-link">
                                <img src="{{url('Home/assets/img/twitter.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <h4 class="footer-copyright">Copyright 2020 Sistem Diagnosa Infeksi.</h4>
            </div>
        </div>
    </footer>

    <!-- section footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>