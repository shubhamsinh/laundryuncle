<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}	

?>

<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="Leather Vortal" height=25px width=25px/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo.jpg" height="150px" width="200px" alt="Leather Vortal" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="userselect.php">
                                <i class="fa fa-user-circle"></i>User</a>
                          
                        </li>
						<li>
                            <a href="sellerselect.php">
                                <i class="fa fa-address-book"></i>Seller</a>
                        </li>
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
                                <i class="fas fa-calendar-alt"></i>Product</a>
                        </li>
						<li>
                            <a href="contactselect.php">
                                <i class="fa fa-phone-square"></i>Contact us</a>
                        </li>
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
						<li class="has-sub">
                            <a class="js-arrow" href="sellerreport.php">
                                <i class="fa fa-image"></i>Seller Reports</a>
                            
                        </li>
						 
						
						
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="profile.png" alt="Utsav Modi" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="index.php">Utsav Modi</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="index.php">
                                                        <img src="profile.png" alt="Utsav Modi" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Utsav Modi</a>
                                                    </h5>
                                                    <span class="email">utsavmodi1234@gmail.com</span>
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
                </div>
            </header>
            <!-- HEADER DESKTOP-->
