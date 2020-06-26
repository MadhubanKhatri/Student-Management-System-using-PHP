<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, ADMIN</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr{
  background-color: #dddddd;
}
</style>
  </head>
  <body>
  	<center><h2>Teacher Panel</h2></center>
  	<hr style="background-color: grey;">
	<table>
		  <tr>
		    <th>Roll No.</th>
		    <th>NAME</th>
		    <th>HINDI</th>
		    <th>ENGLISH</th>
		    <th>MATHS</th>
		    <th>SCIENCE</th>
		    <th colspan="2">OPERATIONS</th>
		  </tr>
<?php
include("connection.php");
session_start();
$getdata_query = "SELECT * FROM STUDENTDATA";
$data = mysqli_query($conn,$getdata_query);

if (isset($_SESSION['adminname']))
{
	while ($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['rollno']."</td>
			<td>".$result['name']."</td>
			<td>".$result['hindi']."</td>
			<td>".$result['english']."</td>
			<td>".$result['maths']."</td>
			<td>".$result['science']."</td>
			<td><a href='update.php?rn=$result[rollno]& name=$result[name]& hindi=$result[hindi]& english=$result[english]& maths=$result[maths]& science=$result[science]'>Update</a></td>
			<td><a href=delete.php?rn=$result[rollno]>Delete</a></td>
		</tr>";
	}
	echo "<br><a href='logout.php' class='btn btn-primary mx-2'>Logout</a>";
}
else
{
	header("location:student.php");
}
?>
</table>

<a href="addData.php" style="display: inline-block;"><h3>Add New Student Data</h3></a>










