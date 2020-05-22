@extends('Home.templates.layouts')
@section('title','Hasil Diagnosa')
@section('content')
    <section class="hasil-diagnosa">
        <div class="container">
            <div class="row breadcrumb-row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sidipi-diagnosa')}}">Diagnosa</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Hasil</li>
                    </ol>
                  </nav>
            </div>

            <div class="row hasil-diagnosa">
                <h4>Anda diperkirakan menderita penyakit Flu</h4>
            </div>

            <div class="row saran justify-content-center">
                <h4>Silahkan pergi ke dokter...</h4>
            </div>

            <div class="row img">
            <img src="{{url('Home/assets/img/illustrator-hasil.svg')}}" alt="">
            </div>
        </div>
    </section>
@endsection