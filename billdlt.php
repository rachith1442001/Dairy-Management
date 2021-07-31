<!--DOCTYPE html>
<html>
<body>

<h2>BILL DETAILS</h2>
<p>please <strong>enter the details to delete record</strong> </p>

<form action="process12.php" method="POST">
Bill_id:<br>
<input type="text" name="Bill_id">
<br><br>
Cust_id:<br>
<input type="text" name="Cust_id">
<br><br>
<input type="submit" name="done">
</form> 



</body>
</html>-->

<html>
<head>
<title>delete records from database</title>
</head>
<style>
body
{
	background-image: url('img4.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
<table border=5 cellpadding=5 cellspacing=5>
<tr>
<th>Bill_id</th>
<th>Amount</th>
<th>Date</th>
<th>Cust_id</th>



<th>Delete</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","" ,"login");
//mysqli_select_db($conn,'login');
$sql = "SELECT * FROM billdetails";

$records=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($records))
{
	echo "<tr>";
	echo "<td>".$row['Bill_id']."</td>";
	echo "<td>".$row['Amount']."</td>";
	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Cust_id']."</td>";
	//echo "<td>".$row['Address']."</td>";*/
	//echo "<td>".$row['Stock_id']."</td>";

	//echo "<td><a href=delete.php?Packet_id=".$row['Packet_id'].">Delete</a></td>";

	echo "<td><a href=deletebill.php?Bill_id=".$row['Bill_id'].">Delete</a></td>";
}

?>


