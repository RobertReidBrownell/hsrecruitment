<?php
/**
 * Created by PhpStorm.
 * User: reidbrownell
 * Date: 9/21/17
 * Time: 11:53 AM
 */
include './assets/includes/header.php';
?>
<div class="container-grid">
	<div class="course-row">
		<h2>Programming &amp; Software Development</h2>
		<h3>Put your ideas into action.</h3>
		<h4>Will you make the next app or program that is an overnight success?</h4>
	</div> <!-- end .course-row -->

	<div class="course-desc">
		<p>A mobile game created by a student!</p>
	</div><!-- end .course-desc -->

	<div class="course-center">
		<video onclick="vidplay()" autoplay id="psd" controls  src="assets/videos/psd_mobilegame.mov">
		</video>
	</div><!-- end .course-center -->
	<script type="text/javascript">
        var video = document.getElementById("psd");
        video.volume = 0.4;
        // called in HTML
        function vidplay() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

	</script>


<?php
include './assets/includes/footer.php';
