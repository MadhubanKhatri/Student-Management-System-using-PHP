<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentmanagesystem";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
	echo "";
}
else
{
	echo "Connection Fail".$conn;
}
?>