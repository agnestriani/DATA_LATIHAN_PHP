<?php

$ke_kampus = "iya" ; //tidak ya
$kendaraan = "motor" ; //motor angkot 
$jalur = "umum" ; //umum alternatif


class motor // ini kelas
{
	public $nama = "motor"; // property
	public $merk = "honda";
	public $warna = "kuning";
	
	public function tampilkan()
	{
		echo "namanya " .  $this -> nama  . "<BR>";
		echo "merknya " .  $this -> merk  . "<BR>";
		echo "warnanya " .  $this -> warna  . "<BR>";
	}
	
}

class angkot
{
	public $nama = "angkot";	
	public $warna = "biru";
	
	public function tampilkan()
	{
		echo "namanya " .  $this -> nama  . "<BR>";
		echo "warnanya " .  $this -> warna  . "<BR>";
	}
}

//=============================================================



if ($ke_kampus == "iya")
{
	echo "saya mau ke kampus, <BR>";
	echo "kendaraan yg saya pilih adalah : <BR>";
	
	if ($kendaraan == "motor")
	{
		$my_motor = new motor ;
		$my_motor -> tampilkan();
		
		if ($jalur == "alternatif")
		{
			echo "lewat jalur alternatif kayaknya lebih cepat nih" ;
		}
		
		else if ($jalur == "umum")
		{
			echo "sy mending lewat jalur umum saja" ;
		}
	}
	
	elseif ($kendaraan == "angkot")
	{
		$my_angkot = new angkot;
		$my_angkot -> tampilkan();
	}
	
	else
	{
		echo "saya jalan kaki saja. wkwkwk";
	}
		
}

else
{
	echo " sy lagi malas ke kampus. haha ";
}


?>