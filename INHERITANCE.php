<?php
class produk
{
	public $judul;
	public $penulis;
	public $penerbit;
	public $harga;
	
	public function tampilkan()
	{
		echo "Saya memiliki sebuah produk yang berjudul " . $this -> judul . " ditulis oleh " . $this -> penulis . " dan diterbitkan oleh penerbit " . $this -> penerbit . " . Produk tersebut dijual seharga " . $this -> harga . "<BR>"; 

	}
	
	public function beli()
	{
		echo "ayo segera beli " . "<BR>";
	}
}

class komik extends produk
{
	public $jumlah_halaman = 399;
	
	public function berikan_info()
	{
		echo " Komik tersebut memiliki halaman sebanyak " . $this -> jumlah_halaman . "<BR>";
	}
}

class game extends produk
{
	public $lama_bermain = 5;
	
	public function berikan_info()
	{
		echo " Game ini bisa dimainkan selama " . $this -> lama_bermain . " jam " . "<BR>";
	}
}

$produk1 = new produk();
$produk2 = new produk();
$komik1 = new komik;
$game1 = new game;

$produk1 -> judul = "Naruto";
$produk1 -> penulis = "Masashi Kishimoto";
$produk1 -> penerbit = "Studio Jump";
$produk1 -> harga = 40000;


$produk2 -> judul = "Pac-man";
$produk2 -> penulis = "Tod Frye";
$produk2 -> penerbit = "Atari";
$produk2 -> harga = 350000;

$produk1 -> tampilkan();
$produk2 -> tampilkan();
$komik1 -> berikan_info();
$game1 -> berikan_info();


?>