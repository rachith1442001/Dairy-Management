<?php
$conn=mysqli_connect("localhost","root","" ,"login");
$sql5 = "DELETE FROM stockdetails WHERE Stock_id='$_GET[Stock_id]'";
if(mysqli_query($conn,$sql5))
{

header("refresh:1; url=stockdlt.php");
}
?>