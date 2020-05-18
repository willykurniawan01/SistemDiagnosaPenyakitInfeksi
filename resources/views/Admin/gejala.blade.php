@extends('Admin.templates.home')
@section('title','Gejala')
   

@section('content')
    
<!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-sidipi text-white font-weight-bold" data-toggle="modal" data-target="#gejala">
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
                        <a href="#" class="btn badge badge-success mr-1">Edit</a>
                         <a href="{{route('hapus-gejala',['id'=>encrypt($g->id_gejala)])}}" class="badge badge-danger">Hapus</a>    
                     </td>
                 </tr>
                 @endforeach
         </tbody>
     </table>

     <!-- Modal -->
     <div class="modal fade mt-5" id="gejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                             <label for="exampleFormControlInput1">Gejala</label>
                             <input name="gejala" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
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