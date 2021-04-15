<?php
include("config.php");
if(isset($_GET['eid']))
{
$edit_id = $_GET['eid'];
$sql = "SELECT * FROM users where id = '$edit_id'";
$result = $conn->query($sql);
$getdata = $result->fetch_object();
}
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $sql = "INSERT INTO users (name,email,mobile,password)
    VALUES ('$name','$email', '$mobile','$password')";
    $result = $conn->query($sql);
}
if ($result)
  {
    header("location:form.php");
    die;
  }
  else{
    $error_msg = "faild";
  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form action="" method="post" onsubmit="return validation()">
    <div class="form-group">
        <label for="name">Name:*</label>
        <input type="text" class="form-control" id="name"  name="name" value="" >
        <span id ="name1" style="color:red;">  </span>
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  name="email" value="">
      <span id ="email1" style="color:red;">  </span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password"  name="password" value="">
      <span id ="password1" style="color:red;">  </span>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="mobile" class="form-control" id="mobile" name="mobile" value="">
        <span id ="mobile1" style="color:red;">  </span>
      </div>
      <div class="radio">
        <label><input type="radio" name="optradio" checked>Male </label>
      </div>
      <div class="radio">
        <label><input type="radio" name="optradio">Female</label>
      </div>
    <button type="submit"  name="submit" id="submit" class="btn btn-primary">Submit</button>
    
  </form>

<br>

  <div class="row">
      <div class="col-md-3">
        <button   name="name" id="name1" class="btn btn-secondary"  onclick="return showname('name')" >Name</button>
      </div>
      <div class="col-md-3">
        <button   name="email" id="email1" class="btn btn-secondary" onclick="return showname('email')">Email</button>
      </div>
      <div class="col-md-3">
        <button   name="password" id="password1" class="btn btn-secondary" onclick="return showname('password')">Password</button>
      </div>
      <div class="col-md-3">
        <button   name="mobile" id="mobile1" class="btn btn-secondary" onclick="return showname('mobile')">Mobile</button>
      </div>
  </div>
  
<script> 

function validation() {
  
  var fname = document.getElementById('name').value;
  if(fname == ""){
    document.getElementById('name1').innerHTML = "ENTER THE NAME";
    return false;
  }

  var email = document.getElementById('email').value;
  if(email == ""){
    document.getElementById('email1').innerHTML = "ENTER THE email";
    return false;
  }
  var password = document.getElementById('password').value;
  if(password == ""){
    document.getElementById('password1').innerHTML = "ENTER THE password";
    return false;
  }
  var mobile = document.getElementById('mobile').value;
  if(mobile == ""){
    document.getElementById('mobile1').innerHTML = "ENTER THE mobile";
    return false;
  }
}


function showname(type)
{
    
    if(type =='name')
    {
     document.getElementById('name').value = 'Enter your name';
    }
    else if(type == 'email')
    {
        document.getElementById('email').value = 'Enter your email';
    }
    else if(type == 'password')
    {
        document.getElementById('password').value = 'Enter your password';
    }
    else if(type == 'mobile')
    {
        document.getElementById('mobile').value = 'Enter your mobile';
    }
    else{

    }
}





</script>

</body>
</html>





