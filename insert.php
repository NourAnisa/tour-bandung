<?php
	if($_POST['Submit']){
		// if (!empty($_POST['dateTour']) && !empty($_POST['tujuan']) && !empty($_POST['hotel']) && !empty($_POST['kategori']) && !empty($_POST['paket'])){

		// 	echo 'df';
		// } 

		if(!empty($_POST['dateTour'])){
			echo $_POST['nama']." ";
			echo $_POST['dateTour']." ";
			echo $_POST['tujuan']." ";
			echo $_POST['hotelp']." ";
			echo $_POST['kategori_paket']." ";
			echo $_POST['paket']." ";
			echo $_POST['status']." ";

		}
	}
?>