<?php
//PROGRAM INI TIDAK MENGGUNAKAN ENCAPSULATION

CLASS nasabah
{
	//atribut atau variabel	
	public $uang ; 
	
	//method atau fungsi tampilkan
	public function tampilkan( )
	{
		echo "jumlah uangnya adalah Rp " . $this -> uang ;
	}
}

//============================ code program ===============================
$nasabah1 = new nasabah ;

$nasabah1 -> uang = 800000 ;

$nasabah1 -> tampilkan() ;



?>