<?php
include("config2.php");


if(isset($_GET['eid']))
{
  $edit_id = $_GET['eid'];
  $sql = "SELECT * FROM students where id='$edit_id'";
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


  $sql = "update students set name='$name', email='$email', mobile='$mob',password='$pwd' where id='$editid'";

if ($conn->query($sql) === TRUE) {
  header("location:table2.php");
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
  $action = $_POST['action'];
  
  $sql = "INSERT INTO students (name, email, mobile,password,action)
VALUES ('$name', '$email', '$mob','$pwd','$action')";

if ($conn->query($sql) === TRUE) {
  header("location:table2.php");
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
  <h2>Student form</h2>
  <form action="" method="POST">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"value="
    </div>

    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter mobile" name="mob" value="<?php if(isset($getdata->mobile)) { echo $getdata->mobile; } ?>">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($getdata->email)) { echo $getdata->email; } ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php if(isset($getdata->password)) { echo $getdata->password; } ?>">
    </div>
    <div class="form-group">
      <label for="name">Action:</label>
      <input type="text" class="form-control" id="name" placeholder="action" name="action"value="<?php if(isset($getdata->action)) { echo $getdata->action; } ?>">
    </div>
    <div class="checkbox">
    
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