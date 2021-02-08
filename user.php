<?php
     include "connection.php";
      ?>   
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<style type="text/css">
	section{
		margin-top: 0px;
	}
</style>	
</head>
<body>
	<nav class="navbar navbar-inverse" style="height: 100px;">
    <div class="container-fluid">
  	<div class="navbar-header ">
	    		<a class="navbar-brand active">ONLINE VOTING SYSTEM</a>
	    		<h1 class="h1" style="color:white; text-align: center; "> USER PAGE</h1>
	    	</div>
	    	
	    		
	    		<ul class="nav navbar-nav navbar-right">
	    		
	    		<li><a href="home.php"><span class="glyphicon glyphicon-log-out" style="font-size: 18px;"> LOGOUT</span></a></li>
	    			
	    		<ul>	
	    	</div>		
	    	</nav>	
	
	
    <section>
    	<div class="log_img3" style="margin-top: -20px;">
    		<br><br><br><br>
    	<div class="box3">
	
    <br>
    <br>
    
    <?php
		$result=mysqli_query($db,"select * from ques");
	?>
    <table width="500" cellpadding="5" cellspacing="5" border="2" style="color:white;border-style: groove;border-color: white;border-width:5px;">
		<tr>
			<th>Questions</th>
			<th>Yes</th>
			<th>No</th>
		</tr>
		<?php while($row=mysqli_fetch_array($result)):?>
			<tr>
				<td><?php echo $row['ques']; ?>  </td>
				<?php echo "<td><a href=\"vote_yes.php?ques=".$row['ques']."\">Yes</a></td>"; ?>
				<?php echo "<td><a href=\"vote_no.php?ques=".$row['ques']."\">No</a></td>"; ?>
			</tr>
		<?php endwhile; ?>
	</table>
    </div>
    </div>
    
    </section>
       
</body>
</html>
