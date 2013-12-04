<?php
global $conn;

$conn = mysql_connect("localhost", "root", "integricityb!qwerty") or die(mysql_error());
mysql_select_db("xmas", $conn) or die(mysql_error());
?>