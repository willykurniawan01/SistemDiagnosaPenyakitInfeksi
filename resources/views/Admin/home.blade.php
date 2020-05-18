@extends('Admin.templates.home')
@section('title','Home')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <span class="text-uppercase">{{Auth::user()->username}} </span> !</h1>

</div>
@endsection
