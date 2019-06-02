<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PT Graha Bara Lestari Area Palembang</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>
<body>

  <!-- <nav class="container sticky-top" >

    <a href="{{ url('/') }}"><b>Home</b></a>
    <a href="{{url('/lowongankerja')}}"><b>Info Lowongan</b></a>

    <a href="{{url('/tentangkami')}}"><b>Tentang Kami</b></a>
  </nav> -->
  <!-- <nav class="sticky-mmenu service-menu" style="z-index: 8;position:fixed; ">
    <a href="{{ url('/') }}">Beranda</a>
    <a href="#">Lowongan Pekerja</a>
    <a href="#">Tentang Kami</a>
  </nav> -->


<div class="row">
		<div class="left ">
        <ul>
            <a href="{{ url('/') }}" >
                <li class="item-menu ">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="menu">Beranda</span>
                </li>
            </a>


            <a href="{{url('/profilperusahaan')}}">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-pencil"></span>
                    <span class="menu">Profil Perusahaan</span>
                </li>
            </a>


            <!-- <a href="#">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-list"></span>
                    <span class="menu">Danh Sách</span>
                </li>
            </a>
            <a href="#">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <span class="menu"> Liên Hệ</span>
                </li>
            </a> -->
            <a href="{{url('/visimisi')}}">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-credit-card"></span>
                    <span class="menu">Visi & Misi </span>
                </li>
            </a>


            <a href="{{url('/lowonganpekerjaan')}}">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-book"></span>
                    <span class="menu">Lowongan Pekerjaan</span>
                </li>
            </a>


            <!-- <li class="item-menu">
                 <span class="glyphicon glyphicon-search"></span>
                 <input class="t_search" type="text" placeholder="Cari">
            </li> -->


        </ul>
    </div><!-- end left -->
</div>
<div id="app">
      <main class="py-4">
          @yield('content')
      </main>
    </div>
    <a href="#" id="go-top" style="display:block;">
    <i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;Go Top</a>
</body>


</html>
