<?php
								$query	=mysqli_query($kon,"SELECT * FROM tbl_daerah ");
								//$tampil2	=mysqli_fetch_array($query);
								while($w=mysqli_fetch_array($query))

								//while ($set=mysqli_fetch_array($tampil2)) 
								//echo "<script language=\"JavaScript\" src=\"comboBox.js\"></script>";
								//$query = mysqli_query ($kon,"SELECT * FROM tbl_daerah ORDER BY daerah  ");
								//$result = mysqli_query($query);
								//while ($set=mysqli_fetch_array($result))
								//	echo "<script language=\"JavaScript\" src=\"comboBox.js\"></script>";
								{
		//							echo "<option value=$set[daerah]</option>";
								//	echo "<option value=$set[kode]>$set[daerah]</option>";
							//		echo '<option>'.$set['daerah'].'</option>';
 									//echo <td>$set[daerah]</td>
									echo '<option>'.$w['daerah'].'</option>';
									//echo "<option value=$w[daerah] selected>$w[daerah]</option>";        

								}
								echo"</select>";
?>