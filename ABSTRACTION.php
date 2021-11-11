<?php
abstract class produk
{
	public function belajar()
	{
		echo "Belajar skill untuk bisa bekerja" . "<BR>";
	}
	
	public function bekerja()
	{
		echo "Bekerja keras agar bisa menghasilkan uang" . "<BR>";
	}
	
	public function menabung()
	{
		echo "Hasil dari bekerja ditabung untuk membeli suatu barang" . "<BR>";
	}
	
	abstract public function membeli_produk();
}

class buku extends produk
{
	public function membeli_produk()
	{
		echo "Membeli buku dari hasil kerja";
	}
}

class game extends produk
{
	public function membeli_produk()
	{
		echo"Membeli game dari hasil kerja" . "<BR>";
	}
}

$produk1 = new game;
$produk1 -> belajar();
$produk1 -> bekerja();
$produk1 -> menabung();
$produk1 -> membeli_produk();
	
?>