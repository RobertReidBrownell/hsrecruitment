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
<h1>Information Technology Courses</h1>
<div class="row alignC">
    <div class="shape shapeL rounded"><h2>2D Animation &amp; Character Design</h2></div>
    <div class="shape shapeT rounded"><h2>3D Animation &amp; Visual Effects</h2></div>
    <div class="shape shapeR rounded"><h2>Programming &amp; Software Development</h2></div>
</div><!-- end .row class -->

<div class="row alignC">
    <div class="shape2 rounded">

        <video id="graduation" class="rounded video" width="960px" height="540px" src="assets/videos/it_completion.mov">
            </video>
    </div>
</div><!-- end .row class -->

<div class="row alignC">
    <div class="shape shapeL rounded"><h2>Web Design &amp; Development</h2></div>
    <div class="shape shapeB rounded"><h2>Graphic Communications</h2></div>
    <div class="shape shapeR rounded"><h2>Broadcast &amp; Video Production</h2></div>
</div><!-- end .row class -->

<script src="./assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
    //Play/Pause control Clicked
    $('.btnPlay').on('click', function() {
        if(video[0].paused) {
            video[0].play();
        }
        else {
            video[0].pause();
        }
        return false;
    }; )
</script>
</body>
</html>