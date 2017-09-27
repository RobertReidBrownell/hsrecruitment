<?php
/**
 * Created by PhpStorm.
 * User: reidbrownell
 * Date: 9/19/17
 * Time: 10:08 AM
 */
include './assets/includes/header.php';
?>

<div class="row alignC">
    <div class="shape shapeLT rounded"><a href="2d.php"><h2>2D Animation &amp; Character Design</h2></a></div>
    <div class="shape shapeT rounded"><a href="3d.php"><h2>3D Animation &amp; Visual Effects</h2></a></div>
    <div class="shape shapeRT rounded"><a href="psd.php"><h2>Programming &amp; Software Development</h2></a></div>
</div><!-- end .row .alignC -->

<div class="row alignC">
    <div class="shape2">
        <video onclick="vidplay()" loop id="graduation" autoplay class="video" controls  src="assets/videos/it_completion.mov">
            </video>
    </div><!-- end .shape2 .rounded .videoContainer -->
</div><!-- end .row .alignC  -->


<div class="row alignC">
    <div class="shape shapeLB rounded"><a href="wdd.php"><h2>Web Design &amp; Development</h2></a></div>
    <div class="shape shapeB rounded"><a href="gcom.php"><h2>Graphic Communications</h2></a></div>
    <div class="shape shapeRB rounded"><a href="bvp.php"><h2>Broadcast &amp; Video Production</h2></a></div>
</div><!-- end .row .alignC  -->

<script type="text/javascript">
    var video = document.getElementById("graduation");
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
</div> <!-- end #wrapper -->
</body>
</html>