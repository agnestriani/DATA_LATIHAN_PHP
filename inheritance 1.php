<?php

//class utama
class mobil_truk
{	
	public $warna = "merah";
	
	public function tampilkan()
	{
		echo "Mobil truk ini warna " . $this -> warna . "<BR>";
	}
	
	public function maju()
	{
		echo "Maju bro <BR>";
	}
}

//class turunan
class box extends mobil_truk
{
	public $kapasitas = 100; 
		
	public function angkut()
	{
		echo "Angkat barang dulu ya.. beratnya " . $this -> kapasitas . " Kg loh <BR>";
	}
}

//==========================================
$truk01 = new	mobil_truk();
$truk01 -> tampilkan() ;

$box01 = new box ;
$box01 -> angkut() ;


?>