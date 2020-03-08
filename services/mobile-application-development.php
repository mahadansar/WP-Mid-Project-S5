<?php 
	include("../includes/config.php"); 
	$cp="";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Mobile App Development Services - Mobile Development Company - WS Technologies</title>
	<?php include("../includes/css-js.php"); ?>
</head>

<body>
    <?php include("../includes/header.php"); ?>

    <main>
		<div id="top-page-cover">
			<div id="bg-img-text-mod">
				Mobile Application <span id="bg-img-text2">Development</span>
			</div>
		</div>
	</main>

	<section class="services-section1">
	<div class="container">
		<h1 class="text-center">Unlock More Value with Our Mobile App Development Services</h1>
		<p>With over 120 successful projects under our belt, we offer full-cycle mobile application development services tailored to your business needs. From ideation to publishing — we have you covered all the way.</p>
		<p>WST brings together senior-level mobile app development experts — including business analysts, UX specialists and engineers — who are well-versed in building both native and cross-platform apps.</p>
		<p>Whether iOS or Android, we will help you create a mobile application that will wow users at first tap and deliver an outstanding experience under high load.</p>
	</div>
	</section>

	<section class="csd-sec1">
	<div class="container">
		<div class="float-left">
			<h1>We Build the Full Gamut of Apps</h1>
		
			<p class="csd-p-mod">Leverage our mobile app development services to create solutions of any complexity and size: from award-winning B2C apps to enterprise-grade mobile platforms that power mission-critical workflows.</p>
		</div>
		<div class="float-right">
			<div id="mobile-development-img1"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="services-section1">
	<div class="container">
		<h1 class="text-center">Android App Development Services</h1>
		<p>WST is an Android app development company that provides end-to-end services to help you turn your idea into a successful mobile product, from scratch. Our team brings in the skills tested in over 90 mobile development projects to create amazing consumer and enterprise Android apps.</p>
		<p>We help product companies and VC-backed startups tackle the challenges that come with Android’s openness, and win a tremendous base of loyal users. For enterprise customers, we deliver highly customizable and secure apps that offer a wealth of mission-critical functionality without compromising the UX.</p>
	</div>
	</section>

	<section class="csd-sec1">
	<div class="container">
		<div class="float-left">
			<h1>We Support the Entire Android Ecosystem</h1>
		
			<p class="csd-p-mod">Our Android application expertise is not limited to just smartphones and tablets — it also covers connected devices, wearables, smart TVs, and in-car infotainment systems.</p>
		</div>
		<div class="float-right">
			<div id="mobile-development-img2"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="services-section1">
	<div class="container">
		<h1 class="text-center">iOS App Development Services</h1>
		<p>As an iOS development company, we provide full-cycle services to help established businesses and startups take advantage of everything Apple’s platform has to offer.</p>
		<p>Our mobile team creates enterprise and consumer iOS apps drawing on the experience gained in over 90 projects of various complexity and size. Whatever the gig, we bring to the forefront the best of the latest technologies and exceptional understanding of your business.</p>
	</div>
	</section>

	<section class="csd-sec1">
	<div class="container">
		<div class="float-left">
			<h1>We Go beyond iPhones and iPads</h1>
		
			<p class="csd-p-mod">Our platform expertise covers the entire range of Apple products, including wearables, watches, smart TVs, cars, and homes.</p>
		</div>
		<div class="float-right">
			<div id="mobile-development-img3"></div>
		</div>
	</div>
	</section>
	<div class="clear-fix"></div>
	<section class="services-section1">
	<div class="container">
		<h1 class="text-center">Cross-Platform Mobile App Development</h1>
		<p>Gone are the days when cross-platform application development was considered plan B for those who couldn’t afford native apps. Today, it’s a feasible strategy to reduce both time to market and costs while building great mobile products that look and feel truly native.</p>
		<p>We at Oxagile help companies bring this strategy to life with the market’s hottest cross-platform development technology React Native, as well as time-tested Ionic and PhoneGap.</p>
	</div>
	</section>
	<div class="clear-fix"></div>


	<section class="section section-light">
    	<h2>Push the button to tap into over a decade of our experience in building world-class custom software.</h2>
		<a href="<?php echo $path?>order.php?order-status=MAD" id="order-button">Order Now</a>
	</section>
	  
	
	<div class="pricing-table-container">
        <h1 class="pricing-table-title">Mobile Application Development Packages</h1>

        <div class="pricing-table">
            <h3 class="pricing-package">Basic</h3>
            <div class="price"><?php echo ($basiccost+$madcost+$customcharges)."$" ?></div>
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
            <div class="price"><?php echo ($advancedcost+$madcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
				<li>1 Year <span>maintenance</span></li>
                <li>4 Months <span>delivery time</span></li>
                <li>Multi-Platform <span>compability</span><span class="condition">(Android & iOs)</span></li>
                <li>Data Server Hosting<span class="condition">(6 months only)</span></li>
                <li>Multiple Designs</li>
                <li>Available <span>maintenance on first weekends</span></li>
            </ul>
        </div>

        <div class="pricing-table">
            <h3 class="pricing-package">Premium</h3>
            <div class="price"><?php echo ($premiumcost+$madcost+$customcharges)."$" ?></div>
            <ul class="pricing-table-items">
				<li>2 Year <span>maintenance</span></li>
                <li>2 Months <span>delivery time</span></li>
                <li>Multi-Platform <span>compability</span><span class="condition">(Multi-Scaleable App)</span></li>
                <li>Data Server Hosting<span class="condition">(1.5 Year only)</span></li>
                <li>Multiple Designs</li>
                <li>24/7 Maintenance <span>Including Weekends</span></li>
            </ul>
        </div>
    </div>
	<div class="clear-fix"></div>
	<section class="section section-light">
    	<h2>Download Mobile Application Development Brochure Here:</h2>
		<a href="brouchers/services-mad-broucher.pdf" download id="download-button">Download</a>
	</section>
	<div class="clear-fix"></div>

    <?php include("../includes/footer.php"); ?>

</body>
</html>