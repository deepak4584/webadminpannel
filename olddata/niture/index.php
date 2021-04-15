<?php
session_start();
include("config.php");


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

<body class="main-layout">



    <div class="wrapper">

       
        <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active"> <a href="index.html">Home</a></li>
                 <li> <a href="about.html">About</a></li>
                                        <li> <a href="product.html">Product</a></li>
                                        <li> <a href="blog.html">Blog</a></li>
                                        <li> <a href="contact.html">Contact us</a></li>

            </ul>

        </nav>
      </div>

        <div id="content">
            <!-- header -->

        <?php include('header.php'); ?>

            <!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                                <div class="text-bg">
                                    <h1>The latest <br> <strong class="black_bold">furniture Design</strong><br></h1>
                                    <a href="#">Shop Now <i class='fa fa-angle-right'></i></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="text-img">
                                    <figure><img src="images/bg.jpg" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- discount -->
            <div class="container">
                <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end discount -->
            <!-- trending -->
            <div class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Trending <strong class="black">Categories</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                <figure><img src="images/1.jpg" /></figure>
                                <h3>Outdoor</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="trending-box">
                                <figure><img src="images/2.jpg" /></figure>
                                <h3>Living Room</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                <figure><img src="images/3.jpg" /></figure>
                                <h3>Bedroom Lighting</h3>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end trending -->

            <!-- our brand -->
            <div class="brand">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Featured <strong class="black">Brands</strong></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="brand-bg">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="brand-box">
                                <i><img src="icon/p1.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="brand-box">
                                <i><img src="icon/p2.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="brand-box">
                                <i><img src="icon/p3.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="brand-box">
                                <i><img src="icon/p4.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end our brand -->
           
            <!--  footer -->

            <?php include('footer.php'); ?>

            <!-- end footer -->
        </div>

    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>
    <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js --> 
    
</body>

</html>