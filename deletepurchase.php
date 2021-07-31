<?php
$conn=mysqli_connect("localhost","root","" ,"login");
$pkt=$_GET['Packet_id'];
$sql1 = "DELETE FROM purchasedetails WHERE Packet_id='$pkt'";
mysqli_query($conn,$sql1);

header("refresh:1; url=purchasedlt.php");
?>