<?php include 'header.php';?>

<!--<div id="upload_results" style="background-color:#eee;"></div>-->

<div class="camera-wrapper wrapper">
	<div class="camera-frame">
		<!-- First, include the JPEGCam JavaScript Library -->
<script type="text/javascript" src="webcam.js"></script>
<!-- Configure a few settings -->
<script language="JavaScript">
	webcam.set_api_url( 'photo-take-process.php' );
	webcam.set_quality( 100 ); // JPEG quality (1 - 100)
	webcam.set_shutter_sound( true ); // play shutter click sound
</script>
<!-- Next, write the movie to the page at 320x240, but request the final image at 640x480 -->
<script language="JavaScript">
	document.write( webcam.get_html(615, 615, 246, 246) );
</script>
	</div><!--.camera-frame-->

	<ul class="camera-option-box">
		<!--<li class="red-button"><a href="#">Retake</a></li>-->
		<li class="red-button"><a href="#" onClick="take_snapshot()">Next</a></li>
		<li class="red-button" id="btn-cancel"><a href="join.php">Cancel</a></li>
	</ul>
<!--    <form>
    <input type=button value="Configure..." onClick="webcam.configure()">
    &nbsp;&nbsp;
    <input type=button value="Take Snapshot" onClick="take_snapshot()">
</form>-->
	
</div><!---->

<script language="JavaScript">
	webcam.set_hook( 'onComplete', 'my_completion_handler' );

	function take_snapshot() {
		// take snapshot and upload to server
		//document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
		webcam.snap();
	}

	function my_completion_handler(msg) {
		// extract URL out of PHP output
		//if (msg.match(/(http\:\/\/\S+)/)) {
			var image_url = msg;
			 //show JPEG image in page
			//document.getElementById('upload_results').innerHTML = 
//				'<h1>Upload Successful!</h1>' + 
//				'<h3>JPEG URL: ' + image_url + '</h3>' + 
//				'<img src="' + image_url + '">';
		// reset camera for another shot
			webcam.reset();
			window.location = "tune.php?photoID="+image_url;
		//}
		//else alert("PHP Error: " + msg);
	}
</script>




<?php include 'footer.php';?>