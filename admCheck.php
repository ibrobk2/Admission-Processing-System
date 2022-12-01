<?php include("student_login.php"); ?>
<?php 

		
if(isset($_SESSION['username'])){
		$_SESSION['username'] = $username;
		//check if the user already exist
		$query = "SELECT * FROM user WHERE username = '$username'";
		//run query
		$result = mysqli_query($conn,$query);

   
    if( $row = mysqli_fetch_assoc($result)){
    		$_SESSION['category'] = $row['category'];
    		$age = date("Y-F-d")-$row['dob'];
        if( $_SESSION['category']=="nusery"){
        	
            if($age<4){
               
                $sql = "UPDATE user SET   admstatus = 'notAdmitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
            } else{
              
                $sql = "UPDATE user SET    admstatus = 'Admitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
            }
        }
        //test for eligibility for admission into primary

        if( $_SESSION['category']=="primary"){
            if($age<6){
               
                $sql = "UPDATE user SET   admstatus = 'notAdmitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
            } else{
              
                $sql = "UPDATE user SET  admstatus = 'Admitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
            }
        }

         //test for eligibility for admission into secondary

         if( $_SESSION['category']=="secondary"){
            if($age<12){
               
                $sql = "UPDATE user SET admstatus = 'notAdmitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
            } else{
              
                $sql = "UPDATE user SET admstatus = 'Admitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
            }
        }


    }
}

?>