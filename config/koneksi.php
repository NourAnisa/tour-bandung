<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "db_ninatour";
	
	//$kon = mysqli_connect($host, $user, $pass);
	//$kondb = mysqli_select_db ($db,$kon);
	//edit
	$kon = mysqli_connect($host, $user, $pass,$db);
	//$kondb = mysqli_select_db ($db,$kon);
	
	
	
	//test koneksi
	
	/*if($kon){
		echo "Terkoneksi dengan mysqliiiiii";
		if($kondb){
			echo "DataBase $db yang dipilih";
		}else{
			echo "DataBase tidak ada";
		}
	}else{
		echo "Koneksi GAGAL";
	}
	*/
