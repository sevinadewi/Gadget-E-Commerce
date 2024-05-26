<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css?v=<?php echo time();?>">
	<script src="https://kit.fontawesome.com/f708.js" crossorigin="anonymous"></script>
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<title>marketplace</title>
</head>
<body>
	<section id="bar">
		<div class="logo">
			<div>
				<br><i class="fa-solid fa-store"></i>
			</div>
			
			<div class="ketlogo">
				<h3>Bima Store</h3>
			</div>
		</div>
		

		<div>
			<ul id="navbar">
				<li><a class="active" href="#">Home</a></li>
				<li><a href="lihat.php">Order</a></li>
				<li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
			</ul>
		</div>
	</section>

	<div class="header">
		<div class="gambar">
			<img src="img/bannergadgets.png">
		</div>
		<!-- <div class="ketheader">
			<h1>TOKO</h1>
			<h1>ELEKTRONIK</h1>
		</div> -->
		
	</div>

	<section id="kategori" class="section-p1">
		<div class="boxkategori" onclick="window.location.href='laptop.php'">
			<img src="img/laptopkartun2.jpg">
			<h4>Laptop</h4>
		</div>
		<div class="boxkategori" onclick="window.location.href='hp.php'">
			<img src="img/hp2.jpg">
			<h4>Handphone</h4>
		</div>
		<div class="boxkategori" onclick="window.location.href='monitor.html'">
			<img src="img/kompkartun.jpg">
			<h4>Monitor</h4>
		</div>
		<div class="boxkategori" onclick="window.location.href='headphone.php'">
			<img src="img/headphonekartun.jpg">
			<h4>Headphone</h4>
		</div>
	</section>

	
	<div class="tambahan">
		<h2>Popular</h2><br>
	</div>

	<section id="kategori" class="section-p1">
		<div class="boxproduk"  onclick="window.location.href='ip.php'" >
			<img src="img/ip14pro.jpg">
			<h4>Iphone 14 pro</h4>
			<h5>Rp14.000.000</h5>
		</div>
		<div class="boxproduk"  onclick="window.location.href='samsung.php'" >
			<img src="img/samsung1.jpg">
			<h4>Galaxy M14 5G</h4>
			<h5>Rp14.000.000</h5>
		</div>
		<div class="boxproduk" onclick="window.location.href='hdsony.php'" >
			<img src="img/sony.jpg">
			<h4>Sony WH-1000XM4 Wireless Noise Cancelling Headphones</h4>
			<h5>Rp2.400.000</h5>
		</div>
	
	</section>

	<div class="footer">
		
		&copy <script>document.write(new Date().getFullYear())</script> - selvie
		
	</div>



</body>
</html>