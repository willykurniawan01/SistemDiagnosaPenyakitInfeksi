@extends('layouts.app')
@section('title','Login')
@section('content')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                <form class="user" method="post" action="{{route('login')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user @error('username') is-invalid @enderror" id="username"
                        aria-describedby="username" placeholder="Username" >
                    
                  @error('username')
                   <div class="alert alert-danger mt-3">{{ $message }}</div>
                  @enderror
                    </div>
                    
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control form-control-user @error('password') is-invalid @enderror" 
                        placeholder="Password">

                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                  <div class="form-group">     
                    <button type="submit" class="btn btn-sidipi btn-user btn-block font-weight-bold text-white">
                      Login
                    </button>
                  </div>
                  
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{route('register')}}">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
@endsection
