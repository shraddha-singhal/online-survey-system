<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<style type="text/css">
  section{
    margin-top: -20px;
  }
</style>  
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header ">
          <a class="navbar-brand active">ONLINE VOTING SYSTEM</a>
        </div>
        
          <ul class="nav navbar-nav">
            <li><a href="home.php">HOME</a></li>
            <li><a href="admin_login.php">ADMIN_LOGIN</a></li>
            <li><a href="user_login.php">USER_LOGIN</a></li>
           <!-- <li><a href="reg_user.html">SIGN_UP</a></li>-->
           </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
          <li><a href="home.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            <li><a href="reg_user.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
          <ul>  
        </div>    
        </nav>  
  
  
  <section>
    <div class="log_img">
      <br>
      <div class="box1">
        <h1 style="text-align: center;font-size: 35px;font-family: lucida console;">Admin Login Form</h1>
        <form name="login" action="" method="post" style="text-align: center;">
          <div class="login">
          <h2 style="text-align: center;color: white;font-size: 30px;">Enter username:</h2>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""
          >
          <h2 style="text-align: center;color: white;font-size: 30px;">Enter password:</h2>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
          <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
          </div>
        
        <p style="color: white;padding-left: 15px;">
          <br>
          <a style="color: white;" href="">Forgot Password?</a><br><br>
          New to this website?<a style="color:white " href="reg_user.php">Sign Up</a>
        </p>
        </form>
      </div>  
    </div>
  </section>
   <?php
     
       if(isset($_POST['submit']))
       {
        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `reg_data` WHERE user='$_POST[username]' AND pass='$_POST[password]';");
        $count=mysqli_num_rows($res);


        if($count == 0)
        {
    ?>
          <script type="text/javascript"> 
            window.alert("The username and password doesn't match");
          </script>
       <?php
        }
        else
        {
       ?>
            <script type="text/javascript">
              window.location="admin.php";

            </script>
    <?php
        }

       }

    ?>

</body>
</html>