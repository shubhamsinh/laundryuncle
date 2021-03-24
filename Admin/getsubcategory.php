<?php
	require_once('../config/dbconn.php');
	$cid=$_POST['cid'];
	$sql1="select * from subcategory where cat_id = $cid";
	$result1=mysqli_query($conn,$sql1);
													
while($row = mysqli_fetch_array($result1))
{
	echo "<option value=" . $row['subcat_id'] .">" . $row['subcat_name'] . "</option>";

}	

?>