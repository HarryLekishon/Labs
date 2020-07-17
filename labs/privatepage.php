<?php
//lab 2 part 2
    //check if the session is set
     session_start();

     //if session is not set direct user to login page
     if(!isset($_SESSION['username'])){
     	header("location:login.php");
     }

     include_once "DBConnector.php";
    $con = new DBConnector();

    $username = $_SESSION['username'];

    $sql = "SELECT id FROM user WHERE username = '$username'";
    
    $res = mysqli_query($con->conn,$sql) or die("Error " .mysqli_error($con->conn));    
      
    while($row = $res->fetch_array()){
      $_SESSION['id'] = $row['id'];
    }
?>

<!doctype html>
<html lang="en">
  <head>

    <title>Private Page</title>



 <style>

    </style>

<!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Private Page</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="logout.php">Logout</a>
      </nav>
    </div>
  </header>

</div>
</body>