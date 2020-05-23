<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{url('Admin/assets/img/LOGO.png')}}">
    <title>{{config('app.name')}} - @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('Admin/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('Admin/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{url('Admin/assets/css/style.css')}}" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/qgyy3jwessjl5oicjlekr2ebfwkdn00er49uv240lfnrdh3l/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper sticky-top">

        <!-- Sidebar -->
        <ul class="navbar-nav fixed-top  bg-sidipi sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img src="{{url('Admin/assets/img/LOGO.png')}}" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SIDIPI ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-2">

            <li class="nav-item">
            <a class="nav-link" href="{{url('Admin/home')}}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengelolaan
            </div>

            <!-- Nav Item - Penyakit infeksi  -->

            <!-- Nav Item - Penyakit infeksi  -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('Admin/penyakit')}}">
                    <i class="fas fa-fw fa-book-medical"></i>
                    <span>Penyakit Infeksi</span></a>
            </li>

            <!-- Nav Item - Penyakit infeksi  -->
            <li class="nav-item">
            <a class="nav-link" href="{{url('Admin/gejala')}}">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Gejala</span></a>
            </li>


            <!-- Nav Item - Penyakit infeksi  -->
            <li class="nav-item">
            <a class="nav-link" href="{{url('Admin/post')}}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Post/Artikel</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar sticky-top navbar-expand navbar-light bg-sidipi topbar mb-4 static-top shadow">
s
                    <!-- Topbar Search -->
                 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600">{{Auth::user()->name}}</span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')


            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{url('Admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    
    
    <script>
        $(document).ready(function(){



        });  
    </script>

    <script src="{{url('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('Admin/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('Admin/assets/js/sb-admin-2.min.js')}}"></script>
    
</body>

</html>