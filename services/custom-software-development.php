<?php 
	include("../includes/config.php"); 
	$cp="";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Custom Software Development Services - Custom App Development - WS Technologies</title>
	<?php include("../includes/css-js.php"); ?>
</head>

<body>
    <?php include("../includes/header.php"); ?>

    <main>
		<div id="top-page-cover">
			<div id="bg-img-text-mod">
				Custom Software <span id="bg-img-text2">Development</span>
			</div>
		</div>
	</main>

	<section class="services-section1">
	<div class="container">
		<h1 class="text-center" >Custom Software Development Services</h1>
		<p>We offer custom software development and consulting services to help you pull off your next project with less stress and less cost. Our team has the technology prowess to power you at every stage of your product development lifecycle, from discovery to ongoing post-launch enhancement.</p>
		<p>We have been refining our expertise across multiple verticals and solutions and are now able to drive success and minimize risk no matter your project’s specifics. Read on to find out more about the benefits of partnering with us.</p>
	</div>
	</section>

	<section class="csd-sec1">
	<div class="container">
		<h1 class="text-center" >Your Custom Software Development Journey</h1>

		<div class="float-right">
			<h1>Discovery</h1>
		
			<p class="csd-p-mod">Our R&D and BA experts work with your stake­holders to avoid unplanned costs and maximize the ROI at a later stage of your product development. We help you validate the concept, set clear expectations, and identify potential bottlenecks.</p> 
			<p class="ss2-p-mod">• Market and competitive analysis</p>
			<p class="ss2-p-mod">• Feasibility study and proof of concept</p>
			<p class="ss2-p-mod">• Finding new business and monetization models</p>
			<p class="ss2-p-mod">• Business and technology innovation</p>
			<p class="ss2-p-mod">• Developing a multi-platform strategy</p>
			<p class="ss2-p-mod">• Crafting security and scalability roadmaps</p>
			<p class="ss2-p-mod">• Choosing the right tech stack</p>

		</div>
		<div class="float-left">
			<div id="software-development-img1"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="csd-sec1">
	<div class="container">
		<div class="float-left">
			<h1>UX and UI Design</h1>
		
			<p class="csd-p-mod">Our team aims to drive user adoption and satisfaction for your product with an eye for future growth. We perform user-centric analysis to align the overall experience with your business goals and user needs, and let you make well-informed product decisions.</p> 
			<p class="ss2-p-mod">• User journey mapping</p>
			<p class="ss2-p-mod">• Identifying technical, business, or usage constraints</p>
			<p class="ss2-p-mod">• Wireframing, mocking up, and prototyping</p>
			<p class="ss2-p-mod">• Setting usability metrics</p>
			<p class="ss2-p-mod">• A consistent user experience across all platforms</p>
			<p class="ss2-p-mod">• A lightning-fast, pixel-perfect UI</p>

		</div>
		<div class="float-right">
			<div id="software-development-img2"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="csd-sec1">
	<div class="container">
		<div class="float-right">
			<h1>Development and Testing</h1>
		
			<p class="csd-p-mod">We marry engineering and QA so you can reduce costs and time-to-market while building a product that is functional, scalable and secure. Then, we will stay on board to help you roll out cool new features and integrations, and increase your user base.</p> 
			<p class="ss2-p-mod">• A robust and flexible back-end</p>
			<p class="ss2-p-mod">• Enterprise-grade information security</p>
			<p class="ss2-p-mod">• DevOps-powered continuous delivery process </p>
			<p class="ss2-p-mod">• A fully-fledged automation framework for web,mobile,API testing</p>
			<p class="ss2-p-mod">• End-to-end manual testing, including functional, integration and UI</p>

		</div>
		<div class="float-left">
			<div id="software-development-img3"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>

	<section class="section section-light">
    	<h2>Push the button to tap into over a decade of our experience in building world-class custom software.</h2>
		<a href="<?php echo $path?>order.php" id="order-button">Order Now</a>
	</section>
	  
	
	<div class="pricing-table-container">
        <h1 class="pricing-table-title">Custom Software Development Packages</h1>

        <div class="pricing-table">
            <h3 class="pricing-package">Basic</h3>
            <div class="price"><?php echo ($basiccost+$sdcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
                <li>6 Months <span>maintenance</span></li>
                <li>6 Months <span>delivery time</span></li>
                <li>Limited <span>compability</span><span class="condition">(1 Platform only)</span></li>
                <li>Data Server Hosting<span class="condition">(3 months only)</span></li>
                <li>Limited Design Changes</li>
                <li>Unavailable <span>maintenance on weekends</span></li>
            </ul>
        </div>
        
        <div class="pricing-table highlighted">
            <h3 class="pricing-package">Advanced</h3>
            <div class="price"><?php echo ($advancedcost+$sdcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
				<li>1 Year <span>maintenance</span></li>
                <li>4 Months <span>delivery time</span></li>
                <li>Multi-Platform <span>compability</span><span class="condition">(3 Platforms only)</span></li>
                <li>Data Server Hosting<span class="condition">(6 months only)</span></li>
                <li>Multiple Designs</li>
                <li>Available <span>maintenance on first weekends</span></li>
            </ul>
        </div>

        <div class="pricing-table">
            <h3 class="pricing-package">Premium</h3>
            <div class="price"><?php echo ($premiumcost+$sdcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
				<li>2 Year <span>maintenance</span></li>
                <li>2 Months <span>delivery time</span></li>
                <li>Multi-Platform <span>compability</span><span class="condition">(5 Platforms only)</span></li>
                <li>Data Server Hosting<span class="condition">(1.5 Year only)</span></li>
                <li>Multiple Designs</li>
                <li>24/7 Maintenance <span>Including Weekends</span></li>
            </ul>
        </div>
    </div>
	<div class="clear-fix"></div>
	<section class="section section-light">
    	<h2>Download Custom Software Development Brochure Here:</h2>
		
		<a href="brouchers/services-sd-broucher.pdf" download id="download-button">Download</a>
	</section>
	<div class="clear-fix"></div>

    <?php include("../includes/footer.php"); ?>

</body>
</html>