<!DOCTYPE html>
<?php
require_once("../config/dbconn.php");
session_start();
$usern = $pswd = $a = "";

	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["user"]))
		{
		$usern = "Name Is Mandatory";
		}
		else
		{
			$user = $_POST["user"];
		}
		if(empty($_POST["password"]))
		{
			$pswd = "Password Is Mandatory";
		}
		else
		{
			$password = $_POST["password"];
		}


		if(isset($_POST["user"]) && isset($_POST["password"]))
		{
			$username = $_POST["user"];
			$password = $_POST["password"];

			if($username !='' && $password !='' )
			{

				$query = "select * from user where
				email = '".$username."' and
				password='".$password."' and is_admin=1";

				$result = mysqli_query($conn,$query);

					if(mysqli_num_rows($result) == 1)
					{
						$row = mysqli_fetch_array($result);
						$_SESSION['email'] = $username;
						header("Location:index2.html");
					}
					else
					{
						header("Location:login.php?error=invalid username and password");
					}
			}
			else
			{
				echo "value is null";
			}
		}
		else
		{
			echo "null value";
		}
	}

?>
<style>
.error
{
	color:#FF0000;
}
</style>

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
    <title>Login</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo1.png" height="50px" width="200px" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
					
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="user" placeholder="Email">
									<span class="error"><?php echo $usern;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
									<span class="error"><?php echo $pswd;?></span>
                                </div>
                                <div class="login-checkbox">
                                  
                                    <label>
                                        <a href="forgetpassword.php">Forget Password?</a>
										 <a href="reset.php">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Reset Password?</a>
                                    </label>
                                </div>
								<?php
									if(isset($_GET['error']))
									{
										echo "<span style='color:red'>" .$_GET['error']."</span>";
									}
										?>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                               
                            </form>
                           
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

