@extends('Admin.templates.home')
@section('title','Edit Gejala')
@section('content')

<form action="{{route('update-penyakit',encrypt($penyakit[0]->id_penyakit))}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Penyakit</label>
    <input name="nama_penyakit" type="text" class="form-control" id="nama" value="{{$penyakit[0]->nama_penyakit}}">
    </div>
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select name="kategori" class="form-control" id="kategori" value="{{$penyakit[0]->kategori}}">
            <option>Virus</option>
            <option>Bakteri</option>
            <option>Jamur</option>
            <option>Parasit</option>
        </select>
    </div>
    <div class="form-group">
        <label for="editor">Deskripsi Penyakit</label>
        <textarea name="desc" class="form-control" id="editor1">
        {{$penyakit[0]->penyakit_desc}}
        </textarea>
    </div>
    <div class="form-group">
        <label>Image</label>
        <div class="custom-file">
            <input name="img" type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
    </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-sidipi text-white font-weight-bold" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sidipi text-white font-weight-bold">Submit</button>
    </div>
</form>
@endsection