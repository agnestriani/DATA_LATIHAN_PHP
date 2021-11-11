<?php

//interface
interface Perhitungan
{
	public function hitung_luas() ;
	public function hitung_keliling() ;	
}


//class persegi dengan implements
class persegi implements perhitungan
{		
	public $sisi ;	
	
	
	public function __construct( $x )
	{
		$this -> sisi = $x ;
	}
	
	
	public function hitung_luas()
	{
		return $this -> sisi * $this -> sisi ;
	}
	
	
	public function hitung_keliling()
	{
		return 4 * $this -> sisi  ;
	}	
}


//class persegi panjang dengan implements
class persegi_panjang implements perhitungan
{
	public $panjang ;
	public $lebar ;
	
	
	public function __construct( $x , $y )
	{
		$this -> panjang = $x ;
		$this -> lebar = $y ;
	}
	
	
	public function hitung_luas()
	{
		return $this -> panjang * $this -> lebar ;
	}
	
	
	public function hitung_keliling()
	{
		return 2 * ( $this -> panjang  +  $this -> lebar ) ;
	}
}

//=================code program============================

$object1 = new persegi ( 5 ) ;
echo $object1->hitung_luas()  .  "<BR>" ;
echo $object1->hitung_keliling()  .  "<BR>" ;

$object2 = new persegi_panjang ( 3 , 2 ) ;
echo $object2->hitung_luas()  .  "<BR>" ;
echo $object2->hitung_keliling()  .  "<BR>" ;

