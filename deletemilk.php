<?php
$conn=mysqli_connect("localhost","root","" ,"login");
$sql4 = "DELETE FROM milkdetails WHERE Packet_id='$_GET[Packet_id]'";
if(mysqli_query($conn,$sql4))
{
	
header("refresh:1; url=milkdlt.php");
}
?>