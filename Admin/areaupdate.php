<!DOCTYPE html>
<?php
include("header1.php");
?>
<?php
	require_once('../config/dbconn.php');
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "select * from area where area_id = $id";
		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	}
	
	
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
                                        <strong>insert</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                
                                                    <label for="hf-password" class=" form-control-label">area name</label>
													<input type="text" name="txtname" class="form-control" id="exampleinputemail" placeholder="sub name" value="<?php echo $row['area_name'];?>">
                                                </div>
												 <div class="row form-group">
                                                
                                                    <label for="hf-password" class=" form-control-label">area id</label>
													<input type="text" name="txtid" class="form-control" id="exampleinputemail" placeholder="sub code" value="<?php echo $row['area_id'];?>">
                                                </div>
                                                
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
		if (isset($_POST["txtname"]) && isset($_POST["txtid"]))
		{
			$area_name=$_POST["txtname"];
			$area_id=$_POST["txtid"];
		
				
			if(($area_name!='') && ($area_id!=''))
			{				
				$sql="update area set area_name='".$area_name."',area_id='".$area_id."' where area_id = '".$id."'";
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=areaselect.php'>";

				}
			}
			else
			{
					echo "Value is null";
			}
		}
		else
		{
				echo "Value not set";
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