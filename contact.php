<?php 
	include("./includes/config.php"); 
	$cp="contact";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Contact - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>

	<div id="contact-us-container">
		<div id="contact-us-header">
			<h1>Feedback</h1>
			<p>we read each and every feedback you send us, your word has the value that may help us in improving.</p>
		</div>
		<form id="contact-us-form" action="feedback-action.php" method="post">
			<input name="name" type="text" id="name" maxlength="30"
				<?php
					if(isset($_COOKIE["feedbackcustomername"])){
						echo "value='" . $_COOKIE["feedbackcustomername"] . "'";
					}
				?>
			placeholder="Name" required>
			<input name="email" type="email" id="email" maxlength="30"
				<?php
					if(isset($_COOKIE["feedbackcustomeremail"])){
						echo "value='" . $_COOKIE["feedbackcustomeremail"] . "'";
					}
				?>
			placeholder="Email" required>
			<textarea name="message" id="text-area" maxlength="300" minlength="10"></textarea>
			<input id="send-message" type="submit" value="Send Message" />
		</form>
		<?php
						if(isset($_GET["feedback-status"])){
							if(($_GET["feedback-status"])=="success"){
								echo '<p class="succesful-mod">Feedback Sent.</p>';
							}
							else if(($_GET["feedback-status"])=="EMP"){
								echo "<p class='error error-mod'>Please fill all fields.</p>";
							}
						}
						else{
							echo "";
						}
				?>
	</div>

	<section class="services-section2">
		<div class="container" id="contact-section2">
			<h1 class="text-center">Offices and Locations</h1>
			<h2>Headquarters</h2>
			<p class="ss2-p-mod">+1 123 456789</p>
			<p class="ss2-p-mod">wstechhq@wst.com</p>
			<p class="ss2-p-mod">RIU STR 21, Golra Mor, Rwp, Pakistan</p>

			<h2>Regional Office</h2>
			<p class="ss2-p-mod">+1 123 632363</p>
			<p class="ss2-p-mod">wstechreg@wst.com</p>
			<p class="ss2-p-mod">Office 4, Str4, I-10, Isb, Pakistan</p>

			<h2>Development Center and HR Office</h2>
			<p class="ss2-p-mod">+1 123 543276</p>
			<p class="ss2-p-mod">wstechhr@wst.com</p>
			<p class="ss2-p-mod"> 57 praspiekt house, Bahria Town, Isb, Pakistan</p>
		</div>

		<div class="map-location-container">
			<div class="map-image">map</div>
		</div>
	</section>
	<div class="clear-fix"></div>

	<section class="contact-section3">
		<h1 class="text-center">Sales Representatives</h1>
		<div class="float-left">
			<h2>Germany</h2>
			<p class="ss2-p-mod">+49 30 568 370 0518</p>
			<p class="ss2-p-mod">germany@wst.com</p>
		</div>
		<div class="float-left">
			<h2>Sweden</h2>
			<p class="ss2-p-mod">+46 85 01 64 440</p>
			<p class="ss2-p-mod">sweden@wst.com</p>
		</div>
		<div class="float-left">
			<h2>Australia</h2>
			<p class="ss2-p-mod">+61 29 19 16 446</p>
			<p class="ss2-p-mod">australia@wst.com</p>
		</div>
	</section>
	<div class="clear-fix"></div>

    <?php include("./includes/footer.php"); ?>

</body>
</html>