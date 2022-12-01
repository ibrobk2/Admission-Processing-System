<?php session_start(); ?>
<!-- Include a connnection to the database file "dbprocess.php" -->
<?php include("dbprocess.php"); ?>


<?php 

//Check if submit button is clicked
if(isset($_POST['submit_btn'])){
	//Creating variables
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$middlename = $_POST['middlename'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$state = $_POST['state'];
	$lga = $_POST['lga'];
	$class = $_POST['class'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_1 = $_POST['password_1'];

	//Creating session variables
	$_SESSION['fname'] = $firstname; 
	$_SESSION['username'] = $username;
	$_SESSION['lname'] = $surname;
	$_SESSION['mname'] = $middlename;
	

	//Below variables not needed here
	//$category = $_POST['category'];
	/*
	$score = $_POST['score'];
	$status = $_POST['status'];
	$category = $_POST['category'];
	$admNo = $_POST['admNo'];
	
	*/
	//Authenticating Password Match (i.e password and confirmation password fields)
	if($password!=$password_1){
		?>
		<script>
			alert("Sorry!, the Passwords you entered Mismatch");
		</script>
		<?php
		
	}else{
	
// Create a query
	$query = "INSERT INTO user(firstName, surName, middleName, dob, gender, address, phoneNumber, state, lga, class, username, password, confirmPass) 
	VALUES('$firstname', '$surname', '$middlename', '$dob', '$gender', '$address', '$phone', '$state', '$lga', '$class', '$username', '$password', '$password_1')";

//Run the query
	//mysqli_query($conn, $query);
	$conn->query($query);

	//redirect the student to exam app
	header("Location: exam_login.php");
	}
}


	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Transfer Student Registration Page</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	<style type="text/css">
		.lbl{
			color:#606060;
		}
	
	</style>
	
	
	</head>
	<body>
	<div class="container">
		<table width="1200" >
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
		<table width= "1200" style="margin-left: 350px;" >
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
				<h2 style="text-align:center; color:#fff;">Transfer Student Registration Form</h2>
<div class="login_form">
  <br>
<form action="transferReg.php" method="POST">
			
			
       
		
   	</select>
          
                            
          

          <input name="firstname" type="text" size="30" placeholder="Firstname" required/>
   
          <input name="surname" type="text" size="30" placeholder="Surname" required/>

          <input name="middlename" type="text" size="30" placeholder="Middlename"/>
		  
		  <input name="dob" type="date" size="30" maxlength="6" placeholder="mm/dd/yyyy" required />
		<br>
            <label class="lbl">Male</label><input type="radio" name="gender" value="male" style="width:50px;">
            <label class="lbl">Female</label><input type="radio" name="gender" value="female" style="width:50px;">
         <br>
          <input name="address" type="text" size="30" placeholder="Address" required/>

          <input name="phone" type="number" size="30" placeholder="Guardian Phone Number" required/>
          
        
           
        <!--
			
		         
          <select name="select5" style="width: 50%; height: 50px;">
				  <option>---select class---</option>
					<option name="" value">JSS 1</option>
					<option name="" value">JSS 2</option>
					<option name="" value">JSS 3</option>
					<option name="" value">SS 1</option>
					<option name="" value">SS 2</option>
					<option name="" value">SS 3</option>        
       		</select>

        <br>
			-->
         <!-- 
         <input name="ReceiptNo" type="text" size="30" maxlength="6"  placeholder="Receipt No"/><br>

       --><br>
         
        
	   <div class="dd_menu">
          <select name="state" style="width: 50%; height: 50px;" required>
          <option value="not selected">---State of Origin---</option>
          <option value="Abia">Abia</option>
          <option value="Adamawa">Adamawa</option>
          <option value="Akwa Ibom">Akwa Ibom</option>
          <option value="Anambra">Anambra</option>
          <option value="Bauchi">Bauchi</option>
          <option value="Bayelsa">Bayelsa</option>
          <option value="Benue">Benue</option>
          <option value="Borno">Borno</option>
          <option value="CrossRiver">Cross River</option>
          <option value="Delta">Delta</option>
          <option value="Ebonyi">Ebonyi</option>
          <option value="Edo">Edo</option>
          <option value="Ekiti">Ekiti</option>
          <option value="Enugu">Enugu</option>
          <option value="FCT">FCT</option>
          <option value="Gombe">Gombe</option>
          <option value="Imo">Imo</option>
          <option value="Jigawa">Jigawa</option>
          <option value="Kaduna">Kaduna</option>
          <option value="Kano">Kano</option>
          <option value="Katsina">Katsina</option>
          <option value="Kebbi">Kebbi</option>
          <option value="Kogi">Kogi</option>
          <option value="Kwara">Kwara</option>
          <option value="Lagos">Lagos</option>
          <option value="Nassarawa">Nassarawa</option>
          <option value="Niger">Niger</option>
          <option value="Ogun">Ogun</option>
          <option value="Ondo">Ondo</option>
          <option value="Osun">Osun</option>
          <option value="Oyo">Oyo</option>
          <option value="Plateau">Plateau</option>
          <option value="Rivers">Rivers</option>
          <option value="Sokoto">Sokoto</option>
          <option value="Taraba">Taraba</option>
          <option value="Yobe">Yobe</option>
          <option value="Zamfara">Zamfara</option>
        </select>
      </div>
      <br>
	  
		<input name="lga" type="text" size="30" placeholder="Local Government Area" required/>
		
		<select name="class" style="width: 50%; height: 50px;" required>
				  <option>---select previous class---</option>
					<option  value="jss1">JSS 1</option>
					<option  value="jss2">JSS 2</option>
					<option  value="jss3">JSS 3</option>
					<option  value="ss1">SS 1</option>
					<option  value="ss2">SS 2</option>
					<option  value="ss3">SS 3</option>
					        
       		</select>

        <br>
		
		<input name="username" type="text" size="30" placeholder="Username" required/>


		<input name="password" type="password" size="30" placeholder="Password" required/>
        <input name="password_1" type="password" size="30" placeholder="Comfirm Password" required/>
		
				
			
       
         <br>
		  <button name="submit_btn" id="login_btn">Submit</button>
        </form>
      </div>
    
 <br>
  <footer class="foot">
  
    &copyDesign by ABDULLAHI ISHAQ. All rights Reserved 2019 
  </footer>
 

		

</body>

</html>

