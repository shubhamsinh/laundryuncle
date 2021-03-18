<?php

require_once("../config/connection.php");

if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	
	$sql =  "DELETE FROM membership_package WHERE membership_package_id='".$id."'";
	
	
	$result=mysqli_query($conn,$sql);
}
header("location:membershipselect.php");


?>  