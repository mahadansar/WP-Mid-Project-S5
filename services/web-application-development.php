<?php 
	include("../includes/config.php"); 
	$cp="";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Web Application Development - Web Development Company - WS Technologies</title>
	<?php include("../includes/css-js.php"); ?>
</head>

<body>
    <?php include("../includes/header.php"); ?>

    <main>
		<div id="top-page-cover">
			<div id="bg-img-text-mod">
				Web Application <span id="bg-img-text2">Development</span>
			</div>
		</div>
	</main>

	<section class="services-section1">
	<div class="container">
		<h1 class="text-center">Custom Web Application Development Services</h1>
		<p>WST is a web development company with over a decade of experience in building world-class B2B and B2C applications focusing on video delivery, RTC, AdTech, e-Learning, and data analytics.</p>
		<p>Throughout these years, our dedicated web app developers have delivered products to over 400 clients, including global brands such as Google, Discovery, Vodafone, and Veon. Today, we use this tremendous experience to address the needs of the M&E, Healthcare, FinTech, and Sports industries.</p>
	</div>
	</section>

	<section class="csd-sec1">
	<div class="container">
		<h1 class="text-center">Your Web Development Journey</h1>

		<div class="float-right">
			<h1>R&D and Consulting</h1>
		
			<p class="csd-p-mod">Our R&D team learns the ins and outs of your business to help you reduce both technical and market risk across the entire software development lifecycle.</p> 
			<p class="ss2-p-mod">• Validate your concept</p>
			<p class="ss2-p-mod">• Choose the right technology</p>
			<p class="ss2-p-mod">• Maximize resources</p>
			<p class="ss2-p-mod">• Avoid unplanned costs</p>
			<p class="ss2-p-mod">• Innovate and ensure growth</p>
			<p class="ss2-p-mod">• Discover new business models</p>

		</div>
		<div class="float-left">
			<div id="web-development-img1"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="csd-sec1">
	<div class="container">
		<div class="float-left">
			<h1>Front-End Development</h1>
		
			<p class="csd-p-mod">We absorb your requirements and build a trusted, visually rich user-product relationship to boost adoption and satisfaction. Our front-end team takes it from there to nail that ultimate user journey in code.</p> 
			<p class="ss2-p-mod">• A sharp UI matched to design mockups with pixel-perfect accuracy</p>
			<p class="ss2-p-mod">• A consistent UX across the entire application</p>
			<p class="ss2-p-mod">• Stunning animations and effects that don’t compromise performance</p>

		</div>
		<div class="float-right">
			<div id="web-development-img2"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="csd-sec1">
	<div class="container">
		<div class="float-right">
			<h1>Back-End Development</h1>
		
			<p class="csd-p-mod">Let WST's architects and senior engineers get to design and build the core of your application — with an eye for availability, robustness, and great new features.</p> 
			<p class="ss2-p-mod">• A solid architecture to accommodate future growth at scale</p>
			<p class="ss2-p-mod">• Flexibility to integrate with other systems and third-party services</p>
			<p class="ss2-p-mod">• Advanced data structures to provide actionable insights</p>
			<p class="ss2-p-mod">• Cutting-edge security features to protect your users, processes, and data</p>

		</div>
		<div class="float-left">
			<div id="web-development-img3"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="csd-sec1">
	<div class="container">
		<div class="float-left">
			<h1>Manual and Automated QA</h1>
		
			<p class="csd-p-mod">From day one, we put QA experts in the loop so you can quickly roll out features and make sure your software runs like clockwork across all browsers and screens.</p> 
			<p class="ss2-p-mod">• Automate repetitive, laborious and complicated tasks</p>
			<p class="ss2-p-mod">• Reduce costs and time-to-market</p>
			<p class="ss2-p-mod">• Shorten customer feedback loop</p>
			<p class="ss2-p-mod">• Quickly improve the product</p>
			<p class="ss2-p-mod">• Take a transparent look at the progress </p>
			<p class="ss2-p-mod">• Plan and problem-solve efficiently</p>

		</div>
		<div class="float-right">
			<div id="web-development-img4"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>

	<section class="section section-light">
    	<h2>Push the button to tap into over a decade of our experience in building world-class custom web projects.</h2>
		<a href="<?php echo $path?>order.php?order-status=WAD" id="order-button">Order Now</a>
	</section>
	  
	
	<div class="pricing-table-container">
        <h1 class="pricing-table-title">Web Application Development Packages</h1>

        <div class="pricing-table">
            <h3 class="pricing-package">Basic</h3>
            <div class="price"><?php echo ($basiccost+$wadcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
                <li>6 Months <span>maintenance</span></li>
                <li>2 Months <span>delivery time</span></li>
                <li>Web Server Hosting<span class="condition">(2 years only)</span></li>
                <li>Data Server Hosting<span class="condition">(3 months only)</span></li>
                <li>Limited Design Changes</li>
                <li>Unavailable <span>maintenance on weekends</span></li>
            </ul>
        </div>
        
        <div class="pricing-table highlighted">
            <h3 class="pricing-package">Advanced</h3>
            <div class="price"><?php echo ($advancedcost+$wadcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
				<li>1 Year <span>maintenance</span></li>
                <li>1 Month <span>delivery time</span></li>
                <li>Web Server Hosting<span class="condition">(5 years only)</span></li>
                <li>Data Server Hosting<span class="condition">(6 months only)</span></li>
                <li>Multiple Designs</li>
                <li>Available <span>maintenance on first weekends</span></li>
            </ul>
        </div>

        <div class="pricing-table">
            <h3 class="pricing-package">Premium</h3>
            <div class="price"><?php echo ($premiumcost+$wadcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
				<li>2 Year <span>maintenance</span></li>
                <li>2 Weeks <span>delivery time</span></li>
                <li>Web Server Hosting<span class="condition">(10 years only)</span></li>
                <li>Data Server Hosting<span class="condition">(1 year only)</span></li>
                <li>Multiple Designs</li>
                <li>24/7 Maintenance <span>Including Weekends</span></li>
            </ul>
        </div>
    </div>
	<div class="clear-fix"></div>
	<section class="section section-light">
    	<h2>Download Web Application Development Brochure Here:</h2>
		<a href="brouchers/services-wad-broucher.pdf" download id="download-button">Download</a>
	</section>
	<div class="clear-fix"></div>

    <?php include("../includes/footer.php"); ?>

</body>
</html>