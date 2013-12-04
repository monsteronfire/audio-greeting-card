<?php
include('conn.php');
require_once('php-image-magician/php_image_magician.php');

if ( !isset($_FILES['uploadfile']))
{
echo "<h1>Sorry, no file detected</h2>";
exit;
}

$currentFile = date('YmdHis') . '.jpg';

$tmpName = $_FILES['uploadfile']['tmp_name'];

$size = $_FILES['uploadfile']['size'];

$type = $_FILES['uploadfile']['type'];

$uploadDir = 'photo/';

$filePath = $uploadDir . $currentFile;

//if (!empty($currentFile)) {

if (file_exists($filePath)) {

unlink($filePath);}

$result = move_uploaded_file($tmpName, $filePath);
//$thumbname = 'thumb_'.$currentFile;
//$thumb = 'images/photo/'.$thumbname;

//big images size
$magicianObj = new imageLib($filePath);
$magicianObj -> resizeImage(246, 246, 'crop');
$magicianObj -> saveImage($filePath, 100);

//thumbnail size
//$magicianObj = new imageLib('images/photo/'.$currentFile);
//$magicianObj -> resizeImage(98, 112, 'crop');
//$magicianObj -> saveImage($thumb, 100);

if (!$result) {

echo "An error occured. Please try again!";

exit;}

//insert to jos_users_upload
		$insdata = "insert into photos set photo ='".$currentFile."', created_on=NOW()";
		mysql_query($insdata, $conn) or die(mysql_error());
		$photoID = mysql_insert_id();

$redirecturl = "tune.php?photoID=".$photoID;
		
	echo("<script> location.href='" . $redirecturl . "'</script>");
//if(!get_magic_quotes_gpc())
//{
//
//$fileName = addslashes($fileName);
//
//$filePath = addslashes($filePath); }

//}
?>