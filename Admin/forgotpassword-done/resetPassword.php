<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
session_start();

require_once("../config/connection.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	$id=$_SESSION['id'];
	$otp = $_POST['otp'];
	$nPass = $_POST['newpassword'];
	$cPass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update user set otpused = 1, 
	password = '".$nPass."' where email='".$id."' and 
	otp = '".$otp."'";
	
	echo $query;
	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='login.php';
					</script>";
	
	
	}
	
}
?>

<head>
<title>Ancient Antiquity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Reset Password</h2>
				</div>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
					<input type="text" name="otp" value="OTP" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'OTP';}">
					<input type="password" name="newpassword" value="New Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<input type="password" name="cpassword" value="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Repassword';}">
					
					<input type="submit" class="register" value="Submit">
				</form>
				
				
					<div class="clearfix"> </div>
				</div>
			
			</div>
			
		
		</div>
	<script src="js/proton.js"></script>
</body>
</html>
