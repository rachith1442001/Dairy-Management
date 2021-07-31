<?php
$conn=mysqli_connect("localhost","root","" ,"login");
$sql5 = "DELETE FROM sellerdetails WHERE S_id='$_GET[S_id]'";
if(mysqli_query($conn,$sql5))
{

header("refresh:1; url=sellerdlt.php");
}
?>