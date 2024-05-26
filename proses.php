<?php

if (isset($_POST['jumlahip'])) {
	$jumlah = $_POST['jumlahip'];
	$ip = 14000000;
	$nama = "Iphone 14 pro" ;
	$harga = $jumlah * $ip;
	

}elseif (isset($_POST['jumlahsm'])) {
	$jumlah = $_POST['jumlahsm'];
	$sm=5000000;
	$nama = "Galaxy M14 5G" ;
	$harga = $jumlah * $sm; 
	

}elseif (isset($_POST['jumlahxm'])) {
		$jumlah = $_POST['jumlahxm'];
		$xm=3000000;
		$harga = $jumlah * $xm; 
		$nama = "Xiaomi Redmi Note 11" ;

}elseif (isset($_POST['jumlahrlm'])) {
	$jumlah = $_POST['jumlahrlm'];
	$rlm=2000000;
	$harga = $jumlah * $rlm; 
	$nama = "Realme C53 NFC" ;
	

}elseif (isset($_POST['jumlahinf'])) {
	$jumlah = $_POST['jumlahinf'];
		$inf=14000000;
		$harga = $jumlah * $inf; 
		$nama = "Infinix Note 30" ;
	
}elseif(isset($_POST['jumlahvivo'])){
	$jumlah = $_POST['jumlahvivo'];
		$vivo=3000000;
		$harga = $jumlah * $vivo;
		$nama = "Vivo Y36" ;
		
}	
elseif (isset($_POST['jumlahlpln'])) {
	$jumlah = $_POST['jumlahlpln'];
	$lpln=17500000;
	$harga = $jumlah * $lpln; 
	$nama = "Lenovo Yoga Slim 7i Pro" ;
}	

elseif (isset($_POST['jumlahlpmc'])) {
	$jumlah = $_POST['jumlahlpmc'];
	$lpmc=20000000;
	$harga = $jumlah * $lpmc; 
	$nama = "Apple MacBook Pro M2 2022" ;
}	

elseif (isset($_POST['jumlahlpas'])) {
	$jumlah = $_POST['jumlahlpas'];
	$lpas=13000000;
	$harga = $jumlah * $lpas; 
	$nama = "ASUS Zenbook 14 UM425UA" ;
}	

elseif (isset($_POST['jumlahmonlg'])) {
	$jumlah = $_POST['jumlahmonlg'];
	$monlg=1000000;
	$harga = $jumlah * $monlg; 
	$nama = "LG Monitor LED 20MK400A-B" ;
	
}	
	
elseif (isset($_POST['jumlahmonsm'])) {
	$jumlah = $_POST['jumlahmonsm'];
	$monsm=1200000;
	$harga = $jumlah * $monsm; 
	$nama = "Samsung CF390" ;
	
}	

elseif (isset($_POST['jumlahmonxm'])) {
	$jumlah = $_POST['jumlahmonxm'];
	$monlg=1300000;
	$harga = $jumlah * $monlg; 
	$nama = "Xiaomi Mi 1C 23.8-inch Desktop Monitor" ;
	
}	
	
	
elseif (isset($_POST['jmlhdap'])) {
	$jumlah = $_POST['jmlhdap'];
	$hdap=7000000;
	$harga = $jumlah * $hdap; 
	$nama = "Apple Airpods Max" ;
	
}	
	

elseif (isset($_POST['jmlhdln'])) {
	$jumlah = $_POST['jmlhdln'];
	$hdln=150000;
	$harga = $jumlah * $hdln; 
	$nama = "Lenovo Thinkplus TH10 TWS Stereo Headphone" ;
	
}	
	

elseif (isset($_POST['jmlhdsn'])) {
	$jumlah = $_POST['jmlhdsn'];
	$hdsn=2400000;
	$harga = $jumlah * $hdsn; 
	$nama = "Sony WH-1000XM4 Wireless Noise Cancelling Headphones" ;
	
}	
	
	

	echo "<head><title>Pemesanan</head></title>";

	$fp = fopen("lihat.php", "a+");
	fputs($fp,"<br>Barang	: $nama<br>");
	fputs($fp,"Jumlah 		: $jumlah<br>");
	fputs($fp,"Total 		: $harga<br>");
	fclose($fp);
	
	$file_content = "Barang: $nama\n";
	$file_content .= "Jumlah: $jumlah\n";
	$file_content .= "Total: $harga\n";

	$file_path = "riwayat.txt";
	$file = fopen($file_path, "a+");
	fwrite($file, $file_content);
	fclose($file);

	echo "Terima Kasih sudah berbelanja di toko kami<br>";
	echo "<a href=index.php>Home</a><br>";
	echo "<a href=lihat.php>Lihat Orderan</a><br>";
?>