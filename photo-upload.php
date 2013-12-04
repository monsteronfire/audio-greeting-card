<?php include 'header.php';?>

<div class="camera-wrapper wrapper">
	<div class="progress-bar progress-1">
		<div class="step-box is-active">
			<p>Upload Image</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="step-box">
			<p>Choose Your Tune</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="step-box">
			<p>Submit</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="bar-box">
			<div class="indicator-bar"></div>
			<div class="indicator-bar"></div>
		</div>
	</div><!--.progress-bar-->
    <div style="height:50px;"></div>
    <form id="dd" name="dd" method="post" action="uploadimages.php" enctype="multipart/form-data">
	<input type="file" name="uploadfile" id="uploadfile" style="border: solid 2px #F00; background:none" />
  	<div style="height:50px;"></div>
    <ul>
				<li class="red-button"><a href="join.php">Back</a></li>
				<li class="red-button"><a href="#" onclick="formSubmit()">Jingle Now!</a></li>
			</ul>
</form>
<script>
function formSubmit()
{
document.getElementById("dd").submit();
}
</script>
	
</div><!---->

<?php include 'footer.php';?>