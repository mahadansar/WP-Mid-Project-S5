<?php 
	include("./includes/config.php"); 
	$cp="services";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Software Development Services - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>
    <main>
		<div id="top-page-cover">
			<div id="bg-img-text">
				Serv<span id="bg-img-text2">ices</span>
			</div>
		</div>
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

	<section class="services-section1" id="services-section1-mod">
	<div class="container">
		<h1 class="text-center" id="header-font-mod1">Dedicated Development Team</h1>
		<p>The Dedicated Development Team model is a great fit for businesses who need to quickly ramp up their development resources or augment their internal development teams with rare or highly specialized talent.</p>
		<p>The dedicated team approach can benefit your business in many ways, allowing you to rapidly scale up or down as needed, cut the development costs, and reduce time to market.</p>
		<p>All while retaining complete control over the project vision, milestones, and deliverables.</p>
	</div>
	</section>

	<section class="services-section2">
		<div class="container">
			<h1 class="text-center" id="header-font-mod2">The WST DDC Advantage</h1>
			<p>We have developed and honed a low-risk Scrum methodology for setting up and handling long-term DDC projects to make sure you get:</p>
			<p class="ss2-p-mod">• Unparalleled project scalability and resource flexibility;</p>
			<p class="ss2-p-mod">• The best tech and management talent, including certified developers, QA engineers, and project managers;</p>
			<p class="ss2-p-mod">• Total control with daily direct communication via email, video calls, demos, and conferences;</p>
			<p class="ss2-p-mod">• 100% project transparency and visibility with direct access to Oxagile’s task and project tracking systems such as JIRA.</p>
		</div>
	</section>


    <?php include("./includes/footer.php"); ?>

</body>
</html>