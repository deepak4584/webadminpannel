<?php
include("index.php");
$sql = "SELECT * FROM customers";
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
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">subject</th>
      <th scope="col">comment</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; while($row = $result->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['subject']; ?></td>
      <td><?php echo $row['comment']; ?></td>
      
    </tr>
   <?php $i++; } ?> 
  </tbody>
</table>
</div>

</body>
</html>
