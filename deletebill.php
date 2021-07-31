<?php
$conn=mysqli_connect("localhost","root","" ,"login");
$sql5 = "DELETE FROM billdetails WHERE Bill_id='$_GET[Bill_id]'";
if(mysqli_query($conn,$sql5))
{

header("refresh:1; url=billdlt.php");
}
?>