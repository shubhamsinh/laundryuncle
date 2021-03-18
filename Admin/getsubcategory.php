<?php
	require_once('../config/connection.php');
	$cid=$_POST['cid'];
	$sql1="select * from sub_category where category_id = $cid";
	$result1=mysqli_query($conn,$sql1);
													
while($row = mysqli_fetch_array($result1))
{
	echo "<option value=" . $row['sub_category_id'] .">" . $row['sub_category_name'] . "</option>";

}	

?>