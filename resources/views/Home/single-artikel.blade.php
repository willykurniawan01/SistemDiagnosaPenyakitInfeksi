@extends('Home.templates.layouts')
@section('title','Artikel')
@section('content')
<section class="single-article">
    <div class="container">
        <div class="row breadcrumb-row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sidipi-artikel')}}">Artikel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post[0]->id_post}}</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="row row-judul">
                    <div class="col-12">
                        <h4 class="judul-artikel">
                            {{$post[0]->judul}}
                        </h4>
                    </div>
                </div>
                <div class="row row-date">
                    <div class="col-12">
                        <h4 class="date">On {{date('l,d F Y h:i',strtotime($post[0]->time))}}</h4>
                    </div>
                </div>


                <div class="row row-img-single">
                    <div class="col-12">
                        <img src="{{url('storage/uploads/'.'/'.$post[0]->img)}}" class="img-fluid img-single float-left"
                            alt="">
                        <p class="sumber">https://unsplash.com/photos/0eJVAZJ7jJU</p>
                    </div>
                </div>

                <div class="row row-isi">
                    <div class="col-12">
                        <div class="text-justify">{!!$post[0]->isi!!}</div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <!-- searchbox -->
                <div class="row row-searchbox">
                    <div class="col-12">
                        <div class="card my-4">
                            <h5 class="card-header bg-sidipi text-sidipi">Search</h5>
                            <div class="card-body">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-sidipi" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- searchbox -->

                <!-- category -->
                <div class="card my-4">
                    <h5 class="card-header bg-sidipi text-sidipi">Kategori</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Portal Informasi</a>
                                    </li>
                                    <li>
                                        <a href="#">Info Kesehatan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Corona Virus</a>
                                    </li>
                                    <li>
                                        <a href="#">Tips Hidup Sehat</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- category -->
            </div>
        </div>
    </div>
</section>

@endsection