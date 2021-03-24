<!DOCTYPE html>
<?php
session_start();
include("header1.php");
?>
<?php 
include("../config/dbconn.php");

$id=$_SESSION['email'];
$sql = "select * from user u join area a where u.area_id = a.area_id and email = '".$id."'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$uid = $row['u_id'];
?>

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
                                        <strong>update</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                           <div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Area Name</label>
											<div class="col-sm-8">
											<select name="t2" class="form-control">
											
												<?php
													$sql1="select * from area";											
													$result1=mysqli_query($conn,$sql1);
													while($row1=mysqli_fetch_array($result1))
													{
													?>
													<option value="<?php echo $row1['area_id'];?>">
													<?php echo $row1['area_name'];?>
													</option>
													<?php 
													}
													?>
												</select>
												</div>
											
										</div>
										
                                            <div class="form-group">
                                                
                                                    <label for="focusedinput" class="col-sm-2 control-label">User Name</label>
													<div class="col-sm-8">
													<input type="text" name="txtname" class="form-control"  placeholder="user name" value="<?php echo $row['u_name']?>">
													</div>
                                                </div>
												 <div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Address</label>
													<div class="col-sm-8">
													<input type="text" name="txtadd" class="form-control"  placeholder="address" value="<?php echo $row['address']?>">
													</div>
                                                </div>
												 <div class="form-group">
                                                
                                                    <label for="focusedinput" class="col-sm-2 control-label">Email</label>
													<div class="col-sm-8">
													<input type="text" name="txtemail" class="form-control"  placeholder="email" value="<?php echo $row['email']?>">
													</div>
                                                </div>
												 <div class="form-group">
                                                
                                                    <label for="focusedinput" class="col-sm-2 control-label">Passowrd</label>
													<div class="col-sm-8">
													<input type="password" name="txtpass" class="form-control"  placeholder="password" value="<?php echo $row['password']?>">
													</div>
                                                </div>
												<div class="form-group">
                                                
                                                   <label for="focusedinput" class="col-sm-2 control-label">Contact no</label>
													<div class="col-sm-8">
													<input type="text" name="txtno" class="form-control"  placeholder="contact no" value="<?php echo $row['contact_no']?>">
													</div>
                                                </div>
												<!-- <div class="form-group">
                                                
                                                   <label for="focusedinput" class="col-sm-2 control-label">Birth date</label>
													<div class="col-sm-8">
													<input type="date" name="txtdate" class="form-control"  placeholder="birth date" value="<?php echo $row['birth_date']?>">
													</div>
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
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST["t2"]) && isset($_POST["txtname"]) && isset($_POST["txtadd"]) && isset($_POST["txtemail"]) && isset($_POST["txtpass"]) && isset($_POST["txtno"]) )
{
	$area_id =$_POST["t2"];
	$name = $_POST["txtname"];
	$address = $_POST["txtadd"];
	$email = $_POST["txtemail"];
	$password = $_POST["txtpass"];
	$contact =$_POST["txtno"];
	
	
	
	if ($area_id!='' && $name!='' && $address!='' && $email!='' && $password!='' && $contact!='' )
	{
		$sql = "update user set area_id='".$area_id."' ,u_name='".$name."' ,address='".$address."' ,email='".$email."' ,password='".$password."',contact_no='".$contact."'	where email = '".$id."' ";
		$result = mysqli_query($conn,$sql);
		

		if ($result)
		{
			echo "<meta http-equiv='refresh' content='3;url=index.php'>";
		}
	}
	else
	{
		echo "value is null";
	}
}
else
{
	echo "value not set";
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