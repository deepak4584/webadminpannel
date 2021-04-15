<?php
session_start();
include('config.php');
if(isset($_GET['eid']))
{
  $edit_id = $_GET['id'];
  $sql = "SELECT * FROM users where id='$edit_id'";
  $result = $conn->query($sql);
  $getdata = $result->fetch_object();
}
if(isset($_POST['submit']))
{

  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $sql = "INSERT INTO users (email,mobile,password)
  VALUES ('$email', '$mobile','$password')";
  $result = $conn->query($sql);
  if ($result)
  {
    header("location:login.php");
    die;
  }
  else{
    $error_msg = "faild";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=number],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus , input[type=email]:focus  {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submit {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submit:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="mobile"><b>Mobile</b></label>
    <input type="number" placeholder="Enter mobile" name="mobile" id="mobile" required>

    <label for="password"><b> Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
    <hr>
    

    <button type="submit" name="submit" class="submit">Submit</button>
  </div>
  
  
</form>

</body>
</html>