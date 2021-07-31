<?php
$conn=mysqli_connect("localhost","root","" ,"login");
//mysqli_select_db($conn,'login');
//$sql = "DELETE FROM sellardetails WHERE S_id='$_GET[S_id]'";
//$sql = "DELETE FROM custdetails WHERE Cust_id='$_GET[Cust_id]'";
$sql = "DELETE FROM stockdetails WHERE Stock_id='$_GET[Stock_id]'";

if(mysqli_query($conn,$sql))
{
	
//header("refresh:1; url=sellerdlt.php");
//header("refresh:1; url=custdlt.php");
header("refresh:1; url=stockdlt.php");
}


else
{
	echo "not deleted";
}



?>