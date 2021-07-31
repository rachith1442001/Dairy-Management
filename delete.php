<?php
$conn=mysqli_connect("localhost","root","" ,"login");
//mysqli_select_db($conn,'login');

$sql1 = "DELETE FROM sellardetails WHERE S_id='$_GET[S_id]'";
if(mysqli_query($conn,$sql1))
{
	
header("refresh:1; url=sellerdlt.php");
}
$sql2 = "DELETE FROM custdetails WHERE Cust_id='$_GET[Cust_id]'";
if(mysqli_query($conn,$sql2))
{
	
header("refresh:1; url=custdlt.php");
}
$sql3 = "DELETE FROM stockdetails WHERE Stock_id='$_GET[Stock_id]'";
if(mysqli_query($conn,$sql3))
{
	
header("refresh:1; url=stockdlt.php");
}
$sql4 = "DELETE FROM milkdetails WHERE Packet_id='$_GET[Packet_id]'";
if(mysqli_query($conn,$sql4))
{
	
header("refresh:1; url=milkdlt.php");
}
$sql5 = "DELETE FROM billdetails WHERE Bill_id='$_GET[Bill_id]'";
if(mysqli_query($conn,$sql5))
{

header("refresh:1; url=billdlt.php");
}



else
{
	echo "not deleted";
}



?>