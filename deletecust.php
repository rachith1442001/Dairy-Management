<?php
$conn=mysqli_connect("localhost","root","" ,"login");
$sql2 = "DELETE FROM custdetails WHERE Cust_id='$_GET[Cust_id]'";
if(mysqli_query($conn,$sql2))
{
	
header("refresh:1; url=custdlt.php");
}
?>