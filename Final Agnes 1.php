<?php
// Inheritance
class film 
{
	public $judul;
	public $penulis;
	public $produksi;
	public $tanggal_rilis;
	
	public function tampilkan()
	{
		echo "Pada tanggal " . $this -> tanggal_rilis . " , sebuah film yang berjudul " . $this -> judul . " telah dirilis . Film ini ditulis oleh " . $this -> penulis . " dan diproduksi oleh  perusahaan " . $this -> produksi . "<BR>";
	}
	
	public function nonton()
	{
		echo "Jika ada waktu luang harus nonton tidak boleh tidak :) " . "<BR>";
	}
}

class film_horor extends film
{
	public $durasi = 96;
	
	public function berikan_info()
	{
		echo "Film ini berdurasi " . $this -> durasi . " menit " . "<BR>";
	}
}

class film_animasi extends film
{
	public $bahasa = "Inggris";
	
	public function berikan_info()
	{
		echo "Film ini berbahasa " . $this -> bahasa . "<BR>";
	}
}

$film1 = new film();
$film2 = new film();

$horor1 = new film_horor;
$animasi1 = new film_animasi;

$film1 -> judul = "The NUN";
$film1 -> penulis = "Gary Dauberman";
$film1 -> produksi = "New Line Cinema";
$film1 -> tanggal_rilis = "7 September 2018";

$film2 -> judul = "Raya and the Last Dragon";
$film2 -> penulis = "Adelia Lim";
$film2 -> produksi = "Walt Disney Animation Studios";
$film2 -> tanggal_rilis = "12 Maret 2021";

$film1 -> tampilkan();
$horor1 -> berikan_info();

?>