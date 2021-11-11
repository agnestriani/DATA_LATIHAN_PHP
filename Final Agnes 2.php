<?php
// Abstraction

abstract class film
{
	public function pengembangan_ide()
	{
		echo "Menentukan jenis cerita dan menulis skenario <BR>";
	}
	
	public function pra_produksi()
	{
		echo "Merencanakan semua hal yang berkaitan dengan produksi <BR>";
	}
	
	public function produksi()
	{
		echo "Melaksanakan semua hal yang telah direncanakan, seperti pengambilan gambar <BR>";
	}
	
	public function pasca_produksi()
	{
		echo "Hasil rekaman akan masuk tahap editing <BR>";
	}
	
	public function distribusi()
	{
		echo "Film akan disalurkan kepada penonton <BR>";
	}
	
	abstract public function nonton();
}


class film_horor extends film
{
	public function nonton()
	{
		echo "Menonton film horor memberikan pengalaman yang menegangkan" . "<BR>";
	}
}

class film_animasi extends film
{
	public function nonton()
	{
		echo "Menonton film animasi memberikan pengalaman yang menyenangkan" . "<BR>";
	}
}

$film = new film_horor;
$film -> pengembangan_ide();
$film -> pra_produksi();
$film -> produksi();
$film -> pasca_produksi();
$film -> distribusi();
$film -> nonton();

?>