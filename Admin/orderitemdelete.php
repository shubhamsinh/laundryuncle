<?php

require_once("../config/connection.php");

if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	
	$sql =  "DELETE FROM order_item WHERE order_item_id='".$id."'";
	
	
	$result=mysqli_query($conn,$sql);
}
header("location:orderitemselect.php");


?>
