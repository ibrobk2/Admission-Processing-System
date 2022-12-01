<?php 



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Abu Hanifa: e-Admission Processing System</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css" type="text/css">
		

		<style type="text/css">
			.header_text{font-weight: 600;}

			li{
				list-style: none;
			}
			
			a.start.x{background-color: #1AA15F;}
			a.start.y{background-color: #DD4f42;}
			a.start.z{background-color: #FFCD41;}
			a.start.z1{background-color: #00f0ff;}


			a.start{
			display: inline-block;
			color:#fff;
			background-color: #f4f4f4;
			border: 3px solid #ccc;
			padding: 90px 100px;
			border-radius: 5px;
			text-align: center;
			font-size: 18x;
			margin-left:0px;
			
		}
			a.start:hover{
			background-color: #101010;
			color:#fff;
		}
		hr{
			color:#fff;
			border-color: #fff;
			border-width: 4px;
		}
		.row{
			text-align:center;
		margin-left:0px;
		}
		.x,.y,.z{font-weight: 600;}

		</style>
	
	
	
	</head>
	<body>
	<div class="container">
		<table width="1200">
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
			<br />
		<table width= "1200" style="margin-left: 250px;" >
			<tr>
				<td>
					<ul id="nav">
						<li style="padding-right:2px; padding-left: 2px; "><a href="index.php" class="start">Home</a></li>
						
						<li style="padding-right:2px; padding-left: 2px; "><a href="#" class="start">News</a></li>
						<li style="padding-right:2px; padding-left: 2px; "><a href="#" class="start">Staff</a></li>
						<li style="padding-right:2px; padding-left: 2px; "><a href="#" class="start">Gallery</a></li>
						<li style="padding-right:2px; padding-left: 2px; "><a href="about.php" class="start">About</a></li>
						
				
					</ul>
				</td>
			</tr>
			</table>
					<br>
					<hr />
						<h2 style="text-align:center; color:#fff; font-weight: 600;">Admin Panel</h2>
					<hr />
			<div class="row">
						<a href="add.php" class="start col-md-4 x">Add Question</a>
						<a href="delete.php" class="start col-md-4 y">Delete Question</a>
					<a href="view.php" class="start col-md-4 z">View / Edit Record</a>
					<!--<a href="#" class="start col-md-4 z1"> Edit Record</a>-->
						
								
			</div>
		</div>
		<hr />
		<hr />
	</body>

</html>