<?php
  include "connection.php";
  include "navbar.php";
?>  
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
	<!--<header><br><br>
		<h1 style="text-align: center;color: white; font-size: 50px;">Feedback</h1>
	</header>-->
	<section id="im" style="margin-top: -20px;">
		<br><br><br><br>
		<div class="box4">
			<form action="" method="POST">
			<h1
			<p style="font-size: 20px;">Do you like the website?</p><br>
			<input type="radio" name="b" value="yes" id="abc">YES&nbsp&nbsp&nbsp
			<input type="radio" name="b" value="no">NO<br>
			<br><br>
			<p style="font-size: 20px;">Did we meet your expectations?</p><br>
			<input type="radio" name="p" value="yes">YES&nbsp&nbsp&nbsp
			<input type="radio" name="p" value="no">NO<br>
			<br><br>
			<p style="font-size: 20px;">Rate your experience:</p><br>
			<input type="radio" name="a" value="verygood">Very Good&nbsp&nbsp&nbsp
			<input type="radio" name="a" value="good">Good&nbsp&nbsp&nbsp
			<input type="radio" name="a" value="average">Average&nbsp&nbsp&nbsp
			<input type="radio" name="a" value="poor">Poor<br>
			<br><br>
			<p style="font-size: 20px;">Would you like to visit our website again?</p><br>
			<input type="radio" name="y" value="yes">YES&nbsp&nbsp&nbsp
			<input type="radio" name="y" value="no">NO
			<br><br>
			
				<h3 style="font-size: 25px;">Any Suggestion</h3><br><br>
				<input type="text" name="suggestion" style="width:250px;height:50px; color: black;">&nbsp&nbsp
				<input class="btn btn-default" type="submit" name="submit" value="Submit" style="color: black; width: 70px; height: 30px">
          
			</form>
		</div>
		
	</section>

	    <?php

	        if(isset($_POST['submit']))
	        {
			$b=($_POST['b']);
			$p=($_POST['p']);
			$a=($_POST['a']);
			$y=($_POST['y']);
	        	$suggestion=($_POST['suggestion']);
	        	mysqli_query($db,"INSERT INTO feedback(c1,c2,c3,c4,suggestion)VALUES('$b','$p','$a','$y','$suggestion')");
	        	header("location:feedback.php");


	        }


	        
	     ?> 
	      

</body>
</html>
