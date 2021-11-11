<?php
//PROGRAM INI MENGGUNAKAN ENCAPSULATION

CLASS nasabah 
{
		//atribut atau variabel
		public $norek ;
		public $nama ;
		private $uang ; //private supaya datanya tidak bisa diedit sembarangan
		
		//method atau fungsi simpan
		public function simpan( $norek , $nama , $disimpan )
		{
			$this -> norek = $norek ;
			$this -> nama = $nama ;
			$this -> uang += $disimpan ; //operasi penjumlahan !!!						
		}
		
		//method atau fungsi tarik
		public function tarik( $norek , $nama , $ditarik )
		{
			$this -> norek = $norek ;
			$this -> nama = $nama ;
			$this -> uang -= $ditarik ; //operasi pengurangan !!!						
		}
		
		//method atau fungsi tampilkan
		public function tampilkan( )
		{
			echo "Nasabah atas nama " . $this -> nama . " jumlah uangnya adalah Rp " . $this -> uang ;
		}	
}

//============================ code program ===============================
$nasabah1 = new nasabah ;

$nasabah1 -> simpan( 556671 , "Fauzan" , 100000 ) ;
$nasabah1 -> simpan( 556671 , "Fauzan" , 200000 ) ;
$nasabah1 -> tarik( 556671 , "Fauzan" , 50000) ;

$nasabah1 -> tampilkan () ;


?>