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
  	<center><h1>Student Result</h1></center>
  	<hr>
    <table>
	  <tr>
	    <th>ID</th>
	    <th>NAME</th>
	    <th>Hindi</th>
	    <th>English</th>
	    <th>Maths</th>
	    <th>Science</th>
	    <th>Obtained Marks</th>
	    <th>Precentage</th>
	    <th>Status</th>
	  </tr>
	 
<?php
include("connection.php");
session_start();
$result = $_SESSION['resultData'];
$hindi = $result['hindi'];
$english = $result['english'];
$maths = $result['maths'];
$science = $result['science'];
$marks = $hindi+$english+$maths+$science;
$percentage = ($marks*100)/400;
$status = "Fail";

if (isset($_SESSION['rollNo'])) {
	if ($percentage>40)
	{
		$status = "Pass";
	}
	echo "<tr>
		<td>".$_SESSION['rollNo']."</td>
		<td>".$result['name']."</td>
		<td>".$hindi."</td>
		<td>".$english."</td>
		<td>".$maths."</td>
		<td>".$science."</td>
		<td>".$marks."</td>
		<td>".$percentage.'%'."</td>
		<td>".$status."</td>
	</tr>";
}
else
{
	header("location:student.php");
}

?>
</table>
<br>
<a href="logout.php" class="btn btn-primary mx-3">Logout</a>

