<?php
include('conn.php');

$insdata = "insert into photos set photo ='General_Picture.jpg', created_on=NOW()";
mysql_query($insdata, $conn) or die(mysql_error());
$photoID = mysql_insert_id();

$redirecturl = "tune.php?photoID=".$photoID;
echo("<script> location.href='" . $redirecturl . "'</script>");
?>