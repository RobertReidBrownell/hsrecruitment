<?php
/**
 * Created by PhpStorm.
 * User: reidbrownell
 * Date: 9/19/17
 * Time: 10:08 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	                ================================================== -->
	<meta charset="utf-8">
	<title>IT Courses</title>
	<meta name="description" content="The home page for Francis Tuttle IT Course's recruitment">
	<meta name="author" content="Robert Reid Brownell">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link href='./assets/css/style.css' rel='stylesheet'>
</head>
<body>
<header>
     <img src="assets/images/logo.png">
    <h1>Information Technology</h1>
</header>
<div id="wrapper">

<div class="row alignC">
    <div class="shape shapeLT rounded"><a href="#"><h2>2D Animation &amp; Character Design</h2></a></div>
    <div class="shape shapeT rounded"><a href="#"><h2>3D Animation &amp; Visual Effects</h2></a></div>
    <div class="shape shapeRT rounded"><a href="#"><h2>Programming &amp; Software Development</h2></a></div>
</div><!-- end .row .alignC -->

<div class="row alignC">
    <div class="shape2 rounded videoContainer">
        <video onclick="vidplay()" loop id="graduation" autoplay class="rounded video" controls width="768px" height="432px" src="assets/videos/it_completion.mov">

            </video>
    </div><!-- end .shape2 .rounded .videoContainer -->
</div><!-- end .row .alignC  -->



<div class="row alignC">
    <div class="shape shapeLB rounded"><a href="#"><h2>Web Design &amp; Development</h2></a></div>
    <div class="shape shapeB rounded"><a href="#"><h2>Graphic Communications</h2></a></div>
    <div class="shape shapeRB rounded"><a href="#"><h2>Broadcast &amp; Video Production</h2></a></div>
</div><!-- end .row .alignC  -->

<script type="text/javascript">
    var video = document.getElementById("graduation");
    video.volume = 0.1;
    // auto called in HTML
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