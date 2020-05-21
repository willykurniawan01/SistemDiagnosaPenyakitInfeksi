@extends('Home.templates.layouts')
@section('title','Home')
@section('content')

{{-- section carousel --}}
<section class="carousel">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 mt-5 mt-md-0 col-md-6 d-flex">
                            <div class="align-self-center">
                                <h1 class="text-carousel">“Lorem ipsum dolorsit amet consectetur”</h1>
                            </div>
                        </div>

                        <div class="col-md-6 d-none d-md-flex justify-content-end">
                            <img src="{{url('Home/assets/img/Rectangle 5.png')}}" class="img-carousel img-fluid"
                                alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 mt-5 mt-md-0 col-md-6 d-flex">
                            <div class="align-self-center">
                                <h1 class="text-carousel">“Lorem ipsum dolorsit amet consectetur”</h1>
                            </div>
                        </div>

                        <div class="col-md-6 d-none d-md-flex justify-content-end">
                            <img src="{{url('Home/assets/img/2.png')}}" class="img-carousel img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 mt-5 mt-md-0 col-md-6 d-flex">
                            <div class="align-self-center">
                                <h1 class="text-carousel">“Lorem ipsum dolorsit amet consectetur”</h1>
                            </div>
                        </div>

                        <div class="col-md-6 d-none d-md-flex justify-content-end">
                            <img src="{{url('Home/assets/img/Rectangle 5.png')}}" class="img-carousel img-fluid"
                                alt="...">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10 col-md-6">
            <form class="form-inline search-form">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn" type="submit">Cari</button>
            </form>
        </div>
    </div>
</section>
{{-- section carousel end --}}


{{-- section portal-informasi --}}
<section class="portal-informasi">
    <div class="container portal-container">
        <div class="row">
            <div class="col-12">
                <h4>Portal Informasi</h4>
            </div>
        </div>
    </div>

    <div class="caroussel d-none d-md-block">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <div class="container d-flex justify-content-md-around">
                        <figure class="figure">
                            <div class="figure-img">
                                <img src="{{url('Home/assets/img/Rectangle 8.png')}}"
                                    class="figure-img img-fluid rounded" alt="...">
                                <a class="d-flex" href="#"><img class="align-self-center m-auto"
                                        src="{{url('Home/assets/img/see-icon.png')}}" alt=""></a>
                            </div>
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>

                        <figure class="figure">
                            <div class="figure-img">
                                <img src="{{url('Home/assets/img/Rectangle 8.png')}}"
                                    class="figure-img img-fluid rounded" alt="...">
                                <a href="#"><a class="d-flex" href="#"><img class="align-self-center m-auto"
                                            src="{{url('Home/assets/img/see-icon.png')}}" alt=""></a></a>
                            </div>
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>


                        <figure class="figure">
                            <div class="figure-img">
                                <img src="{{url('Home/assets/img/Rectangle 8.png')}}"
                                    class="figure-img img-fluid rounded" alt="...">
                                <a href="#">
                                    <a class="d-flex" href="#"><img class="align-self-center m-auto"
                                            src="{{url('Home/assets/img/see-icon.png')}}" alt=""></a>
                                </a>
                            </div>
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>

                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <img src="{{url('Home/assets/img/NEXT.png')}}" alt="">
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <img src="{{url('Home/assets/img/NEXT2.png')}}" alt="">
            </a>

        </div>

    </div>
</section>
{{-- section portal-informasi --}}



@endsection