<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "tourtravel";

	mysqli_connect($host,$user,$pass) or die ("koneksi gagal");
	mysqli_select_db($db) or die ("Database tidak ditemukan");

	class testing extends PHPUnit_Framework_TestCase{
		function testPassword(){
			$kon = mysqli_query($kon,"SELECT * FROM tbl_admin where user_admin='fauzi'");
			$user = mysqli_fetch_array("$sql");
			$test_user = $user['password'];
			$content = $test_user;
			$this->assertEquals('fauzi',$content);
		}
		function testUsername(){
			$sql = mysqli_query($kon,"SELECT * FROM tbl_admin where pass_admin='fauzi'");
			$user = mysqli_fetch_array("$sql");
			$test_user = $user['username'];
			$content = $test_user;
			$this->assertEquals('fauzi',$content);
		}	
	}

?>