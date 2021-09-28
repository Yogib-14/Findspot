<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FindSpot Decision Support System</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
	<link rel = "stylesheet" href = "css/styleIndex.css">
</head>
<body>

	<div class="header-background">
	<?php include('connection.php'); ?>
	<?php session_start();
	$_SESSION["pageName"] = "index";?> 
	<?php include('header.php');?>
	<h2 style = "text-align:center; color: black;">Welcome to FindSpot!</h2>
	<h4 style = "text-align: center; margin-bottom: 2%; color: black;">Website rekomendasi tempat wisata Bali</h4>

		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
			  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div><!-- end carousel-indicators-->
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="picture/BuatIndex/TheWestinResort_NusaDua.jpg" class="d-block w-100" alt="Pura Ulun Danu, Bali">
				<div class="carousel-caption d-none d-md-block">
				  <h5>The Westin Resort, Nusa Dua</h5>
				</div><!-- end carousel-caption d-none d-md-block-->
			  </div><!-- end class carousel-item active-->
			  <div class="carousel-item">
				<img src="picture/BuatIndex/PantaiCanggu.jpg" class="d-block w-100" alt="Telaga Warna, Dieng">
				<div class="carousel-caption d-none d-md-block">
				  <h5>Pantai Canggu</h5>
				</div>
			  </div>
			  <div class="carousel-item">
				<img src="picture/BuatIndex/BlueLagoon.jpg" class="d-block w-100" alt="Ulun Danu 2">
				<div class="carousel-caption d-none d-md-block">
				  <h5>Pantai Blue Lagoon</h5>
				 
				</div>
			  </div>
			</div><!-- end class carousel slide-->
			
		  </div><!-- end class carousel-indicators-->
			<h3 style="text-align: center; margin-top: 3%; color: black; ">Fitur website</h3>
		  <div class = "container">
			  <div class = "row">
				  <div class = "col">
					  <div class = "single-process">
					  <img class="icofont icofont-travelling">
					  </img>
					  <h5 style= "text-align: center; color:black; margin-bottom:25px;">Cari Destinasi</h5>
					  <p style="text-align: justify; color:black; letter-spacing: 1px;">Mencari referensi destinasi wisata di Bali sesuai dengan kriteria yang diberikan menggunakan metode AHP</p>
					  </div>
			  </div>

			  <div class = "col">
					  <div class = "single-process">
					  <img class="icofont icofont-map-pins">
					  </img>
					  <h5 style= "text-align: center; color:black; margin-bottom: 25px;">Review Wisata</h5>
					  <p style="text-align: justify; color:black; letter-spacing: 1px;">Memberikan review terhadap tempat wisata yang sudah pernah Anda kunjungi untuk membantu tingkat akurasi dari fitur pencarian destinasi wisata</p>
					  </div>
			  </div>
		  </div>

		  <div class="bungkus_rekomendasi" style = "margin-top: 15px;">
			  <h2 style= "text-align: center; padding-top: 13px;">Rekomendasi Wisata Bali</h2>


			  <div class = "container">
			  <div class = "row">
				  <div class = "col">
					  <div class = "single-process">
					  <img src="picture/BuatIndex/kuta_re.jpeg" class = "center">
					  
					  <h5 style= "text-align: center; color:black; margin-bottom:25px;">Pantai Kuta</h5>
					  <p style="text-align: justify; color:black; letter-spacing: 1px;">Pantai yang sering dikunjungi oleh wisatawan mancanegara! Wisatawan dapat melakukan kegiatan surfing dan juga menikmati indahnya sunset di tepi pantai</p>
					  </div>
			  		</div>

			  <div class = "col">
					  <div class = "single-process">
					  <img src="picture/BuatIndex/monkey_forest.jpeg" class = "center">
					  </img>
					  <h5 style= "text-align: center; color:black; margin-bottom: 25px;">Ubud Monkey Forest</h5>
					  <p style="text-align: justify; color:black; letter-spacing: 1px;">Hutan tempat habitat banyak monyet. Rasakan sensasi hutan yang rindang dengan ditemani oleh monyet-monyet yang berkeliaran</p>
					  </div>
			  </div>

			  <div class = "col">
					  <div class = "single-process">
					  <img src="picture/BuatIndex/puraLempuyang.jpeg" class = "center">
					  </img>
					  <h5 style= "text-align: center; color:black; margin-bottom: 25px;">Pura Lempuyang</h5>
					  <p style="text-align: justify; color:black; letter-spacing: 1px;">Melihat secara langsung tempat sakral bagi umat Hindu. Melihat indahnya pintu pura Lempuyang yang memiliki latar belakang pegunungan</p>
					  </div>
			  </div>


		  </div>
		  </div>
	</div><!-- end class header-background-->

	
	<script src = "bootstrap/js/bootstrap.js"></script>

	
</body>

</html>