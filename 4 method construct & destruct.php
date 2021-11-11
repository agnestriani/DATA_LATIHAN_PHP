<?php	
	//membuat class
	class mobil
	{	
				
		//method atau function umum
		public function tampilkan()
		{
				echo "ini function umum ya.. selalu di tengah-tengah <BR>" ;				
		}
		
		//method atau function construct
		public function __CONSTRUCT ()
		{
				echo "ini function construct bro..  selalu di awal <BR>"  ;
		}
		
		//method atau function destruct
		public function __DESTRUCT ()
		{
				echo "ini function destruct guys..  selalu di akhir <BR>"  ;
		}			
	}
	
	//membuat objek dari class
	$mobil_balap =  new  mobil  ;		
		
	
	//memanggil method / function dari class
	$mobil_balap -> tampilkan();
	
?>