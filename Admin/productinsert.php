<!DOCTYPE html>
<?php
include("header1.php");
?>
<?php
	require_once('../config/dbconn.php');
	$sql3="select * from category";
	$result3 = mysqli_query($conn,$sql3);
	$sql1="select * from subcategory";
	$result1 = mysqli_query($conn,$sql1);
	/*$sql2="select * from seller";
	$result2 = mysqli_query($conn,$sql2);*/
	
	
?>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function getsubcategory(val)
{
	$.ajax({
		type:"POST",
		url: "getsubcategory.php",
		data:'cid='+val,
		success: function(data){
			$("#sublist").html(data);

		}
	});
}
</script>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Insert Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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

<body class="animsition" style="padding-left:300px">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                                
                            </div>
                            <div class="col-lg-12">
                                
                                
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>insert</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="hf-email" class=" form-control-label">category name</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                <select name="t1" class="form-control" onchange="getsubcategory(this.value);">
												
												<?php
													$sql3="select * from category";
													$result3=mysqli_query($conn,$sql3);
													
													while($row3=mysqli_fetch_array($result3))
													{
														
												?>
													<option value="<?php echo $row3['cat_id'];?>"> 
													<?php echo $row3['cat_name'];?>
													</option>
													<?php
													}
													?>
												</select>
                                                </div>
												
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-2">
                                                    <label for="hf-email" class=" form-control-label">sub category name</label>
                                                </div>
                                                <div class="col-12 col-md-10">
                                                <select name="t2" class="form-control" id="sublist">
												

												</select>
                                                </div>
												
                                            </div>
											<!--<div class="row form-group">
											<div class="col col-md-2">
                                                    <label for="hf-email" class=" form-control-label">seller name</label>
                                                </div>
											<div class="col-12 col-md-10">
                                                <select name="t3" class="form-control">

												<?php /*
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
												*/	?>
												</select>
                                            </div>
												
											 </div> -->
                                           
                                            <div class="row form-group">
                                                
                                                    <label for="hf-password" class=" form-control-label">Service name</label>
													<input type="text" name="txtname" class="form-control" id="exampleinputemail" placeholder="ser name">
                                                </div>
												 <div class="row form-group">
                                                
                                                    <label for="hf-password" class=" form-control-label">description</label>
													<input type="text" name="txtdesc" class="form-control" id="exampleinputemail" placeholder="ser description">
                                                </div>
												 <div class="row form-group">
                                                
                                                    <label for="hf-password" class=" form-control-label">Service price</label>
													<input type="text" name="txtpri" class="form-control" id="exampleinputemail" placeholder="ser price">
                                                </div>
												 <!-- <div class="row form-group">
                                                
                                                    <label for="hf-password" class=" form-control-label">size</label>
													<input type="text" name="txtsize" class="form-control" id="exampleinputemail" placeholder="sub size">
                                                </div> -->
                                                
                                            </div>
											 <div class="card-footer" >
                                        <button type="submit" class="btn btn-primary btn-sm" method="POST">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                       
                                    </div>
                                        </form>
                                    </div>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST["txtname"]) && ($_POST["txtdesc"]) && ($_POST["txtpri"])  && ($_POST["t2"]))
		{
			
			
			$txtname=$_POST["txtname"];
			$txtdesc=$_POST["txtdesc"];
			$txtpri=$_POST["txtpri"];
			$t2=$_POST["t2"];
			
			
		
			
			if($txtname!='' && $txtdesc!='' && $txtpri!='' && $t2!='' )
			{
				$sql="insert into service(ser_name,ser_desc,ser_price,subcat_id)
				values('".$txtname."','".$txtdesc."','".$txtpri."','".$t2."')";
				
				$result=mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=productselect.php'>";
				}
			}
			
		}
		else
		{
			echo"value not set";
		}
	}
?>
                                   
                                </div>
                                
                                
                                
                            </div>
                
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
include('footer.php'); 
?>