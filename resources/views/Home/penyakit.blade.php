@extends('Home.templates.layouts')
@section('title','Penyakit')
@section('content')
<section class="artikel-penyakit">
    <div class="container">
        <div class="row breadcrumb-row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Penyakit</li>
                </ol>
            </nav>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-sidipi" id="inputGroup-sizing-lg"><img src="{{url('Home/assets/img/search-icon.png')}}" alt=""></span>
                    </div>
                    <input type="text" id="live_search" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
            </div>
        </div>

        <div id="result" class="row row-penyakit mt-5 ">
           
        </div>
    </div>
</section>
@endsection