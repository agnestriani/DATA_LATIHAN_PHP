<?php

	$urutan_hari = 2;
	$nama_hari;
	
	
	if ($urutan_hari == 1)
	{
		$nama_hari="senin"; 
	}
	
	elseif ($urutan_hari == 2)
	{
		$nama_hari="selasa"; 
	}
	
	elseif ($urutan_hari == 3)
	{
		$nama_hari="rabu"; 
	}
	
	
	
	else
	{
		$nama_hari="tidak diketahui";
	}
	
	echo "hari ini adalah ".$nama_hari;
	
	
?>