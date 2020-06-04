@extends('Admin.templates.home')
@section('title','Gejala')


@section('content')

<!-- Begin Page Content -->
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="row row-link">
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                    aria-controls="v-pills-home" aria-selected="true">Data Gejala</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                    aria-controls="v-pills-profile" aria-selected="false">Relasi Gejala</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sidipi text-white font-weight-bold" data-toggle="modal"
                        data-target="#gejala">
                        Tambah data
                    </button>


                    <!-- table -->
                    <table class="table mt-3">
                        <thead class="bg-sidipi text-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gejala</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark font-weight-bold">
                            @foreach ($gejala as $g)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$g->gejala}}</td>
                                <td>
                                <a href="{{route('edit-gejala',encrypt($g->id_gejala))}}" class="btn badge badge-success mr-1">Edit</a>
                                    <a href="{{route('hapus-gejala',['id'=>encrypt($g->id_gejala)])}}"
                                        class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sidipi text-white font-weight-bold" data-toggle="modal"
                        data-target="#gejala-penyakit">
                        Tambah data
                    </button>


                    <!-- table -->
                    <table class="table mt-3">
                        <thead class="bg-sidipi text-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gejala</th>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark font-weight-bold">
                            @foreach ($relasi_gejala as $rg)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$rg->gejala}}</td>
                                <td>{{$rg->nama_penyakit}}</td>
                                <td>
                                    <a href="#" class="btn badge badge-success mr-1">Edit</a>
                                    <a href="{{route('hapus-relasi-gejala',['id'=>encrypt($rg->id_relasi)])}}"
                                        class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade mt-5" id="gejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="gejala">Tambah Data Gejala</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="{{route('input-gejala')}}">
                            @csrf
                            <div class="form-group">
                                <label for="gejala">Gejala</label>
                                <input name="gejala" type="text" class="form-control" id="gejala"
                            >
                            </div>
                            <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <textarea class="form-control" name="pertanyaan" id="editor1"></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button typ ="button" class="btn btn-sidipi text-white font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sidipi text-white font-weight-bold">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- end gejala-modal -->

        <!-- Modal Gejala Penyakit -->
        <div class="modal fade mt-5" id="gejala-penyakit" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="gejala">Tambah Relasi Gejala Penyakit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="{{route('tambah-relasi')}}">
                            @csrf
                            <div class="form-group">
                                <div class="py-2">
                                    <label for="gejala-relasi">Gejala</label>
                                    <select name="gejala-relasi" id="gejala-relasi" class="form-control">
                                        <option selected>Pilih...</option>
                                        @foreach($gejala as $g)
                                        <option value="{{$g->id_gejala}}">{{$g->gejala}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="py-2">
                                    <label for="Penyakit">Penyakit</label>
                                    <select id="Penyakit" name="penyakit" class="form-control">
                                        <option selected>Pilih...</option>
                                        @foreach($penyakit as $p)
                                        <option value="{{$p->id_penyakit}}">{{$p->nama_penyakit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sidipi text-white font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sidipi text-white font-weight-bold">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Gejala Penyakit -->

    </div>
    <!-- /.container-fluid -->

    @endsection