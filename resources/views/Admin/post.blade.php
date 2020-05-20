@extends('Admin.templates.home')
@section('title','Post')

@section('content')
<!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Button trigger modal -->

     <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
             <a class="nav-link active text-dark" id="semua-tab" data-toggle="tab" href="#semua" role="tab" aria-controls="semua" aria-selected="true">Semua</a>
         </li>
         <li class="nav-item">
             <a class="nav-link text-dark" id="portal-informasi-tab" data-toggle="tab" href="#portal-informasi" role="tab" aria-controls="portal-informasi" aria-selected="false">Portal Informasi</a>
         </li>
         <li class="nav-item">
             <a class="nav-link text-dark" id="info-kesehatan-tab" data-toggle="tab" href="#info-kesehatan" role="tab" aria-controls="info-kesehatan" aria-selected="false">Info Kesehatan</a>
         </li>
         <li class="nav-item">
             <a class="nav-link text-dark" id="coronavirus-tab" data-toggle="tab" href="#coronavirus" role="tab" aria-controls="coronavirus" aria-selected="false">Corona Virus</a>
         </li>
         <li class="nav-item">
             <a class="nav-link text-dark" id="penyakit-infeksi-tab" data-toggle="tab" href="#penyakit-infeksi" role="tab" aria-controls="penyakit-infeksi" aria-selected="false">Penyakit Infeksi</a>
         </li>
         <li class="nav-item">
             <a class="nav-link text-dark" id="tambah-data-tab" data-toggle="tab" href="#tambah-data" role="tab" aria-controls="tambah-data" aria-selected="false">Tambah Data</a>
         </li>
     </ul>



     <!-- semua -->
     <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="home-tab">

            <div class="row my-3">
                <div class="col-6">
                    <form action="" class="form-inline">
                       <input type="text" id="cari" class="form-control w-75">
                       <button class="btn btn-sidipi text-white font-weight-bold">Cari</button>
                   </form>
               </div>
            </div>
            
             <!-- table -->
             <table class="table">
                 <thead class="bg-sidipi text-light">
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Judul</th>
                         <th scope="col">Waktu Di buat</th>
                         <th scope="col">image</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody class="text-dark font-weight-bold">
                    @foreach ($semua as $p)
                    <tr>
                         <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->judul}}</td>
                            <td>{{date('l,d F Y h:i',strtotime($p->time))}}</td>
                    <td><img class="img-thumbnail" width="300px" height="300px" src="{{url('storage/uploads').'/'.$p->img}}" alt=""></td>                    
                         <td>
                         <a href="{{route('hapus-post',['id'=>encrypt($p->id_post)])}}" class=" btn badge btn-danger">Hapus</a>
                         <a href="{{route('edit-post',['id'=>encrypt($p->id_post)])}}" class="btn badge btn-success mr-1">Edit</a>
                         </td>
                        </tr>
                         @endforeach  
                 </tbody>
             </table>
         </div>

         <!-- semua -->



         <!-- portal informasi -->
         <div class="tab-pane fade" id="portal-informasi" role="tabpanel" aria-labelledby="profile-tab">
             <!-- table -->
             <table class="table mt-3">
                 <thead class="bg-sidipi text-light">
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Judul</th>
                         <th scope="col">Waktu Di buat</th>
                         <th scope="col">image</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody class="text-dark font-weight-bold">
                   
                    @foreach ($portal_informasi as $p)
                    <tr>
                         <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->judul}}</td>
                            <td>{{date('l,d F Y h:i',strtotime($p->time))}}</td>
                            <td><img class="img-thumbnail" width="300px" height="300px" src="{{url('storage/uploads').'/'.$p->img}}" alt=""></td>                      
                         <td>
                            <a href="{{route('hapus-post',['id'=>encrypt($p->id_post)])}}" class=" btn badge btn-danger">Hapus</a>
                            <a href="{{route('edit-post',['id'=>encrypt($p->id_post)])}}" class="btn badge btn-success mr-1">Edit</a>
                         </td>
                        </tr>
                         @endforeach  
                 </tbody>
             </table>
         </div>

         <!-- portal informasi -->


         <!-- info kesehatan -->
         <div class="tab-pane fade" id="info-kesehatan" role="tabpanel" aria-labelledby="profile-tab">
             <!-- table -->
             <table class="table mt-3">
                 <thead class="bg-sidipi text-light">
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Judul</th>
                         <th scope="col">Waktu Di buat</th>
                         <th scope="col">image</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody class="text-dark font-weight-bold">
                   
                    @foreach ($info_kesehatan as $p)
                    <tr>
                         <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->judul}}</td>
                            <td>{{date('l,d F Y h:i',strtotime($p->time))}}</td>
                            <td><img class="img-thumbnail" width="300px" height="300px" src="{{url('storage/uploads').'/'.$p->img}}" alt=""></td>                      
                         <td>
                            <a href="{{route('hapus-post',['id'=>encrypt($p->id_post)])}}" class=" btn badge btn-danger">Hapus</a>
                            <a href="{{route('edit-post',['id'=>encrypt($p->id_post)])}}" class="btn badge btn-success mr-1">Edit</a>
                         </td>
                        </tr>
                         @endforeach  
                 </tbody>
             </table>
         </div>

         <!-- info kesehatan -->




         <!-- corona virus -->
         <div class="tab-pane fade" id="coronavirus" role="tabpanel" aria-labelledby="coronavirus-tab">
             <!-- table -->
             <table class="table mt-3">
                 <thead class="bg-sidipi text-light">
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Judul</th>
                         <th scope="col">Waktu Di buat</th>
                         <th scope="col">image</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody class="text-dark font-weight-bold">
                    @foreach ($corona_virus as $p)
                    <tr>
                         <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->judul}}</td>
                            <td>{{date('l,d F Y h:i',strtotime($p->time))}}</td>
                            <td><img class="img-thumbnail" width="300px" height="300px" src="{{url('storage/uploads').'/'.$p->img}}" alt=""></td>                       
                         <td>
                            <a href="{{route('hapus-post',['id'=>encrypt($p->id_post)])}}" class=" btn badge btn-danger">Hapus</a>
                            <a href="{{route('edit-post',['id'=>encrypt($p->id_post)])}}" class="btn badge btn-success mr-1">Edit</a>
                         </td>
                        </tr>
                         @endforeach  
                 </tbody>
             </table>
         </div>
         <!-- corona virus -->



         <!-- penyakit infeksi -->
         <div class="tab-pane fade" id="penyakit-infeksi" role="tabpanel" aria-labelledby="penyakit-infeksi-tab">


             <!-- table -->
             <table class="table mt-3">
                 <thead class="bg-sidipi text-light">
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Judul</th>
                         <th scope="col">Waktu Di buat</th>
                         <th scope="col">image</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody class="text-dark font-weight-bold">
                    @foreach ($penyakit_infeksi as $p)
                    <tr>
                         <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->judul}}</td>
                            <td>{{date('l,d F Y h:i',strtotime($p->time))}}</td>
                            <td><img class="img-thumbnail" width="300px" height="300px" src="{{url('storage/uploads').'/'.$p->img}}" alt=""></td>                       
                         <td>
                            <a href="{{route('hapus-post',['id'=>encrypt($p->id_post)])}}" class=" btn badge btn-danger">Hapus</a>
                            <a href="{{route('edit-post',['id'=>encrypt($p->id_post)])}}" class="btn badge btn-success mr-1">Edit</a>
                         </td>
                        </tr>
                         @endforeach  
                 </tbody>
             </table>
         </div>
         <!-- penyakit infeksi -->


         <!-- input data -->
         <div class="tab-pane fade" id="tambah-data" role="tabpanel" aria-labelledby="tambah-data-tab">
             <div class="container">
                 <div class="row mt-4">
                     <div class="col">

                     <form method="post" action="{{route('input-post')}}" enctype="multipart/form-data">
                        @csrf
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">Judul Postingan</label>
                                 <input name="judul" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Kategori</label>
                                 <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                                     <option>Portal Informasi</option>
                                     <option>Info Kesehatan</option>
                                     <option>Corona Virus</option>
                                     <option>Penyakit Infeksi</option>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Isi</label>
                                 <textarea name="isi" class="form-control" id="exampleFormControlTextarea1"></textarea>
                             </div>

                             <div class="form-group">
                                 <label>Image</label>
                                 <div class="custom-file">
                                     <input name="img" type="file" class="custom-file-input" id="validatedCustomFile" required>
                                     <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                     <div class="invalid-feedback">Example invalid custom file feedback</div>
                                 </div>
                             </div>
                             <button type="submit" class="btn btn-sidipi">Submit</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <!-- input data -->


     </div>

 </div>
 <!-- /.container-fluid -->
@endsection