<?php
/**
 * Created by PhpStorm.
 * User: reidbrownell
 * Date: 9/21/17
 * Time: 11:52 AM
 */
include './assets/includes/header.php';
?>
	<div class="container-grid">
		<div class="course-row">
			<h2>3D Animation &amp; Visual Effects</h2>
			<h3></h3>
			<h4>Don’t be average—go for blockbuster skills with 3D Animation and Visual FX!</h4>
		</div> <!-- end .course-row -->

		<div class="course-desc">
			<p>This demo video shows you what you could learn to create.</p>
		</div><!-- end .course-desc -->
		<div class="course-center">
			<video onclick="vidplay()" id="fx" controls  src="assets/videos/futuristic_car_3D.mp4">
			</video>
		</div><!-- end .course-center -->
		<script type="text/javascript">
            var video = document.getElementById("fx");
            video.volume = 0.1;
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
