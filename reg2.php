<?php

$conn =  mysqli_connect("localhost", "root", "", "login2");



if(isset($_POST['regBtn'])){
  $username = $_POST['username'];
  $name = $_POST['name'] ;
  $password = $_POST['password'];

    mysqli_query($conn,"INSERT INTO user(name, username, password) VALUES('$name', '$username', '$password')");
 

} 

?>

<!--HtML codes here -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Registration Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" ">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .btn{
        border:4px solid #f4f4f4;
        width: 20%;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="reg2.php">
  <img src="scan.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="username" class="sr-only">Username</label>
  <input type="text" id="inputEmail" name="username" class="form-control btn" placeholder="Username" required autofocus>
  <label for="name" class="sr-only">Name</label>
  <input type="text" id="name" name="name" class="form-control btn" placeholder="Name" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control btn" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary name="regBtn" btn-block" type="submit">Register</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
</body>
</html>
