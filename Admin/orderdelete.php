<?php

require_once("../config/dbconn.php");

if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	
	$sql =  "DELETE FROM order WHERE order_id='".$id."'";
	
	
	$result=mysqli_query($conn,$sql);
}
header("location:orderselect.php");


?>
