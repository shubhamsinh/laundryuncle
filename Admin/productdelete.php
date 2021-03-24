<?php

require_once("../config/dbconn.php");

if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	
	$sql =  "DELETE FROM service WHERE ser_id='".$id."'";
	
	
	$result=mysqli_query($conn,$sql);
}
header("location:productselect.php");


?>
