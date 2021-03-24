<!DOCTYPE html>
<html lang="en">

    <?php

    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:login.php");
    }	
    
    ?>
    
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Laundry Uncle</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="index1.php">
                <p style="color:white; align:center; font-size:30px; font-weight:500"> Laundry Uncle</p>
                    <!-- <img src="images/icon/logo-white.png" alt="Cool Admin" /> -->
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <!-- <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="profile.png" alt="Akash Shankhala" />
                    </div>
                    <h4 class="name">Akash Shankhala</h4>
                    <a href="logout.php">Sign out</a>
                </div> -->
            
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="userselect.php">
                                <i class="fa fa-user-circle"></i>User</a>
                          
                        </li>
						<!-- <li>
                            <a href="sellerselect.php">
                                <i class="fa fa-address-book"></i>Seller</a>
                        </li> -->
						<li>
                            <a href="areaselect.php">
                                <i class="fas fa-map-marker-alt"></i>Area</a>
                        </li>
						
						<li>
                            <a href="categoryselect.php">
                                <i class="fa fa-pencil-square-o"></i>Category</a>
                        </li>
                         <li>
                            <a href="subcategoryselect.php">
                                <i class="fa fa-book"></i>Sub Category</a>
                        </li>
						<li>
                            <a href="productselect.php">
                                <i class="fas fa-calendar-alt"></i>Service</a>
                        </li>
						<!-- <li>
                            <a href="contactselect.php">
                                <i class="fa fa-phone-square"></i>Contact us</a>
                        </li> -->
						<li class="has-sub">
                            <a class="js-arrow" href="galleryselect.php">
                                <i class="fa fa-image"></i>Gallery</a>
                            
                        </li>
						<li>
                            <a href="orderselect.php">
                                <i class="fas fa-chart-bar"></i>Order</a>
                        </li>
                        
                        <li>
                            <a href="feedbackselect.php">
                                <i class="fa fa-thumbs-up"></i>Feedback</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="report.php">
                                <i class="fa fa-image"></i>Order Reports</a>
                            
                        </li>
						<!-- <li class="has-sub">
                            <a class="js-arrow" href="sellerreport.php">
                                <i class="fa fa-image"></i>Seller Reports</a>
                            
                        </li> -->
						 
						
						
                        
                        
                    </ul>
                </nav>
            </div>
        
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <!--<div class="page-container2">-->
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                            <a href="index1.php">
                                <p style="color:white; align:center; font-size:30px; font-weight:500"> Laundry Uncle</p>
                                <!-- <img src="images/icon/logo-white.png" alt="Cool Admin" /> -->
                            </a>
                            </div>

                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="profile.png" alt="Akash Shankhala" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="index1.php">Akash Shankhala</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="index1.php">
                                                        <img src="profile.png" alt="Akash Shankhala" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Akash Shankhala</a>
                                                    </h5>
                                                    <span class="email">akashjgbca2018@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="editprofile.php">
                                                        <i class="zmdi zmdi-account"></i>Edit Profile</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
             <section class="au-breadcrumb m-t-75">
                <!--<div class="section__content section__content--p30">
                     <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
            <!-- END BREADCRUMB-->
            <!--</div>-->
</div>
     <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->