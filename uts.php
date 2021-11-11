<?php

$mau_makan = "ya";
$lagi_puasa = "tidak"


class makan
{
	public $mau_makan;
	
	
	public function tampilkan ()
	{
		echo $this -> mau_makan . "<BR>";
		
	}
}

class puasa
{
	public $lagi_puasa;
	
	public function tampilkan ()
	{
		echo $this -> lagi puasa. "<BR>";
	}
}

		
// ========================================================================================
if ($mau_makan == "ya")
{
	echo "makanan yang mau saya makan adalah : <BR>";
	{
		$nasi = new nasi;
		$nasi -> tampilkan ()
	}
	else if ($mau_makan == "ya")
	{
		$buah = new buah;
		$buah -> tampilkan ()
	}
}

else 
{
	echo "maaf saya lagi puasa";
}


?>	