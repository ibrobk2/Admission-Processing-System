<?php 
include("server.php");
$_SESSION['msg'] = "";
if(isset($_POST['login_btn'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	// query database
	$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	//saving the query as a result 
	//$result = $conn->query($sql);
	$result =  mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==1){

		header("location: admin.php");
	}else{

	 $_SESSION['msg'] = "invalid username/password";

	}
	
}




?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	
	
	
	</head>
	<body>
	<div class="container">
		<table width="1200">
			<tr>
				<td width="7%">
					<div class="header_img">
						<img src="images/hanifalogo.jpg" alt="School Logo" width="179" height="179"/>
		
					</div>
				</td>
				<td width="93%">	
					<div class="header_text">
						<h1><marquee behavior="scroll">Welcome to Abu-Hanifa e-Admission Processing System</marquee></strong></h1>
						<h2>111 Sani Mainagge Gwale Local Government</h2>
						<h3>Kano State.</h3>
					</div>
				</td>
			</tr>
		</table>
						<h3 style="text-align: center; color: #ff0000;"><?php echo $_SESSION['msg']; ?></h3>
		<div class="login_form">
			<h3 style="color: #32B4C7;;">Admin Login</h3>
			<img src="icons/user.svg" alt="User Logo" width="20%" id="userlogo">
			<form action="LOG.PHP" method="post">
			
				<input type="text" name="username" placeholder="Enter Your Username">
				
				<br/><br/>
			
				<input type="password" name="password" placeholder="Enter Your Password">
				<br/><br/>
				<button name="login_btn" id="login_btn">Login</button>
			
			</form>
			</div>
		</body>
</html>