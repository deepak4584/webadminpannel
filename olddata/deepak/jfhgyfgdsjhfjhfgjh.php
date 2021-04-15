<?php
include("config.php");

if(isset($_GET['eid']))
{
  $edit_id = $_GET['eid'];
  $sql = "SELECT * FROM users where id='$edit_id'";
  $result = $conn->query($sql);
  $getdata = $result->fetch_object();
 
}

if(isset($_POST['save_btn']))
{
  $name = $_POST['name'];
  $mob = $_POST['mob'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $editid = $_POST['edit_id'];


  $sql = "update users set name='$name', email='$email', mobile='$mob',password='$pwd' where id='$editid'";

if ($conn->query($sql) === TRUE) {
  header("location:table.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


if(isset($_POST['submit_btn']))
{
  $name = $_POST['name'];
  $mob = $_POST['mob'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  
  $sql = "INSERT INTO users (name, email, mobile,password)
VALUES ('$name', '$email', '$mob','$pwd')";

if ($conn->query($sql) === TRUE) {
  header("location:table.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Admission Form </h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter student name" name="name" value="<?php if(isset($getdata->name)) { echo $getdata->name; } ?>">
    </div>

  
    <div class="form-group">
      <label for="name">mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mob" value="<?php if(isset($getdata->mobile)) { echo $getdata->mobile; } ?>">
    </div>
  
 
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($getdata->email)) { echo $getdata->email; } ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php if(isset($getdata->password)) { echo $getdata->password; } ?>">
    </div>
    <div class="checkbox"> 
<!--     
  <p>Please select your gender:</p>
  <div class="col-sm-4">
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br></div>
  <div class="col-sm-4">
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br></div>
  <div class="col-sm-4">
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label> </div>

  
  <br>
  <p>Please select your favourite game:</p>
  <div class="raw">
  <div class="col-sm-4">
  <input type="checkbox" id="game1" name="game11" value=" ">
  <label for="Game1"> Cricket</label><br></div>
  <div class="col-sm-4">
  <input type="checkbox" id="game2" name="game2" value=" ">
  <label for="Game2">  Rafting</label><br></div>
  <div class="col-sm-4">
  <input type="checkbox" id="game3" name="game3" value=" ">
  <label for="Game3"> Climbing</label><br></div>
  </div> -->
  
  <div class="text-center">
  <?php if($edit_id !='')
  { ?>
  <input type="hidden"  name="edit_id" value="<?php echo $edit_id;?>">
  <button type="submit" name="save_btn" class="btn btn-primary">Save</button>
  <?php } else { ?>
    <button type="submit" name="submit_btn" class="btn btn-primary">Submit</button>
  <?php } ?>
  </div>
  </form>
</div>

</body>
</html>