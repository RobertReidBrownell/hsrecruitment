<?php
/**
 * Created by PhpStorm.
 * User: reidbrownell
 * Date: 9/21/17
 * Time: 11:40 AM
 */
include './assets/includes/header.php';
?>
	<div class="container-grid">
		<div class="course-row">
			<h2>Broadcast &amp; Video Production</h2>
			<h3></h3>
			<h4>Learn how to make all those cool movie effects that you enjoy!</h4>
		</div> <!-- end .course-row -->

		<div class="course-desc">
			<p>Wouldn't it be fun to make your own commercials?</p>
		</div><!-- end .course-desc -->
		<div class="course-center">
			<video onclick="vidplay()" id="bvp" controls src="assets/videos/bvp_commercial.mov">
			</video>
		</div><!-- end .course-center -->
		<script type="text/javascript">
            var video = document.getElementById("bvp");
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
