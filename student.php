<?php
session_start();
include("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Check Result Here</title>
  </head>
  <body style="background-color: grey;">
    <center>
	<div style="position: absolute; top: 100px; left: 400px; padding: 10px; background-color: skyblue;">
		<form action="" method="POST">
			<h2>Enter Roll No.</h2>
			<input type="text" name="rollno" placeholder="Roll Number"  required=""><br><br>
			<input class="btn btn-primary" type="submit" name="submit" value="Check Result">
		</form>
		
	</div>

	<div style="position: absolute; top: 100px; left: 900px; padding: 10px; background-color: skyblue;">
		<form action="" method="POST">
			<h2>Teacher Panel</h2>
			<input type="text" name="name" placeholder="Name" required=""><br><br>
			<input type="text" name="pass" placeholder="Password"  required=""><br><br>
			<input class="btn btn-primary" type="submit" name="login" value="Login">
		</form>
	</div>
	</center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if (isset($_POST['submit']))
{
	$_SESSION['rollNo'] = $_POST['rollno'];
	$query = "SELECT * FROM STUDENTDATA WHERE rollno='$_SESSION[rollNo]'";
	$data = mysqli_query($conn,$query);
	$_SESSION['resultData'] = mysqli_fetch_assoc($data);
	if ($data)
	{
		if (isset($_SESSION['rollNo'])) {
			if ($_SESSION['rollNo'] != $_SESSION['resultData']['rollno'])
			{
				echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>Invalid Roll Number!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
			}
			else
			{
				header("location:studentData.php");	
			}
			
		}
		else
		{
			header("location:student.php");
		}
		
	}
	else
	{
		header("location:student.php");
	}
}
?>


<?php
if (isset($_POST['login']))
{
	$_SESSION['adminname'] = $_POST['name'];
	$_SESSION['adminpass'] = $_POST['pass'];
	if ($_SESSION['adminname']=='admin' && $_SESSION['adminpass']=='admin20')
	{
		header("location:adminpanel.php");

	}
	else
	{
		echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>Invalid Admin name or Password!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	}
}

?>