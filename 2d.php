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
			<h2>2D Animation &amp; Character Design</h2>
			<h3></h3>
			<h4>In 2D Animation, we're learning to combine drawing, storytelling, technical mastery, and serious software skills to make our
				dreams come true. How about yours?</h4>
		</div> <!-- end .course-row -->

		<div class="course-desc">
			<p>Learn how to make your random day dreams and ideas come to life.</p>
		</div><!-- end .course-desc -->
		<div class="course-center">
			<video onclick="vidplay()" id="cd" controls  src="assets/videos/2D_when_a_dragon_moves_in.mp4">
			</video>
		</div><!-- end .course-center -->
		<script type="text/javascript">
            var video = document.getElementById("cd");
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
