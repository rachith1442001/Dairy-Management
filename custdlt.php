<!--DOCTYPE html>
<html>
<body>

<h2>CUSTOMER DETAILS</h2>
<p>please <strong>enter the details to delete record</strong> </p>

<form action="process8.php" method="POST">
Cust_id:<br>
<input type="text" name="Cust_id">
<br><br>
Cust_name:<br>
<input type="text" name="Cust_name">
<br><br>
S_id:<br>
<input type="text" name="S_id">
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
	background-image: url('img1.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
<table border=5 cellpadding=5 cellspacing=5>
<tr>
<th>Cust_id</th>
<th>Cust_name</th>
<th>Phone</th>
<th>Gender</th>
<th>Address</th>
<th>S_id</th>


<th>Delete</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","" ,"login");
//mysqli_select_db($conn,'login');
$sql = "SELECT * FROM custdetails";

$records=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($records))
{
	echo "<tr>";
	echo "<td>".$row['Cust_id']."</td>";
	echo "<td>".$row['Cust_name']."</td>";
	echo "<td>".$row['Phone']."</td>";
	echo "<td>".$row['Gender']."</td>";
	echo "<td>".$row['Address']."</td>";
	echo "<td>".$row['S_id']."</td>";

	echo "<td><a href=deletecust.php?Cust_id=".$row['Cust_id'].">Delete</a></td>";
}

?>
