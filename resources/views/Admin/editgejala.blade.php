@extends('Admin.templates.home')
@section('title','Edit Gejala')
@section('content')
<form action="{{route('update-gejala',encrypt($gejala[0]->id_gejala))}}" method="post">
        @csrf
        <div class="form-group">
            <label for="gejala">Gejala</label>
        <input name="gejala" type="text" class="form-control" id="gejala" value="{{$gejala[0]->gejala}}">
        </div>
        <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <textarea class="form-control" name="pertanyaan" id="pertanyaan">{{$gejala[0]->pertanyaan}}</textarea>
        </div>
        <button type="submit" class="text-white font-weight-bold btn btn-sidipi">Simpan</button>
    </form>
@endsection    