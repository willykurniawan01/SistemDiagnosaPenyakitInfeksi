@extends('Home.templates.layouts')
@section('title','Artikel')
@section('content')
<div class="container">
    <div class="row breadcrumb-row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </div>

    <div class="row top-row justify-content-between">
        <figure class="figure">
            <div class="figure-img">
                <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
            </div>
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
        <figure class="figure">
            <div class="figure-img">
                <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
            </div>
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
        <figure class="figure">
            <div class="figure-img">
                <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
            </div>
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
    </div>

    <div class="row row-main justify-content-between">
        <div class="col-8">
            <div class="row big-image">
                <figure class="figure">
                    <div class="figure-img">
                        <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                    </div>
                </figure>
            </div>

            <div class="row medium-image">
                <figure class="figure">
                    <div class="figure-img">
                        <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                    </div>
                </figure>
            </div>
            <div class="row medium-image">
                <figure class="figure">
                    <div class="figure-img">
                        <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                    </div>
                </figure>
            </div>
            <div class="row medium-image">
                <figure class="figure">
                    <div class="figure-img">
                        <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                    </div>
                </figure>
            </div>
        </div>
        <div class="col-3">
            <div class="row long-image">
                <div class="row medium-image">
                    <figure class="figure">
                        <div class="figure-img">
                            <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="row long-image">
                <div class="row medium-image">
                    <figure class="figure">
                        <div class="figure-img">
                            <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="row long-image">
                <div class="row medium-image">
                    <figure class="figure">
                        <div class="figure-img">
                            <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="row long-image">
                <div class="row medium-image">
                    <figure class="figure">
                        <div class="figure-img">
                            <img src="{{url('Home/assets/img/2.png')}}" class="" alt="...">
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection