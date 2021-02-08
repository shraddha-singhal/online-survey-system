<?php
include "connection.php";
?>

<?php
$name=$_GET['ques'];
mysqli_query($db,"DELETE from ques WHERE ques='".$name."'");
header("location:admin.php");
?>