
<header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="index.php"><img src="images/logo.jpg" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                    
                                 <?php if(isset($_SESSION['email'])){ ?>
                                 <li class="get-started"> <a href="logout.php" style= "color:#086861" > Hi <?php echo $_SESSION['email']; ?>
                                  | Logout</a></li>
           
                                    <?php } else { ?>
                                   <li class="get-started"><a href="register.php" style= "color:#086861"> Register/Login</a></li>
                               <?php } ?>
                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>