<!DOCTYPE html>
<html>
<head>
	<title>Online Voting System</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1"> 

	<style type="text/css">
		nav{
    float: right;
    word-spacing: 30px;
    padding:20px;
}
nav li{
    display: inline-block;
    line-height: 70px;
}
	</style>
</head>
<body>
	 
	<div class="wrapper">
	    <header>
	    	<div class="logo">
	    		<img src="pictures/1.jpg" style="height: 100px">
	    		<h1 style="color:white;padding-left: 30px;font-size: 17px;">&nbsp&nbsp&nbsp&nbspONLINE VOTING SYSTEM</h1>
	    	</div>
	    	<nav>
	    		<ul>
	    			<li><a href="home.php">HOME</a></li>
	    			<li><a href="user_login.php">LOGIN</a></li>
	    			<li><a href="reg_user.php">REGISTRATION</a></li>
	    			<li><a href="feedback.php">FEEDBACK</a></li>
	    			
	    		</ul>
	    	</nav>	
	    </header>
	    <section>
	    	<div class="sec_image">
	    	<br><br><br>
		    <div class="box">
		    	<br><br><br><br>
		    	<h1 style="text-align: center;font-size: 35px;">Welcome to Voting System</h1>
		    	<h1 style="text-align: center;font-size: 25px;">Opens at 9:00 am</h1>
		    	<h1 style="text-align: center;font-size: 25px;">Closes at 17:00pm</h1><br>
		    </div>	
            </div>
	    </section>
	    <footer>
		
		    <p style="color: white;text-align: center;">
		    	<br>
		    	Email:&nbsp enquiry@geu.ac.in<br><br>
		    	Phone No:&nbsp 1800 270 1280
            </p>
	    </footer>	
    </div>
    <script type="text/javascript">
          var a= new Date();
          var t=a.getHours();
          if(!(t>=9 && t<=17))
          {
          	alert("System is closed");
          	window.location="error.php";
          }
        </script>
</body>
</html>