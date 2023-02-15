<?php
$mysql_host="localhost";
$mysql_user="22mca035";
$mysql_password="2533";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
if(mysqli_select_db($conn,'22mca035'))
{echo 'connected';}
else{echo 'falied';}
?>
