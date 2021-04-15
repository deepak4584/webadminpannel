
<?php
include("config.php");
if(isset($_GET['eid']))
{
$edit_id = $_GET['eid'];
$sql = "SELECT * FROM users where id = '$edit_id'";
$result = $conn->query($sql);
$getdata = $result->fetch_object();
}

if(isset($_GET['did']))
{
$delete_id = $_GET['did'];
$sqld= "delete from  users where id = '$delete_id'";
$resultd = $conn->query($sqld);
header("location:register.php");
}

$sqls = "SELECT * FROM users";
$userresult = $conn->query($sqls);
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

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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
    
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" value="<?php if(isset($getdata->name)) { echo $getdata->name; } else { } ?>" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php if(isset($getdata->email)) { echo $getdata->name; } else { } ?>" required>

    <label for="mobile"><b>Mobile</b></label>
    <input type="text" placeholder="Enter mobile" name="mobile" id="mobile"  value="<?php if(isset($getdata->mobile)) { echo $getdata->mobile; } else { } ?>"  required>

    <label for="password"><b> Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" value="<?php if(isset($getdata->password)) { echo $getdata->password; } else { } ?>"  required>
    <hr>
  <button type="submit" name="submit" class="submit">Submit</button>
    </div>
  

</form>

<div class="container">
  
  <p>Details of students :</p>            
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; while($row = $userresult->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mobile']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><a href="register.php?eid=<?php echo $row['id']; ?>" >Edit</a> | <a href="register.php?did=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
   <?php $i++; } ?> 
  </tbody>
</table>
</div>

</body>
</html>
