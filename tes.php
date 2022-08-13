<?php

class tes extends PHPUnit_Framework_TestCase
{
        function testFile()
        {
                include 'config/koneksi.php';
                $login = mysqli_query($kon,"SELECT * FROM tbl_user");
                $user = mysqli_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(4, $content1);
        }

        function testcoba()
        {
                include 'config/koneksi.php';
                $login = mysqli_query($kon,"SELECT * FROM tbl_admin");
                $user = mysqli_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(5, $content1);
        }
}

?>