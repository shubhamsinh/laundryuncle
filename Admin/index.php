<?php
include("header.php");
require_once('../config/connection.php');
?>
<?php
$osql = "select * from orders";
$oresult = mysqli_query($conn,$osql);
while($orow=mysqli_fetch_array($oresult))
{
		$odate = $orow['order_date'];
		$status = $orow['status'];
		$oid = $orow['order_id'];
		
		$newdate = date('Y-m-d', strtotime($odate. ' + 2 days'));
		$d = date("Y-m-d");
		
			
		if($status ==0 && $newdate <= $d)
		{
			$newsql = "update orders set status = 2 where order_id = $oid";
			$newresult = mysqli_query($conn,$newsql);
			
		}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
											<?php
											$sql4="select count(user_id) as user from user";
											$result4 = mysqli_query($conn,$sql4);
											$row4 = mysqli_fetch_array($result4);
											?>
                                                <h2><?php echo $row4['user']?></h2>
                                                <span>Member online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
											<?php
											$sql4="select count(product_id) as product from product";
											$result4 = mysqli_query($conn,$sql4);
											$row4 = mysqli_fetch_array($result4);
											?>
                                                <h2><?php echo $row4['product']?></h2>
                                                <span>items sold</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
											<?php
											$sql4="select count(feedback_id) as feedback from feedback";
											$result4 = mysqli_query($conn,$sql4);
											$row4 = mysqli_fetch_array($result4);
											?>
                                                <h2><?php echo $row4['feedback']?></h2>
                                                <span>User feedback</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
											<?php
											$sql4="select count(area_id) as area from area";
											$result4 = mysqli_query($conn,$sql4);
											$row4 = mysqli_fetch_array($result4);
											?>
                                                <h2><?php echo $row4['area']?></h2>
                                                <span>total area</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Order</h2>
                                <div class="table-responsive table--no-card m-b-40" style="height:730px;width:980px">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>order date</th>
                                                <th>amount</th>
                                                <th>user name</th>
											
                                                
                                                <th class="text-right">result</th>
                                                <th class="text-right">action</th>
												<th class="text-right">detail</th>
                                               
                                            </tr>
                                        </thead>
										
                                        <tbody>
										<?php
										$sql="select * from orders o join user u where  o.user_id = u.user_id and status=0";
										$result = mysqli_query($conn,$sql);
										
										
										?>
                                            <?php
									while($row=mysqli_fetch_array($result))
									{
										$id=$row['order_id'];
									?>
                                            <tr class="tr-shadow">
                                                
												
												<td><?php echo $row['order_date']?></td>
                                                <td>
                                                   <?php echo $row['amount']?>
                                                </td>
												<td>
                                                   <?php echo $row['user_name']?>
                                                </td>
												<td>
											<?php
												
											if($row['status']==0)
											{
												
											echo "Pending";
											
											}
												else if($row['status']==1)
												{
													echo "Accepted";
												}
												else if($row['status']==2)
												{
													echo "Rejected";
												}
												
												?>
												</td>
												<td>
													<?php
															if($row['status']==0)
															{
													?>
															 <a href="accept.php?id=<?php echo $id?>">
												<img src="accept.png" height="25" width="50"/></a>
												<a href="reject.php?id=<?php echo $id?>">
												<img src="reject.png" height="25" width="50"/></a>												
                                               
													<?php
															}
													?>
												
												</td>
												<td>
												<a href="orderitemselect.php">view Detail</a>
												</td>
											</tr>
									<?php
									}
									?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <div class="row">
                            
                            
                        </div>
                        
                        </div>
                       
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

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

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php
include("footer.php");
?>