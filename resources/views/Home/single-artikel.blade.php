@extends('Home.templates.layouts')
@section('title','Artikel')
@section('content')
<section class="single-article">
    <div class="container">
        <div class="row breadcrumb-row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>

        <div class="row row-judul">
            <div class="col-12">
                <h4 class="judul-artikel">
                   {{$post[0]->judul}}
                </h4>
            </div>
        </div>

        <div class="row row-img-single">
            <div class="col-12">
                <img src="{{url('storage/uploads/'.'/'.$post[0]->img)}}" class="img-fluid img-single" alt="">
                <p class="sumber">https://unsplash.com/photos/0eJVAZJ7jJU</p>
            </div>
        </div>

        <div class="row row-isi">
            <div class="col-12">
            <p class="text-justify">{{$post[0]->isi}}</p>
            </div>
        </div>
    </div>
</section>

@endsection