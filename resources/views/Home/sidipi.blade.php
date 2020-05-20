@extends('Home.templates.layouts')
@section('title','Home')
@section('content')
    
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
                            <img src="{{url('Home/assets/img/Rectangle 5.png')}}" class="img-carousel img-fluid" alt="...">
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
                                <img src="{{url('Home/assets/img/Rectangle 5.png')}}" class="img-carousel img-fluid" alt="...">
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

    <section class="portal-informasi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 search d-flex">
                </div>
            </div>
        </div>
    </section>
@endsection