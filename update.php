<?php
include("connection.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Update Student Data</title>
  </head>
  <body>
    <div class="container">
      <h1>Update Student Data</h1>
    <form action="" method="GET">
    <div class="form-group">
   		<label>Roll No:</label>
      <input type="text" name="rn" value="<?php echo $_GET['rn'];?>" class="form-control" aria-describedby="emailHelp" placeholder="Add Roll No" required="" style="width: 30%">
    </div>
    <div class="form-group">
    	<label>Student Name:</label>
      <input type="text" name="nm" value="<?php echo $_GET['name'];?>" class="form-control" placeholder="Add Name" required="" style="width: 30%">
    </div>
    <div class="form-group">
    	<label>Hindi:</label>
      <input type="text" name="hindi" value="<?php echo $_GET['hindi'];?>" class="form-control" placeholder="Add Hindi Marks" required="" style="width: 30%">
    </div>
    <div class="form-group">
    	<label>English:</label>
      <input type="text" name="english" value="<?php echo $_GET['english'];?>" class="form-control" placeholder="Add English Marks" required="" style="width: 30%">
    </div>
    <div class="form-group">
    	<label>Maths:</label>
      <input type="text" name="maths" value="<?php echo $_GET['maths'];?>" class="form-control" placeholder="Add Maths Marks" required="" style="width: 30%">
    </div>
    <div class="form-group">
    	<label>Science:</label>
      <input type="text" name="science" value="<?php echo $_GET['science'];?>" class="form-control" placeholder="Add Science Marks" required="" style="width: 30%">
    </div>
    <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
  </form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if (isset($_GET['update']))
{
	$rollno = $_GET['rn'];
	$name = $_GET['nm'];
	$hindi = $_GET['hindi'];
	$english = $_GET['english'];
	$maths=$_GET['maths'];
	$science=$_GET['science'];

	$query = "UPDATE STUDENTDATA SET NAME='$name', HINDI='$hindi',ENGLISH='$english',MATHS='$maths',SCIENCE='$science' WHERE ROLLNO='$rollno'";
	$data = mysqli_query($conn,$query);
	if ($data)
	{
		header("location:adminpanel.php");
	}
	else
	{
		echo "Not updated";
	}
}
?>








