<?php
include("header.php");
?>
<?php
include("../config/connection.php");
$sql="select * from product p join sub_category s join seller e where p.sub_category_id = s.sub_category_id and p.seller_id = e.seller_id order by product_id";
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
                                <h3 class="title-5 m-b-35">Product table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                        
                                        
                                    </div>
                                    <div class="table-data__tool-right">
                                         <a href="productinsert.php">
										<button class="au-btn au-btn-icon au-btn--green au-btn--small">
										
                                            <i class="zmdi zmdi-plus"></i>add item</button>
										</a>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>product_name</th>
												 <th>sub_category_name</th>
                                                <th>description</th>
												<th>product_price</th>
												 <th>size</th>
                                                <th>seller_name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										while($row=mysqli_fetch_array($result))
										{
											$id=$row['product_id'];
										?>
                                            <tr class="tr-shadow">
                                                
												
												<td><?php echo $row['product_name']?></td>
                                                <td>
                                                   <?php echo $row['sub_category_name']?>
                                                </td>
												<td>
                                                   <?php echo $row['description']?>
                                                </td>
												<td><?php echo $row['product_price']?></td>
												<td><?php echo $row['size']?></td>
												<td><?php echo $row['seller_name']?></td>
												
												
                                                <td>
                                                <a href="productdelete.php?id=<?php echo $id?>">
												<img src="1.png" height="25" width="25"/></a>
												
												
												<a href="productupdate.php ?id=<?php echo $row['product_id']?>&name=<?php echo $row['sub_category_name']?><?php echo $row['seller_name']?>">
												<img src="2.png" height="25" width="25"/></a>
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