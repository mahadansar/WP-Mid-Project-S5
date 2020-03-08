<?php 
	include("./includes/config.php"); 
	$cp="order";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Order - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>
	
	<main>
		<div id="top-page-cover">
			<div id="bg-img-text">
				Ord<span id="bg-img-text2">er</span>
			</div>
		</div>
	</main>

	<section id="order-sec">
	<div id="order-sec-left">
		<div id="order-form-title">
			<h3>• Fill the form below to place your order.</h3>
		</div>
		<form class="order-form" action="order-action.php" method="post">
			<ul>
				<li>
					<input type="text" name="name" class="input-design field-mod field-left" maxlength="30" 
						<?php
							if(isset($_COOKIE["ordercustomername"])){
								echo "value='" . $_COOKIE["ordercustomername"] . "'";
							}
						?>
					placeholder="Name" required/>
					<input type="email" name="email" class="input-design field-mod field-right" maxlength="30" 
						<?php
							if(isset($_COOKIE["ordercustomeremail"])){
								echo "value='" . $_COOKIE["ordercustomeremail"] . "'";
							}
						?>
					placeholder="Email" />
				</li>

				<li>
					<input type="text" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="phone" class="input-design field-mod field-left"
						<?php
							if(isset($_COOKIE["ordercustomerphone"])){
								echo "value='" . $_COOKIE["ordercustomerphone"] . "'";
							}
						?>
					placeholder="123-456-7890" />
					<select name="package" class="input-design field-mod field-right">
 						<option value="basic">Basic</option>
  						<option value="advanced">Advanced</option>
  						<option value="premium">Premium</option>
					</select>
				</li>

				<li>
					<?php
					if(isset($_GET["order-status"]))
					{
						if(($_GET["order-status"])=="WAD")
						{
							?>
							<select name="service" class="input-design field-full align-none">
							<option value="service-sd">Software Development</option>
							<option value="service-wad" selected>Web Application Development</option>
							<option value="service-mad">Mobile Application Development</option>
							</select>
							<?php
						}
						if(($_GET["order-status"])=="MAD")
						{
							?>
							<select name="service" class="input-design field-full align-none">
							<option value="service-sd">Software Development</option>
							<option value="service-wad" selected>Web Application Development</option>
							<option value="service-mad" selected>Mobile Application Development</option>
							</select>
							<?php
						}
					}
					else
					{
						?>
						<select name="service" class="input-design field-full align-none">
 						<option value="service-sd">Software Development</option>
  						<option value="service-wad">Web Application Development</option>
  						<option value="service-mad">Mobile Application Development</option>
						</select>
						<?php
					}
					?>
				</li>
				
				<li>
					<input type="text" name="subject" maxlength="50" class="input-design field-full align-none" placeholder="Subject" />
				</li>

				<li>
					<textarea name="message" class="input-design" maxlength="300" minlength="10" placeholder="Message"></textarea>
				</li>
			
				<li>
					<input type="submit" value="Order" />
				</li>
				<?php
						if(isset($_GET["order-status"])){
							if(($_GET["order-status"])=="ERR"){
								echo "<p class='error'>Please fill all fields correctly.</p>";
							}
							else if(($_GET["order-status"])=="EMP"){
								echo "<p class='error'>Please fill all fields.</p>";
							}
						}
						else{
							echo "";
						}
				?>
			</ul>
		</form>
	</div>
	<div id="order-sec-right">
		<div>
			<h4>Note:</h4>
			<p>• You will be contacted 24-48 hours after your order placement to talk project details.</p>
			<p>• Please avoid unnecessary details and stick to the main subject of your project while creating an order.</p>
			<p>• Incase of any mistake, refer to the admin contacting you for details.</p>
			<p>Thanks for visiting.</p>
		</div>
	</div>
	</section>

    <?php include("./includes/footer.php"); ?>

</body>
</html>