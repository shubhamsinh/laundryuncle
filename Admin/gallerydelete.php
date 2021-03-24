<?php

require_once("../config/dbconn.php");

if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	
	$sql =  "DELETE FROM gallary WHERE img_id='".$id."'";
	
	
	$result=mysqli_query($conn,$sql);
}
header("location:galleryselect.php");


?>
