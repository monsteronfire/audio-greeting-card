<?php include 'header.php';?>
<?php
include('conn.php');
$photoID = $_REQUEST['photoID'];

$sql="select * from photos where auto_id=$photoID";
$result=mysql_query($sql, $conn) or die(mysql_error());
$photo = mysql_fetch_array($result);

?>
<style>
.audioList label{display:block; width:300px; margin-bottom:15px; outline:none}
.audioList label a {color: #7f7f7f;font-family: 'os-regular';font-size: 0.7em; display:block; width:254px; float:left; }
.audioList label a span{display: block;width: 10px;height: 10px; float:left;background-image:url(css/img/sprite.png);background-position: -456px -15px; margin:5px 15px;}
.audioList label a.audioPlay span{;background-position: -456px -55px;}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
function formSubmit()
{
document.getElementById("frm01").submit();
}
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
    	<form name="frm01" id="frm01" method="post" action="submit.php" >
		<div class="photo-upload-box inner-box">
			<div class="user-photo">
				<!--<img src="css/img/img-holder-dino.jpg" alt="Christmas Raptor" height="264" width="262">-->
                <img src="photo/<?php echo $photo['photo']; ?>"  alt="Christmas Raptor"  style="padding:8px; background:#c7c7c7" />
			</div><!---->
			<input type="text" class="name-field" id="txtname" name="txtname" placeholder="What is your name?" />
            <input name="photoID" id="photoID" type="hidden" value="<?php echo $photoID; ?>" />
			<p>* Your name is required</p>
		</div><!--.photo-upload-box-->

		<div class="choose-tune-box inner-box">
			<h4>Choose Your Tune</h4>
			<div class="tune-holder scroll-pane">
                   <p class="audioList">
                      <label>
                        <audio id="audio-loop1" loop="loop"><source src="music/loop1.mp3" /></audio>
                        <a id="loop1" style="cursor:pointer;"><span></span>Sound 2 - Beats Rawr</a>
                        <input type="radio" name="audioTrack" value="1" id="RadioGroup1_0" />
                      </label>
                      <label>
                        <audio id="audio-loop2" loop="loop"><source src="music/loop2.mp3" /></audio>
                        <a id="loop2" style="cursor:pointer;"><span></span>Sound B</a>
                        <input type="radio" name="audioTrack" value="2" id="RadioGroup1_1" />
                      </label>
                      <label>
                        <audio id="audio-loop3" loop="loop"><source src="music/loop3.mp3" /></audio>
                        <a id="loop3" style="cursor:pointer;"><span></span>Sound C</a>
                        <input type="radio" name="audioTrack" value="3" id="RadioGroup1_2" />
                      </label>
                      <label>
                        <audio id="audio-loop4" loop="loop"><source src="music/loop4.mp3" /></audio>
                        <a id="loop4" style="cursor:pointer;"><span></span>Sound D</a>
                        <input type="radio" name="audioTrack" value="4" id="RadioGroup1_3" />
                      </label>
                      <label>
                        <audio id="audio-loop5" loop="loop"><source src="music/loop5.mp3" /></audio>
                        <a id="loop5" style="cursor:pointer;"><span></span>Sound E</a>
                        <input type="radio" name="audioTrack" value="5" id="RadioGroup1_4" />
                      </label>
                      <label>
                        <audio id="audio-loop6" loop="loop"><source src="music/loop6.mp3" /></audio>
                        <a id="loop6" style="cursor:pointer;"><span></span>Sound F</a>
                        <input type="radio" name="audioTrack" value="6" id="RadioGroup1_5" />
                      </label>
                      <label>
                        <audio id="audio-loop7" loop="loop"><source src="music/loop7.mp3" /></audio>
                        <a id="loop7" style="cursor:pointer;"><span></span>Sound G</a>
                        <input type="radio" name="audioTrack" value="7" id="RadioGroup1_6" />
                      </label>
                      <label>
                        <audio id="audio-loop8" loop="loop"><source src="music/loop8.mp3" /></audio>
                        <a id="loop8" style="cursor:pointer;"><span></span>Sound H</a>
                        <input type="radio" name="audioTrack" value="8" id="RadioGroup1_7" />
                      </label>
                      <label>
                        <audio id="audio-loop9" loop="loop"><source src="music/loop9.mp3" /></audio>
                        <a id="loop9" style="cursor:pointer;"><span></span>Sound I</a>
                        <input type="radio" name="audioTrack" value="9" id="RadioGroup1_8" />
                      </label>
                    </p>
			</div>

			<ul>
				<li class="red-button"><a href="index.php">Back</a></li>
				<li class="red-button"><a href="#" onclick="formSubmit()">Jingle Now!</a></li>
			</ul>
		</div><!--.choose-tune-box-->
        </form>
	</div><!---->

	
</div><!---->

<?php include 'footer.php';?>