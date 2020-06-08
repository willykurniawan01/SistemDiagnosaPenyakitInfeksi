@extends('Home.templates.layouts')
@section('title','Penyakit')
@section('content')
<section class="single-article">
    <div class="container">
        <div class="row breadcrumb-row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sidipi-penyakit')}}">Penyakit</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$penyakit[0]->id_penyakit}}</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="row row-judul">
                    <div class="col-12">
                        <h4 class="judul-artikel">
                            {{$penyakit[0]->nama_penyakit}}
                        </h4>
                    </div>
                </div>
                 
                <div class="row row-img-single">
                    <div class="col-12">
                        <img src="{{url('storage/uploads/'.'/'.$penyakit[0]->img)}}" class="img-fluid img-single float-left"
                            alt="">
                        <p class="sumber">https://unsplash.com/photos/0eJVAZJ7jJU</p>
                    </div>
                </div>

                <div class="row row-isi">
                    <div class="col-12">
                        <div class="text-justify">{!!$penyakit[0]->penyakit_desc!!}</div>
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
                    <h5 class="card-header bg-sidipi text-sidipi">Kategori Penyakit</h5>
                    <div class="card-body">
                        <div class="row justify-content-center">
                           <h4 class="text-sidipi2 fomt-weight-bold">{{$penyakit[0]->kategori}}</h4>
                        </div>
                    </div>
                </div>
                <!-- category -->
            </div>
        </div>
    </div>
</section>

@endsection