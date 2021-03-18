<?php


//including the database connection file
require_once("../config/connection.php");
 
//getting id of the data from url
if(isset($_GET['id']))
{
$id = $_GET['id'];
 
//deleting the row from table
//$sql = "delete from booking where booking_id='".$id."'";
$sql = "update orders set status=2 where order_id=$id";

$result=mysqli_query($conn,$sql);

if($result)
{
	echo "<meta http-equiv='refresh' content='0;url=orderselect.php'>";
	 //header("Location:booking.php"); 
}

}



?>