<?php
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
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
        
          
          <ul class="nav navbar-nav navbar-right">
          <li><a href="home.php"><span class="glyphicon glyphicon-home"> HOME</span></a></li>
          <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            
          <ul>  
        </div>    
        </nav>  
  <section>
    <div class="reg_img">
      <div class="box2">
        <h1 style="text-align:center;font-size: 30px;font-family: lucida console;padding-left: 40px;">User Registration Form</h1>
        <form name="login" action="" method="post" style="text-align: center;">
          <div class="login1">
          <h2 style="text-align: center;color: white;font-size: 25px;">Enter Firstname:</h2>
          <input class="form-control" type="text" name="f_name" placeholder="First Name" required="">
          <h2 style="text-align: center;color: white;font-size: 25px;">Enter Lastname:</h2>
          <input class="form-control" type="text" name="l_name" placeholder="Last name" required="">
          <h2 style="text-align: center;color: white;font-size: 25px;">Enter Username:</h2>
          <input class="form-control" type="text" name="user" placeholder="Username" required="">
          <h2 style="text-align: center;color: white;font-size: 25px;">Enter Password:</h2>
          <input class="form-control" type="password" name="pass" placeholder="Password" required="">
          <h2 style="text-align: center;color: white;font-size: 25px;">Enter University RollNo:</h2>
          <input class="form-control" type="text" name="roll" placeholder="Roll No" required="">
          <h2 style="text-align: center;color: white;font-size: 25px;">Enter Email Id:</h2>
          <input class="form-control" type="text" name="email" placeholder="Email Id" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px">
          
          </div>
        </form>
        
       

        <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data" style="margin: -20px 20px 500px 350px;">
                    <fieldset>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>


      </div>  
    </div>
  </section> 

      <?php

          if(isset($_POST['submit']))
          {
             $count=0;
             $sql="SELECT user from reg_data";
             $res=mysqli_query($db,$sql);

             while($row=mysqli_fetch_assoc($res))
             {
               if($row['user']==$_POST['user'])
               {
                $count=$count+1;
               }
             }
            if($count==0) 

           {$f_name=($_POST['f_name']);
            $l_name=($_POST['l_name']);
            $user=($_POST['user']);
            $pass=($_POST['pass']);
            $roll=($_POST['roll']);
            $email=($_POST['email']);
            

            mysqli_query($db,"INSERT INTO reg_data (f_name,l_name,user,pass,roll,email)VALUES('$f_name','$l_name','$user','$pass','$roll','$email')");
        ?>
        <script type="text/javascript">
          alert("Registration Successful");
        </script>
        <?php       
        }
        else{

              ?>
        <script type="text/javascript">
          alert("The username exist");
        </script>
        <?php 
          }
        }
      ?>    
</body>
</html>