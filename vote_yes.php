<?php
include "connection.php";
?>

<?php
$name=$_GET['ques'];
mysqli_query($db,"UPDATE ques SET yes=IFNULL(yes,0) + 1 where ques='".$name."'");
header("location:user.php");
?>





