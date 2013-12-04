<?php
/* JPEGCam Test Script */
/* Receives JPEG webcam submission and saves to local file. */
/* Make sure your directory has permission to write files as your web server user! */

include('conn.php');

$filename = date('YmdHis') . '.jpg';
//$photoid = $_GET['photoid'];
//$filename = $photoid.'_back.jpg';

$result = file_put_contents( 'photo/'.$filename, file_get_contents('php://input') );

if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}


//$update = "Update photos set photo ='".$filename."'";
$update = "insert into photos set photo ='".$filename."', created_on=NOW()";
mysql_query($update, $conn) or die(mysql_error());

$photoID = mysql_insert_id();

//$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/photo/' . $filename;
//print "$url\n";
print "$photoID\n";
?>