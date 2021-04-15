<?php
session_start();
include('config.php');
if(isset($_SESSION['mobile']))
{
header("location:index.php");
}
if(isset($_GET['id']))
{
  $edit_id = $_GET['id'];
  $sql = "SELECT * FROM users where id='$edit_id'";
  $result = $conn->query($sql);
  $getdata = $result->fetch_object();
 
}
 if(isset($_POST['submit']))
{
 
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users where mobile='$mobile' and password='$password'";
  
  $result = $conn->query($sql);
  $getdata = $result->fetch_object();
if($getdata->mobile == $mobile)
{
  $_SESSION['mobile'] = $getdata->mobile;
  $_SESSION['name'] = $getdata->name;
  $mobile_session = $_SESSION['mobile'];
  header("location:index.php");
}
else 
{
 echo   $error_smg = 'mobile number and password is worng';
 die;
}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php include('header.php'); ?>
<h2>Login Form</h2>

<form action="" method="post">
  

  <div class="container">
    <label for="mobile"><b>Mobile</b></label>
    <input type="number" placeholder="Enter mobile" name="mobile" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    
  </div>

  
</form>
<?php include('footer.php'); ?>
</body>
</html>