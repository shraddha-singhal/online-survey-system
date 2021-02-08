<?php

    $db=mysqli_connect("localhost","root","","voting");


  if(!$db)
  {
  	die("Connection failed: " . mysqli_connect_error());
  }  

  

?>