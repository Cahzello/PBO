<?php

class Buah{
	//dalam clas buah terdapat 2 properties yaitu warna dan nama
	public	$nama;
	public	$warna;


	//tampungan nama berfungsi sebagai variabel sementara
	function set_nama($tampungan_nama){
		$this->nama  = $tampungan_nama;
	}


	//return untuk mengembalikan nilai
	function get_nama(){
		return $this->nama;
	}

	function set_warna($tampung_warna){
		$this->warna = $tampung_warna;
	}

	function get_warna(){
		return $this->warna;
	}
}
	//membuat objek	
	$pisang = new Buah();
	$pisang-> set_nama('Pisang Ambon');
	$pisang-> set_warna('Kuning');
	
	$jambu = new buah();
	$jambu-> set_nama('Jambu Batu');
	$jambu-> set_warna('RGB');

	//hanya perlu di set untuk menentukan konten isinya

	//lalu hanya tinggal dipanggil functionnya untuk dipanggil

	echo $pisang->get_nama(); 
	echo "<br>";
	echo $pisang->get_warna();
	echo "<br>";
	echo $jambu->get_nama();
	echo "<br>";
	echo $jambu->get_warna();

?>