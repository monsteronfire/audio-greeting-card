<?php include 'header.php';?>

<div class="upload-wrapper">
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

	<div class="intro upload-intro">
		<h3>
			Got that selfie?<br />
			Upload it here in JPEG, PNG or GIF format, less than 1MB.<br />
			Or you can use our very own raptor.
		</h3>
	</div><!--.intro-->

	<ul class="upload-option-box">
		<li>
			<a href="photo-take.php">
				<span class="icon icon-take-photo"></span>
				<p>Take Photo</p>
			</a>
		</li>

		<li>
			<a href="photo-upload.php">
				<span class="icon icon-upload-photo"></span>
				<p>Upload Photo</p>
			</a>
		</li>

		<li>
			<a href="photo-general.php">
				<span class="icon icon-general-photo"></span>
				<p>Use General Photo</p>
			</a>
		</li>
	</ul>
</div><!---->

<?php include 'footer.php';?>