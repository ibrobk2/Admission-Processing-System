<?php session_start(); ?>
<!-- Include a connnection to the database file "dbprocess.php" -->
<?php include("dbprocess.php"); ?>

<?php 
if(isset($_SESSION['username'])){

    $username = $_SESSION['username'];

//create a query
    $sql = "SELECT * FROM user WHERE username = '$username' ";
// run the query
    $result = mysqli_query($conn, $sql);
    //$result = $conn->query($sql);
   
    if( $row = mysqli_fetch_assoc($result)){

        $_SESSION['fname'] =  $row['firstName'];
         
       
        $_SESSION['lname'] =  $row['surName'];
        $_SESSION['category'] =  $row['category'];
        $_SESSION['admStatus'] =  $row['admstatus'];
        
        $_SESSION['class'] =  $row['class'];
        $_SESSION['dob'] =  $row['dob'];

        $_SESSION['mname'] =  $row['middleName'];
       
        $_SESSION['id'] =  $row['id'];
        // $_SESSION['testscore'] =  $row['testscore'];

         //$perScore = $_SESSION['testscore']/$_SESSION['total']*100;

        $xyz = $_SESSION['id'] + 2019;
        $sql1 ="UPDATE user SET admNumber = '$xyz'";
        //run the query
        $adm = mysqli_query($conn, $sql1);
        $_SESSION['admNo'] =  $xyz;

        $id = $_SESSION['id'];
        //creating age variable based on dob in the database
        $age = date("Y-F-d")-$_SESSION['dob'];

        //test for eligibility for admission into nursery
        if( $_SESSION['category']=="nusery"){
            if($age<4){
               
                $sql = "UPDATE user SET  class = 'nursery 1',  admstatus = 'notAdmitted' WHERE id = '$id' ";
                mysqli_query($conn, $sql);
            } else{
              
                $sql = "UPDATE user SET  class = 'nursery 1',  admstatus = 'Admitted' WHERE id = '$id' ";
                mysqli_query($conn, $sql);
            }
        }
        //test for eligibility for admission into primary

        if( $_SESSION['category']=="primary"){
            if($age<6){
               
                $sql = "UPDATE user SET  class = 'primary 1',  admstatus = 'notAdmitted' WHERE id = '$id' ";
                mysqli_query($conn, $sql);
            } else{
              
                $sql = "UPDATE user SET  class = 'primary 1',  admstatus = 'Admitted' WHERE id = '$id' ";
                mysqli_query($conn, $sql);
            }
        }

         //test for eligibility for admission into secondary

         if( $_SESSION['category']=="secondary"){
            if($age<12){
               
                $sql = "UPDATE user SET  class = 'JSS 1',  admstatus = 'notAdmitted' WHERE id = '$id' ";
                mysqli_query($conn, $sql);
            } else{
              
                $sql = "UPDATE user SET  class = 'JSS 1',  admstatus = 'Admitted' WHERE id = '$id' ";
                mysqli_query($conn, $sql);
            }
        }


    }

   
}

?>


<html>
    <head>
        <title>Admission Letter</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style>
        .container{
            background-image: url("images/watermark.png");
        }
            *{
                margin-left:50px;
                margin-right:50px;
                margin-top:0px;
            }
            .head{
                text-align:center;
                color:#0069d9;
            }
            hr{
                border: 3px solid #a4a4a4;
            }
            
            .sign{
                text-align: center;
                margin-left: 620px;
            }
            div.btn1{
                text-align:center;
            }
            .btn{
                cursor:pointer;
            }
            .zz{
                margin-top:10px;
                display: inline-block;
            }
        </style>
    
    </head>
    <body>
    <div class="container" id="printable">
        <div class="row zz">
            <div class="img col-md-1 img-responsive"><img src="images/hanifalogo.jpg" width="50px"height="40px" /></div>
            <div class="head col-md-9">
             <h2> ABU-HANIFA COLLEGE</h2>
             <h3>NO. 111 SANI MAI NAGGE SABON-TITI, GWALE LOCAL GOVT. 
             KANO STATE.</h3>
            </div>
        </div>
       
        <div class="row"><b>
          <div class="col-md-6 x">  <?php  echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; echo " "; echo $_SESSION['mname']; ?>	</div>						
           <div lass="col-md-6 y"> <?php echo "Admission Number:". $_SESSION['admNo']; ?></div>
           </b>
        </div>
        <hr>
        <h2 style="text-align:center; font-family: verdana, sans-serif; color:green">PROVISIONAL OFFER OF ADMISSION</h2>
       <p> Following your application for admission into Abu-Hanifa College, I am pleased to offer you a provisional admission into <?php echo $_SESSION['class']; ?>. The offer of admission is made subject to fulfilling the following conditions.<br>
    
       <ol type="a">
           <li> The information provided on your application is correct in every respect.</li>
	       <li> You are found physically and mentally fit.</li>
	       <li> You do not alter or change your name after registration.</li>
	       <li> You are not allowed to undergo two different classes in the college.</li>
           <li>This is offer is NOT transferable to any other person.</li>
        </ol>
        </p>
        <div class="sign">
        <p >Yours faithfully,</p>
        <img src="images/sign.jpg" alt="Signature" width="90px" height="60px"/>
        <h4>Principal/Head Teacher<br>
        Abu-Hanifa College Kano.</h4>
         </div>
    </div>
        <hr/>
        <div class="btn1">
        <button class="btn btn-primary" onClick = 'printPage()' >Print Admission Letter</button>
         </div>
    </body>
   

</html>

<?php// $age = date("Y-F-d")-$_SESSION['dob']; echo $age;?>

<script>
    function printPage(){
        window.print();
    }

</script>