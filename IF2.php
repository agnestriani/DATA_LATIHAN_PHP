<?php

	$pergi_kampus = "y" ;
	$kendaraan = "angkot" ;
	
	//ke kampus
	if ($pergi_kampus == "y")
	{
		echo "pergi ke kampus ";
		echo "<br>";
		
		//naik motor
		if ($kendaraan == "motor")
		{
			echo "naik motor";
		}
		
		//naik angkot
		else if ($kendaraan == "angkot")
		{
			echo "naik angkot";
		}
		
		//naik kendaraan lain
		else
		{
			echo "naik kendaraan lain";
		}
		
		
	}	
	
	
	//tidak ke kampus
	else
	{
		echo " bobo aja deh";
	}	
			
		
?>