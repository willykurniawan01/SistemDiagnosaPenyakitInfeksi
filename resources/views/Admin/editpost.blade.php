@extends('Admin.templates.home')
@section('title','Edit Post')
    
@section('content')
<div class="container-fluid">
@foreach ($post as $p)
<form method="post" class="my-5" enctype="multipart/form-data" action="{{route('update-post',['id'=>encrypt($p->id_post)])}}">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul Postingan</label>
        <input name="judul" value="{{$p->judul}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori</label>
        <select name="kategori" value="{{$p->kategori}}" class="form-control" id="exampleFormControlSelect1">
                <option>Portal Informasi</option>
                <option>Info Kesehatan</option>
                <option>Corona Virus</option>
                <option>Penyakit Infeksi</option>
            </select>
        </div>

        <div class="form-group">
            <label for="editor1">Isi</label>
        <textarea name="isi" class="form-control" id="editor1">{{$p->isi}}</textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <div class="custom-file">
                <input value="{{$p->img}}" name="img" type="file" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>  
        </div>
        <button type="submit" class="text-white font-weight-bold btn btn-sidipi">Update</button>
    </form>
    @endforeach    
</div>
@endsection