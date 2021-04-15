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
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="container">
  
  <p>Details of students :</p>            
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; while($row = $userresult->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      
      <td><?php echo $row['email']; ?></td>
      
      <td><?php echo $row['password']; ?></td>
      <td><a href="register.php?eid=<?php echo $row['id']; ?>" >Edit</a> | <a href="register.php?did=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
   <?php $i++; } ?> 
  </tbody>
</table>
</div>



</body>
</html>