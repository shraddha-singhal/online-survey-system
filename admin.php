<?php
     include "connection.php";
      ?>   
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
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
	    		<h1 class="h1" style="color:white "> ADMIN PAGE</h1>
	    	</div>
	    	
	   
	    		<ul class="nav navbar-nav navbar-right">
	    		
	    		<li><a href="home.php"><span class="glyphicon glyphicon-log-out" style="font-size: 18px;"> LOGOUT</span></a></li>
	    			
	    		<ul>	
	    	</div>		
	    	</nav>	
	
    <section>
    	<div class="log_img3" style="margin-top:-20px;">
    		<br><br><br><br>
    	<div class="box3">
    <form action="" method="post" id="admin">
    	<h3>Question:</h3><br><input type="text" name="ques" id="admin" style="resize:none;color:black;height:60px;" rows="4" cols="30" required>&nbsp&nbsp
    	<button style="color:black;" type="submit" name="submit">Submit</button> <br><br><br> 

    </form>

	
    <br>
    <br>
    
    <?php
		$result=mysqli_query($db,"select * from ques");
	?>
    <table width="500" cellpadding="5" cellspacing="5" border="2" style="color:white;border-style: groove;border-color: white;border-width:5px;">
		<tr>
			<th>S.No</th>
			<th>Questions</th>
			<th>Yes</th>
			<th>No</th>
			<th>Delete</th>
		</tr>
		<?php $a=0; ?>
		<?php while($row=mysqli_fetch_array($result)):?>
			<tr>
				<td align="center"><?php $a=$a+1;echo $a?></td>
				<td><?php echo $row['ques']; ?>  </td>
				<td><?php echo $row['yes']; ?> </td>
				<td><?php echo $row['no']; ?> </td>
				<?php echo "<td><a href=\"delete.php?ques=".$row['ques']."\">Delete</a></td>"; ?>
			</tr>
		<?php endwhile; ?>
	</table>
	<?php
		$res=mysqli_query($db,"select * from feedback");
	?>
	<br><br>

	<table width="500" cellpadding="5" cellspacing="5" border="2" style="color:white;border-style: groove;border-color: white;border-width:5px;">
		<tr>
			<th align="center">S.No</th>
			<th>Suggestions</th>
		</tr>
		<?php $b=0; ?>
		<?php while($row2=mysqli_fetch_array($res)):?>
			<tr>
				<td align="center"><?php $b=$b+1;echo $b; ?></td>
				<td><?php echo $row2['suggestion']; ?>  </td>
			</tr>
		<?php endwhile; ?>
	</table>


    </div>
    </div>
    
    </section>
   
	
    
</body>
</html>
<?php
          if(isset($_POST['submit']))
          {
          	$val=($_POST['ques']);
          	mysqli_query($db,"INSERT INTO ques(ques)VALUES('$val')");
          	header("location:admin.php");
          	exit;
          	
          }
	?>

