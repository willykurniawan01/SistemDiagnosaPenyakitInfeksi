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
    <link rel="stylesheet" href="{{url('Admin/assets/css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{url('Home/assets/img/LOGO.png')}}">
    <script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="46ee0ed0-91d0-4ade-a2c9-f56ee500dd96";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
    <title>SIDIPI - @yield('title')</title>
</head>

<body>
    <!-- navbar -->
    @if(strpos(Request::url(),'artikel'))
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="{{route('sidipi-home')}}"> <img src="{{url('Home/assets/img/LOGO.png')}}" alt=""> </a>
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
        <a class="nav-item nav-link" href="{{route('sidipi-category',['category'=>'info kesehatan'])}}">Info Kesehatan</a>
            <a class="nav-item nav-link" href="{{route('sidipi-category',['category'=>'corona virus'])}}">CoronaVirus</a>
            <a class="nav-item nav-link" href="{{route('sidipi-category',['category'=>'tips'])}}">Tips Hidup Sehat</a>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="{{route('sidipi-home')}}"> <img src="{{url('Home/assets/img/LOGO.png')}}" alt=""> </a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    @if(Request::url() === route('sidipi-penyakit'))
    <script>
        $(document).ready(function(){
        getData();


            function getData(keyword=''){

                $.ajax({
                    url:"{{route('live_search') }}",
                    method:'GET',
                    data:{keyword:keyword},
                    dataType:'json',
                    success:function(keyword){
                        $('#result').html(keyword.table_data);
                    }
                })
            }

            $(document).on('keyup','#live_search',function(){
              var keyword = $(this).val();
             getData(keyword);
            });
        });
    </script>
    @endif
        
</body>

</html>