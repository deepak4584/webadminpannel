<?php
session_start();

if(isset($_SESSION['email']))
{
header("location:index.php");
}

include("config.php");

if(isset($_GET['id']))
{
  $edit_id = $_GET['id'];
  $sql = "SELECT * FROM users where id='$edit_id'";
  $result = $conn->query($sql);
  $getdata = $result->fetch_object();
 
}
if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users where email='$email' and password='$password'";
$result = $conn->query($sql);
  $getdata = $result->fetch_object();
  if($getdata->email == $email)
  {
    $_SESSION['email'] = $getdata->email;
    $_SESSION['password'] = $getdata->password;
    $email_session = $_SESSION['email'];
    header("location:index.php");
  }
  else 
  {
   echo   $error_smg = 'email or password is worng';
   die;
  }
  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>niture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body >



    

        
            <!-- header -->

        <?php include('header.php'); ?>

            <!-- end header -->
           
           
            <!-- map -->
            
                            <div class="title">
                                <h2><strong class="black">Login</strong></h2>

                            </div>
                        <center><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                            <form class="main_form" action="" method="post">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="email">
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 12-sm-12">
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                    </div>
                                    <div class="col-xl col-lg col-md col-sm">
                                    <button class="form-control" type="submit" name="login" style="width: auto;">login</button>
                                    </div>
                                </div>
                            </form>
                        </div></center>
                        
                    </div>
                </div>
            </div>
            
            <!--  footer -->

            <?php include('footer.php'); ?>

            <!-- end footer -->
        </div>

    </div>

   

    
</body>

</html>