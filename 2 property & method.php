<?php	
	//membuat class
	class mobil
	{	
		//property
		public $merk;		
		
		//method atau function
		public function tampilkan()
		{
				echo $this -> merk  .  "<BR>" ;				
		}					
	}
	
	// membuat objek dari class
	$mobil_balap =  new  mobil  ;	
		
		
	//mengisi property dari class
	$mobil_balap  -> merk = "mercedes" ;		
	
	
	//memanggil method / function dari class
	$mobil_balap -> tampilkan();
	
?>