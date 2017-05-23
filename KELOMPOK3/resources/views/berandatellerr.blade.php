<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perbankan nasabah</title>

    <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bs2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('bs2/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('bs2/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('bs2/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('bs2/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">


    htmls,body {
      
      /*background-color:lightblue;*/
      background-image: url("img/gambar.jpg");
      background-color: transparent;
    }

    .starter-template{
      padding: 40px 15px;
      text-align: center;
    }

    .form-horizontal{
      padding: 15px 10px;
    }

    footer{
      padding-top: 15px;
      text-align: right;
    }



  </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><font color="black"><marquee>Website Pendaftaran Nasabah Perbankan</marquee></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{url('nasabah')}}"><i class="fa fa-user fa-fw"></i> Admin</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><font face="Times New Roman" size="5" color="gold">Selamat Datang Teller</font></li>
                        <li>
                            <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Nasabah<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('nasabahC')}}">Data Nasabah</a>
                                </li>
                                
                            </ul>
                        </li>
                                                <!-- <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Level Pengguna<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin')}}">Data Admin</a>
                                </li>
                                <li>
                                    <a href="{{url('petugas')}}">Data Petugas</a>
                                </li>
                                <li>
                                    <a href="{{url('pelanggan')}}">Data Pelanggan</a>
                                </li>
                            </ul>
                        </li> -->


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
            <div class="clearfix"></div>
            <div class="container">
                @if(Session::has('informasi'))
                    <br>
                    <div class="alert alert-info">
                        <strong>Informasi :</strong>
                        {{Session::get('informasi')}}
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>    
                            @foreach ($errors->all() as $error)
                            <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
                @yield('container')
            
  <nav class="navbar navbar-default navbar-fixed-bottom">
 <footer class="container">
   <!   please dont delete this ><marquee>
   created by <a href="#">
   <span><i class="fa fa-facebook-square" style="color: #1da1f2"></i>Website Pendaftaran Nasabah Perbankan</span></a>
   gitHub by <a href="#">
   <span><i class="fa fa-github" style="color: #1da1f2"></i>Kelompok 3 of hell</span></a> <!--/   please dont delete this    -->
 </marquee></footer>
</nav>
            </div>
        </div>




    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('bs2/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bs2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('bs2/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('bs2/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('bs2/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('bs2/data/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('bs2/dist/js/sb-admin-2.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    

</body>

</html>
