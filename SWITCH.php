<?php
	$urutan_hari = 3;
	$nama_hari;
	
	switch ($urutan_hari)
	{
		case 1 : 
		$nama_hari = "senin";
		break;
		
		case 2 :
		$nama_hari = "selasa";
		break;
		
		case 3 : 
		$nama_hari = "rabu";
		break;
		
		case 4 :
		$nama_hari = "kamis";
		break;
		
		default :
		$nama_hari = "tidak diketahui";
	}
	
	echo "nama hari adalah " .$nama_hari;
?>