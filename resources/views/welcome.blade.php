@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="zxx" class="no-js">
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
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="img/fav.png">

	<meta name="author" content="Colorlib">

	<meta name="description" content="">

	<meta name="keywords" content="">

	<meta charset="UTF-8">

	<title>PT Graha Bara Lestari </title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">



		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">

	</head>

	<body>
		<div class="main-wrapper-first">
			<div class="hero-area relative">
				<!-- <header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
									<a href="{{ url('/') }}"><img src="storage/logo.png" style="width : 25%" alt="Logo PT Graha Bara Lestari"></a>
								</div>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
								</div>
								end header-top
							</div>
							end header-wrap
						</div>
						end container
					</div> -->
				</header>
				<div class="banner-area relative">
					<div class="overlay hero-overlay-bg"></div>
					<div class="container">
						<div class="row height align-items-center justify-content-center">
							<div class="col-lg-7">
								<div class="banner-content text-center">
                  <a href="{{url('/')}}"><img src="storage/logo.png" style="height:200px;weight:200px" ></a>

									<h1 class="text-uppercase text-white"><span>PT Graha Bara Lestari</span><br>AREA PALEMBANG</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<section class="about-area pt-30 pb-30" style="padding-bottom: px;">
						<div class="container">
							<div class="row align-items-center justify-content-between">
								<div class="col-lg-6 col-md-12 col-sm-12 about-left">
										<img class="img-fluid" src="storage/logo.png" alt="">
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 about-right">
									<img src="storage/work.png" style="height:40px;weight:40px" alt="" >
									<h1 class="text" style="font-size:30px">

										<span style="font-size:25px">Pekerja adalah Modal Utama Bisnis Anda</span> <br>
										Kamilah Mitra Bisnis Andalan Anda
									</h1>
									<p style="font-size:20px">
										Fokus Kami adalah Memajukan Bisnis Anda
									</p>
								</div><!-- end col-lg-6-->
							</div><!-- end row -->
						</div><!-- end container -->
					</section><!-- end section-->



					<div style="background-color : #b3daf6"class="container">
						<h2 class="text-uppercase" style="text-align: center;">Berita Terbaru</h2>
					</div>
					<section class="secvice-area pt-20 pb-40" style="padding-bottom: 20px">
						<div class="container">
							<div class="row">

								<div class="col-md-4 single-service">
									<img class="d-block mx-auto img-fluid" src="storage/Informasi1.jpg" style="height:300px;weight:300px" alt="">
									<div class="desc">
										<h2 class="text-uppercase">Informasi 1</h2>
										<p>
											DIBUTUHKAN SEGERA!!!
											Untuk pekerjaan P2TL ( Penertiban Pemakaian Tenaga Listrik ) di lingkungan
											PLN Area Teluknaga Posko Sepatan Tangerang, dengan syarat2 :

										</p>
										<a class="text-uppercase view-details" href="#">View Details</a>
									</div>
								</div>
								<div class="col-md-4 single-service">
									<div class="desc">
										<h2 class="text-uppercase">Informasi 2</h2>
										<p>
											DIBUTUHKAN SEGERA!!!

											Untuk pekerjaan P2TL ( Penertiban Pemakaian Tenaga Listrik ) di lingkungan

											PLN Area Teluknaga Posko Sepatan Tangerang, dengan syarat2 :
										</p>
										<a class="text-uppercase view-details" href="#">View Details</a>
									</div>
									<img class="d-block mx-auto img-fluid" src="storage/Informasi2.jpg" style="height:300px;weight:300px" alt="">
								</div>
								<div class="col-md-4 single-service">
									<img class="d-block mx-auto img-fluid" src="storage/Informasi3.jpg" style="height:200px;weight:150px" alt="">
									<div class="desc">
										<h2 class="text-uppercase">Informasi 3</h2>
										<p>
											DIBUTUHKAN SEGERA!!!

											Untuk pekerjaan P2TL ( Penertiban Pemakaian Tenaga Listrik ) di lingkungan

											PLN Area Teluknaga Posko Sepatan Tangerang, dengan syarat2 :
										</p>
										<a class="text-uppercase view-details" href="#">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</section>



			<section class="feature-area pt-20 pb-40"  style="padding-bottom: 15px; padding-top:0px;">
				<h2 class="text-uppercase" style="text-align: center; color:white;">Layanan & Jasa</h2>
				<div class="container"><br>
					<div class="row">
						<div class="col-lg-4 col-md-6 d-flex flex-row">
							<img src="https://caraterselubung.com/wp-content/uploads/2017/10/call-center-pln.png"  style="height:238.5px;width:350px;"alt="">
						</div>
						<div class="col-lg-4 col-md-6 d-flex flex-row">
							<div class="single-feature">
								<h2 class="text-uppercase">Penggantian Kwh Meter Macet/Buram</h2>
								<p>
									Untuk penggantian meter macet/buram di area Palembang
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex flex-row">
							<div class="single-feature">
								<h2 class="text-uppercase">MANAGEMENT BILLING</h2>
								<p>
									Untuk pekerjaan P2TL ( Penertiban Pemakaian Tenaga Listrik ) di lingkungan PT. PLN Area Palembang, Lahat, dan Ogan Ilir (OI)
								</p>
							</div>
						</div><!-- end col-lg -->
					</div>
				</div>
			</section>





			<div style="background-color : #fff" class="container">
				<h2 class="text-uppercase" style="text-align: center;">Klien Kami</h2>
			</div>
			<section class="feature-bottom-area pt-20 pb-40"  style="padding-bottom: 20px" >
				<div class="container">
					<div class="row ">
							<div class="col-lg-4 single-feat2 d-flex  align-items-top">
								<div class="desc ">
									<h1 class="text-uppercase"style="text-align:center;">PLN</h1>
									<a href="https://www.pln.co.id/">
											<img class="d-block mx-auto img-fluid" src="storage/pln.jpg" style="height:200px;weight:200px" alt="">
										</a>
								</div>
							</div>
						<div class="col-lg-4 col-md-12 single-feat2 d-flex align-items-top">
							<div class="desc">
								<h1 class="text-uppercase"style="text-align:center;">BRI</h1>
								<p>
									<a href="https://bri.co.id/">
									<img class="d-block mx-auto img-fluid" src="storage/bri.png" style="height:200px;weight:200px" alt="">
								</a>
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 single-feat2 d-flex justify-content-between align-items-top">
							<div class="desc">
								<h1 class="text-uppercase" style="text-align:center;">BUKAKA</h1>
								<p>

									<a href="https://www.bukaka.com/"><img class="d-block mx-auto img-fluid" src="storage/bukaka.png" style="height:200px;weight:400px" alt=""></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>



			<div style="background-color : #ededed" class="container">
				<h2 class="text-uppercase" style="text-align: center;">Peta Lokasi</h2>
			</div>
			<section class="feature-bottom-area">
				<div class="container">
					<div class="row ">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.0278838569566!2d104.71957205113635!3d-2.9736170290479755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75bcf6ca8b89%3A0x973427ac26db2a0a!2sJl.+Macan+Kumbang+Raya+No.4502%2C+Siring+Agung%2C+Ilir+Bar.+I%2C+Kota+Palembang%2C+Sumatera+Selatan+30153!5e0!3m2!1sen!2sid!4v1553328175351"
						 width=" 1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</section>



			<section class="subscription-area pt-20 pb-0"  style="padding-bottom: 0px">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="section-title text-center">
								<h4 class="text text-white">
								PT Graha Bara Lestari, Jl. Macan Kumbang Raya No 4502, Demang Lebar Daun. Palembang <br>
								Telp. 0711 - 5561892 | Fax. 0711 - 5561892 | Email: hrd@grahabaralestari.com</h4>
								<span class="text-white">GrahaBaraLestariPalembang.com©2019</span>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end div main wrapper -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
									crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
@endsection
