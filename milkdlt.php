<!--<!DOCTYPE html>
<html>
<body>

<h2>MILK DETAILS</h2>
<p>please <strong>enter the details to delete record</strong> </p>

<form action="process10.php" method="POST">
Packet_id:<br>
<input type="text" name="Packet_id">
<br><br>
S_id:<br>
<input type="text" name="S_id">
<br><br>
Stock_id:<br>
<input type="text" name="Stock_id">
<br>
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
	background-image: url('img5.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
<table border=5 cellpadding=5 cellspacing=5>
<tr>
<th>Packet_id</th>
<th>fat</th>
<th>Qty</th>
<th>S_id</th>
<th>Stock_id</th>


<th>Delete</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","" ,"login");
//mysqli_select_db($conn,'login');
$sql = "SELECT * FROM milkdetails";

$records=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($records))
{
	echo "<tr>";
	echo "<td>".$row['Packet_id']."</td>";
	echo "<td>".$row['fat']."</td>";
	echo "<td>".$row['Qty']."</td>";
	echo "<td>".$row['S_id']."</td>";
	//echo "<td>".$row['Address']."</td>";*/
	echo "<td>".$row['Stock_id']."</td>";

	echo "<td><a href=deletemilk.php?Packet_id=".$row['Packet_id'].">Delete</a></td>";
}

?>
