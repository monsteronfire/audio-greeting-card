<?php include 'header.php';?>
<?php
include('conn.php');
$photoID = $_REQUEST['photoID'];

$sql="select * from photos where auto_id=$photoID";
$result=mysql_query($sql, $conn) or die(mysql_error());
$photo = mysql_fetch_array($result);

?>
<div class="track-wrapper wrapper">
	<div class="progress-bar progress-1">
		<div class="step-box is-active">
			<p>Upload Image</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="step-box is-active">
			<p>Choose Your Tune</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="step-box">
			<p>Submit</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="bar-box">
			<div class="indicator-bar bar-active"></div>
			<div class="indicator-bar"></div>
		</div>
	</div><!--.progress-bar-->

	<div class="intro upload-intro">
		<h3>
			Almost there!<br />
			Don't forget to pick a tune.
		</h3>
	</div><!--.intro-->

	<div class="tune-info">
		<div class="photo-upload-box inner-box">
			<div class="user-photo">
				<!--<img src="css/img/img-holder-dino.jpg" alt="Christmas Raptor" height="264" width="262">-->
                <img src="photo/<?php echo $photo['photo']; ?>"  alt="Christmas Raptor"  style="padding:8px; background:#c7c7c7" />
			</div><!---->
			<input type="text" class="name-field" id="name-field" placeholder="What is your name?" />
			<p>* Your name is required</p>
		</div><!--.photo-upload-box-->

		<div class="choose-tune-box inner-box">
			<h4>Choose Your Tune</h4>
			<div class="tune-holder scroll-pane">
				<table>
					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>

					<tr class="tune-opt">
						<td>
							<span class="btn-toggle is-play"></span>
						</td>
						<td>
							<label for="tune-1">Sound 2 - Beats Rawr</label>
						</td>
						<td>
							<div class="red-radio">
								<input type="radio" class="radio-tune" id="tune-1" name="redradios">
							</div>
						</td>
					</tr>
				</table>
			</div>

			<ul>
				<li class="red-button"><a href="">Back</a></li>
				<li class="red-button"><a href="">Jingle Now!</a></li>
			</ul>
		</div><!--.choose-tune-box-->
	</div><!---->

	
</div><!---->

<?php include 'footer.php';?>