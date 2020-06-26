<?php
include("connection.php");
$RollNo = $_GET['rn'];
echo "$RollNo";
$query = "DELETE FROM STUDENTDATA WHERE rollno=$RollNo";
$data = mysqli_query($conn,$query);
if ($data)
{
	header("location:adminpanel.php");
}
else
{
	echo "Data Cannot Be Deleted";	
}
?>