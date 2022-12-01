<?php 



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	
	
	
	</head>
	<body>
	<div class="container">
		<table width="1200" border="1">
			<tr>
				<td width="7%">
					<div class="header_img">
						<img src="images/badge.jpg" alt="School Logo" width="179" height="179"/>
		
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
			<table width= "1200" >
			<tr>
				<td class="nav"><h3><a href="index.php">Home</a></h3></td>
				<td class="nav"><h3><a href="register.php">Register</a></h3></td>
				<td class="nav"><h3><a href="#">Admin Section</a></h3></td>
				<td class="nav"><h3><a href="#">About</a></h3></td>
							
			</tr>
			</table>
			<div class="login_form">
			<h2 style="color: #fff;">Please Login</h2>
			<form action="login.php" method="post">
			
				<input type="text" name="username" placeholder="Enter Your Username">
				
				<br/><br/>
			
				<input type="password" name="password" placeholder="Enter Your Password">
				<br/><br/>
				<button name="login_btn" id="login_btn">Login</button>
			
			</form>
			</div>
			
		
			
		
	</div>
	</body>

</html>