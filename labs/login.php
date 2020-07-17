<?php

//lab 2 part 2
     include_once 'DBConnector.php';
     include_once 'User.php';


      if (isset($_POST['btn-login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $instance = User::create();
        $instance->setPassword($password);
        $instance->setUsername($username);

         if ($instance->isPasswordCorrect($username,$password)) {
            
            $instance->login();
            // $conn->closeDatabase();
            $instance->createUserSession($username);
        }

    }

    ?>

    <!doctype html>
<html lang="en">
<head>



   
    <title>Login</title>




    <style>
    
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" method="POST" name="login" id="login" action="<?= $_SERVER['PHP_SELF']?>">
    <div class="container">
    <div class="row">
    <div class="section"></div>
   <main>
    <center>

    
      <div class="section"><i class="mdi-alert-error red-text"></i></div>
      <h1>Login</h1>
  
            <div class='row'>
           
              <div class='input-field col s12'>
                <input class='validate' type="text" name='username' id='email' required />
                <label for='email'>Username</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col m12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Password</label>
              </div>
              <label style='float: right;'>
              <a><b style="color: #F5F5F5;">Forgot Password?</b></a>
              </label>
            </div>
            <br/>
            <center>
              <div class='row'>
                <!-- <button style="margin-left:65px;"  type='submit' name='btn_login' class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Login</button> -->
                <button name="btn-login"  style="margin-left:65px;" class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1' type="submit">Sign in</button>
                <!-- <button name="btn-login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
       
              </div>
            </center>
     
        </div>
       </div>
      </center>
      </main>
  
    </div>
</div>
         
    </form>


</body>
</html>