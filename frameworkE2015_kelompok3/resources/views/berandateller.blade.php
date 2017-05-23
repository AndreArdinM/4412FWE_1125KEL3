<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('page_title','Beranda') | FW Data Bank</title>

  <link rel="stylesheet" type="text/css"
  href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}} ">
  <link rel="stylesheet" type="text/css"
  href="{{asset('component/font-awesome/css/font-awesome.min.css')}} ">
  <style type="text/css">


    htmls,body {
      padding-top: 70px;
      padding-bottom: 70px;
      background-color:lightblue;*/
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
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle-collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{url('/')}}" class="navbar-brand">Beranda Teller</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">

        <li class="dropdown active">
          <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Nasabah <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{url('nasabahC')}}">Data Nasabah</a></li>                  
          </ul>
        </li>

<!--         <li class="dropdown active">
          <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Teller <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{url('teller')}}">Data Teller</a></li>            
          </ul>
        </li>

         <li class="dropdown active">
          <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Data Cabang & Manajer <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{url('kantorcabang')}}">Kantor Cabang</a></li>
            <li><a href="{{url('manajer')}}">Data Manajer</a></li> 
          </ul>
        </li>

        <li class="dropdown active">
          <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan Kartu<span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><i class="fa fa-users"><a href="{{url('fitur')}}"> Fitur Kartu</i></a></li>
            <li class="divider"></li>
            <li><i class="fa fa-map"><a href="{{url('kategori')}}">  Kategori Kartu</i></a></li>
            <li class="divider"></li>
            <li><i class="fa fa-map"><a href="{{url('paket')}}">  Paket</i></a></li>
          </li>

        </ul>
 -->        <li class="dropdown active">
          <a href="{{ url('logout')}}">Logout</a>
        </li>
      </ul>

    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="clearfix"></div>

<div class="container">
 @if(Session::has('informasi'))
 <div class="alert alert-info">
  <strong>Informasi :</strong>
  {{Session::get('informasi')}}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@yield('container')
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
 <footer class="container">
   <!   please dont delete this ><marquee>
   created by <a href="#">
   <span><i class="fa fa-facebook-square" style="color: #1da1f2"></i>Kelompok of hell</span></a>
   gitHub by <a href="#">
   <span><i class="fa fa-github" style="color: #1da1f2"></i>Kelompok 3 of hell</span></a> <!--/   please dont delete this    -->
 </marquee></footer>
</nav>

<script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
  $(function(){
    $('[data-toggle="tolltip"]').tolltip()
  });
</script>

</body>
</html>

