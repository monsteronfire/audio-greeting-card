<?php
include('conn.php');
$photoID = $_REQUEST['photoID'];

$sql="select * from photos where auto_id=$photoID";
$result=mysql_query($sql, $conn) or die(mysql_error());
$photo = mysql_fetch_array($result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$( document ).ready(function() {
  $(".audioList label a").click(function() {
	 var audioID = "#audio-"+$(this).attr("id");
	 $("audio").not(audioID).trigger("pause");
	 if ( $(this).hasClass("audioPlay") ) {
		 $(audioID).trigger("pause");
		 $(this).removeClass("audioPlay");
	 } else {
		 $(audioID).trigger("play");
		 $(".audioList label a").removeClass("audioPlay");
		 $(this).addClass("audioPlay");
	 }
  });	
});
</script>
</head>

<body>
<img src="photo/<?php echo $photo['photo']; ?>" />
<form name="frm01" id="frm01" method="post" action="xmas_submit.php" >
	<input name="photoID" id="photoID" type="hidden" value="<?php echo $photoID; ?>" />
	<input name="txtname" id="txtname" type="text" /><br />
    <input name="txtlocation" id="txtlocation" type="text" /><br /><br />
    <p class="audioList">
      <label>
        <input type="radio" name="audioTrack" value="1" id="RadioGroup1_0" />
        <audio id="audio-loop1" loop="loop">
        <source src="audio/loop1.mp3" />
    </audio><a id="loop1" style="cursor:pointer;">Sound A</a></label>
      <br />
      <label>
        <input type="radio" name="audioTrack" value="2" id="RadioGroup1_1" />
        <audio id="audio-loop2" loop="loop">
        <source src="audio/loop2.mp3" />
    </audio><a id="loop2" style="cursor:pointer;">Sound B</a></label>
      <br />
    </p>
    <br /><br />
    <input name="Submit" type="submit" value="submit" />
</form>
</body>
</html>