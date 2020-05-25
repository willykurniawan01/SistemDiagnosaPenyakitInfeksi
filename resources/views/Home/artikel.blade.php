@extends('Home.templates.layouts')
@section('title','Artikel')
@section('content')
<div class="container">
    <div class="row breadcrumb-row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
            </ol>
        </nav>
    </div>


    <div class="row row-main justify-content-between">
        <div class="col-8">

            @foreach($post as $p)
            @if($loop->iteration==1)
            <div class="row big-image">
                <figure class="figure">
                    <div class="figure-img">
                    <a href="{{route('sidipi-single',['id'=>encrypt($p->id_post )])}}">
                            <img src="{{url('storage/uploads'.'/'.
                        $p->img)}}" class="" alt="...">
                        </a>
                        <a href="{{route('sidipi-single',['id'=>encrypt($p->id_post )])}}" class="judul">{{$p->judul}}</a>
                        <h4 class="date">On {{date('l,d F Y h:i',strtotime($p->time))}}</h4>
                    </div>
                </figure>
            </div>
            @else
            <div class="row medium-image">
                <figure class="figure">
                    <div class="figure-img">
                        <a href="{{route('sidipi-single',['id'=>encrypt($p->id_post )])}}">
                        <img src="{{url('storage/uploads'.'/'.$p->img)}}" class="" alt="...">
                        </a>
                        <a href="{{route('sidipi-single',['id'=>encrypt($p->id_post )])}}" class="judul">{{$p->judul}}</a>
                        <h4 class="date">On {{date('l,d F Y h:i',strtotime($p->time))}}</h4>
                    </div>
                </figure>
            </div>
            @endif
            @endforeach
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
@endsection