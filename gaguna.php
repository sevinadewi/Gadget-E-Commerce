<h2>Featured Products</h2>
		<div class="kotakproduk">
			<div class="pro">
				<img src="img/ip14pro.jpg">
				<div class="desk">
					<h5>Iphone 14 pro</h5>
					<div class="star">
						<i class="fas fa-star"></i>
					</div>
					<h4>Rp14.000.000</h4>
				</div>
				<a href="#"></a>
			</div>
			<div class="pro">
				<img src="img/ip14pro.jpg">
				<div class="desk">
					<h5>Iphone 14 pro</h5>
					<div class="star">
						<i class="fas fa-star"></i>
					</div>
					<h4>Rp14.000.000</h4>
				</div>
				<a href="#"></a>
			</div>
			<div class="pro">
				<img src="img/ip14pro.jpg">
				<div class="desk">
					<h5>Iphone 14 pro</h5>
					<div class="star">
						<i class="fas fa-star"></i>
					</div>
					<h4>Rp14.000.000</h4>
				</div>
				<a href="#"></a>
			</div>
		</div>

		echo "<head><title>Riwayat Pesanan</title></head>";
	$fp = fopen("riwayat.txt","r");
	echo "<table border=0>";

	while ($isi = fgets($fp,1000)) {
		$pisah = explode("&nbsp|", $isi);
		echo "<tr><td>Jumlah </td><td>: $pisah[0]</td></tr>";
		echo "<tr><td>Total Bayar </td><td>: $pisah[1]</td></tr>";
		echo "<tr><td>Barang </td><td>: $pisah[2]</td></tr>
		<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}