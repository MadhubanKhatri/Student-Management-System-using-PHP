<?php
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

    <title>Add New Student</title>
  </head>
  <body>
    <div class="container">
      <h1>Add New Student</h1>
    <form action="" method="POST">
    <div class="form-group">
      <input type="text" name="rn" class="form-control" aria-describedby="emailHelp" placeholder="Add Roll No" required="" style="width: 30%">
    </div>
    <div class="form-group">
      <input type="text" name="nm" class="form-control" placeholder="Add Name" required="" style="width: 30%">
    </div>
    <div class="form-group">
      <input type="text" name="hindi" class="form-control" placeholder="Add Hindi Marks" required="" style="width: 30%">
    </div>
    <div class="form-group">
      <input type="text" name="english" class="form-control" placeholder="Add English Marks" required="" style="width: 30%">
    </div>
    <div class="form-group">
      <input type="text" name="maths" class="form-control" placeholder="Add Maths Marks" required="" style="width: 30%">
    </div>
    <div class="form-group">
      <input type="text" name="science" class="form-control" placeholder="Add Science Marks" required="" style="width: 30%">
    </div>
    <button type="submit" name="add" class="btn btn-primary">ADD</button>
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
if (isset($_POST['add']))
{
	$roll = $_POST['rn'];
	$name = $_POST['nm'];
	$hindi = $_POST['hindi'];
	$english = $_POST['english'];
	$maths = $_POST['maths'];
	$science = $_POST['science'];
	$query = "INSERT INTO STUDENTDATA (rollno,name,hindi,english,maths,science) VALUES ('$roll','$name','$hindi','$english','$maths','$science')";
	$data = mysqli_query($conn,$query);
	if ($data)
	{
		header("location:adminpanel.php");
	}
	else
	{
		header("location:addData.php");
	}
}











?>