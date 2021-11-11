
<?php

//class ABSTRACT Buah
abstract class buah
{
		public function dicuci()
		{
			echo"buahnya harus dicuci dulu pakai air biar bersih <BR>";
		}
		
		public function dipotong()
		{
			echo"dipotong-potong pakai pisau <BR>";
		}

		public function diblender()
		{
			echo"diblender biar halus <BR>";
		}		
		
		abstract public function pesan_jus();			
}

//class mangga
class mangga extends buah
{
	public function pesan_jus()
	{
		echo "Jus Mangganya dimasukkan ke gelas bulat, lalu minum deh.. <BR>" ;
	}
}

//class apel
class apel extends buah
{
	public function pesan_jus()
	{
		echo"Jus Apelnya dituangkan ke gelas kotak, lalu bungkus deh.. <BR>" ;		
	}
}


//==============code program===============

$buah1 = new apel ;
$buah1 -> dicuci() ;
$buah1 -> dipotong() ;
$buah1 -> pesan_jus() ;

?>