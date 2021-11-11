<?php	
	//membuat class
	class mobil
	{	
		//property
		public $merk ;
		public $kecepatan ;
		
		//method atau function
		public function tampilkan()
		{ 
				echo $this -> merk  .  "<BR>" ;
				echo $this -> kecepatan  .  "<BR>" ;	
		} 
	}
	
	//membuat objek dari class
	$mobil_balap1 =  new  mobil  ;	
	$mobil_bis =  new  mobil  ;
		
	//mengisi property dari class
	$mobil_balap1  -> merk = "mazda";
	$mobil_balap1  -> kecepatan = "100";
	
	$mobil_bis  -> merk = "mercedes";
	$mobil_bis  -> kecepatan = "70";
	
	//memanggil method / function dari class
	$mobil_balap1 -> tampilkan();
	$mobil_bis -> tampilkan();
?>