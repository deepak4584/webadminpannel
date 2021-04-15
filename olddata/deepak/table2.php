<?php
include("config2.php");
$sql = "SELECT * FROM students order by id desc";
$result = $conn->query($sql);
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
  <table class="table table-bordered">
    <thead>
      <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $i=1; while($row = $result->fetch_assoc()) { ?>
    <tr>
    <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><a href="form2.php?eid=<?php echo $row['id']; ?>">edit</a>| <a href="form2.php?did=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure do you want to delete this item?')">delete</a></td>
    </tr>
   <?php $i++; } ?> 
    </tbody>
  </table>
</div>


</body>
</html>
