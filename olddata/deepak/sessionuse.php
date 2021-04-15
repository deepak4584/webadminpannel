<?php
include("sessionconfig.php");

if(isset($_POST['sub_btn']))
{
  $name = $_POST['name'];
  $mob = $_POST['mobile'];
  $email = $_POST['email'];
  $sql = "INSERT INTO deepak (name, email, mobile)
  VALUES ('$name', '$email', '$mob')";
  
  if ($conn->query($sql) === TRUE) {
    header("location:login.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="sub_btn" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>