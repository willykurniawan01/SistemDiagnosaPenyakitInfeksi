@extends('Home.templates.layouts')
@section('title','Penyakit')
@section('content')
<section class="artikel-penyakit">
    <div class="container">
        <div class="row breadcrumb-row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>

        <div class="row row-search justify-content-center">
            <div class="col-6">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
            </div>
        </div>

        <div class="row row-penyakit mt-5 justify-content-start">
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
    </div>
</section>
@endsection