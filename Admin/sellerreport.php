<?php
include("header.php");
?>
<?php
include("../config/connection.php");
$sql="SELECT product_name , o.amount , o.order_date , seller_name  FROM order_item item join orders o join product p join seller s WHERE item.order_id = o.order_id and item.product_id = p.product_id and p.seller_id = s.seller_id";

$flag=0;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$sid = $_POST["t3"];
	$sql = $sql . " and p.seller_id = $sid";
	
	$flag=1;	
}

$result=mysqli_query($conn,$sql);
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
    <title>Tables</title>

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
  -  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
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
                    
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Seller Report table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
									<form method="POST">
                                        <select name="t3" class="form-control">
												
												<?php
													$sql2="select * from seller";
													$result2=mysqli_query($conn,$sql2);
													
													while($row2=mysqli_fetch_array($result2))
													{
														
												?>
													<option value="<?php echo $row2['seller_id'];?>"> 
													<?php echo $row2['seller_name'];?>
													</option>
													<?php
													}
													?>
													
										</select>
										<button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit">
										Filter</button>
                                    </form>  
									
                                    </div>
									
									<?php 
										if($flag==0)
										{
												$str = "Reports/sellerreport.php";
										}
										else
										{
												$str = "Reports/sellerreport.php?id=$sid";
										}
										
									?>
                                    <div class="table-data__tool-right">
                                        <a href=<?php echo $str;?>>
										<button class="au-btn au-btn-icon au-btn--green au-btn--small">
											<i class="zmdi zmdi-plus"></i>Report</button>
										</a>
                                        
                                    </div>
                                </div>
								
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>product_name</th>
												 <th>amount</th>
                                                <th>order date</th>
												<th>seller name</th>
												
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										while($row=mysqli_fetch_array($result))
										{
											
										?>
                                            <tr class="tr-shadow">
                                                
												
												<td><?php echo $row['product_name']?></td>
                                                <td>
                                                   <?php echo $row['amount']?>
                                                </td>
												<td>
                                                   <?php echo $row['order_date']?>
                                                </td>
												<td>
                                                   <?php echo $row['seller_name']?>
                                                </td>
												
												
												
                                                
                                                
                                            </tr>
                                           
											  <?php
										}
											?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
                        <div class="row">
                           
                        </div>
                    </div>
                </div>
            </div>
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