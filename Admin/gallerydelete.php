<?php

require_once("../config/connection.php");

if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	
	$sql =  "DELETE FROM gallery WHERE gallery_id='".$id."'";
	
	
	$result=mysqli_query($conn,$sql);
}
header("location:galleryselect.php");


?>
