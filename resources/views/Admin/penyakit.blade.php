@extends('Admin.templates.home')
@section('title','Penyakit')
    
@section('content')
    

<!-- Begin Page Content -->
<div class="container">


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sidipi text-white font-weight-bold" data-toggle="modal" data-target="#penyakit">
        Tambah data
    </button>


    <!-- table -->
    <table class="table mt-3">
        <thead class="bg-sidipi text-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Penyakit</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-dark font-weight-bold">
            @foreach ($penyakit as $p)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$p->nama_penyakit}}</td>
                    <td>{{$p->kategori}}</td>
                    <td>
                    <a href="{{route('edit-penyakit',['id'=>encrypt($p->id_penyakit)])}}" class="btn badge btn-success mr-1">Edit</a>
                    <a href="{{route('hapus-penyakit',['id'=>encrypt($p->id_penyakit)])}}" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade mt-5" id="penyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="penyakit">Tambah Data penyakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <form method="post" action="{{route('input-penyakit')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Penyakit</label>
                            <input name="nama_penyakit" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                                <option>Virus</option>
                                <option>Bakteri</option>
                            </select>
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sidipi text-white font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sidipi text-white font-weight-bold">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection