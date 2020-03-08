<?php 
	include("includes/config.php"); 
	$cp="home";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Custom Software Development Company - WS Technologies</title>
	<?php include("includes/css-js.php"); ?>
</head>

<body>

	<?php include("includes/header.php"); ?>

	<main>
		<div id="main-page-cover"></div>
	</main>

	<section id="services-section">
		<div class="sr1">
			<h3><a href="<?php echo $path?>/services/custom-software-development.php">Custom Software Development</a></h3>
			<p>We here at WST offer custom software development and consulting services to help you pull off your next project with less stress and less cost. Our team has the technology prowess to power you at every stage of your product development lifecycle, from discovery to ongoing post-launch enhancement.
				<a href="<?php echo $path?>/services/custom-software-development.php">Click here</a> for more.</p>
		</div>
		<div id="sr">
			<h3><a href="<?php echo $path?>/services/web-application-development.php">Web Application Development</a></h3>
			<p>WS Technologies is a web development company with over a decade of experience in building world-class B2B and B2C applications focusing on video delivery, RTC, AdTech, e-Learning, and data analytics.
			<a href="<?php echo $path?>/services/web-application-development.php">Click here</a> for more.</p>
		</div>
		<div class="sr1">
			<h3><a href="<?php echo $path?>/services/mobile-application-development.php">Mobile Application Development</a></h3>
			<p>WS Technologies brings together senior-level mobile app development experts — including business analysts, UX specialists and engineers — who are well-versed in building both native and cross-platform apps. Providing with the new tech and maintianing it to the best possible.
				<a href="<?php echo $path?>/services/mobile-application-development.php">Click here</a> for more.</p>
		</div>
	</section>

	<div class="clear-fix"></div>

  	<section class="section section-dark">
		<h2>Awards & Recognitions</h2>

		<div id="awards-div">
		  <div id="award-img1" class="award-img"></div>
		  <div id="award-img2" class="award-img"></div>
		  <div id="award-img3" class="award-img"></div>
		  <div id="award-img4" class="award-img"></div>
		  <div id="award-img5" class="award-img"></div>
		</div>

	</section>
	  
	<div class="clear-fix"></div>

  	<div class="main-page-cover2">
    	<div class="ptext">
			Addressing Your Business Challenges
   		 </div>
 	 </div>

 	<section class="section section-light">
		We enable you to deliver top-quality content on your own terms anywhere in the world, to audiences of any size, and on any type of device. We are passionate about crafting custom video products and enhancing existing OTT solutions.
  	</section>

  	<div class="main-page-cover3">
   		<div class="ptext">
    		<span class="border trans">
      		  Making Future Into Past
     		</span>
    	</div>
  	</div>

 	<section class="section section-light">
		<form action="#" method="post">
	 		<h2>Subscribe to our newsletter: </h2> <input type="text" name="newsletter-email" placeholder="enter your email" id="email-box">
		  	<input type="submit" value="Submit" class="button">
		</form>
  	</section>

	<?php include("includes/footer.php"); ?>

</body>
</html>