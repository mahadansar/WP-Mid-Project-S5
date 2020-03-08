<nav>
	<input type="checkbox" id="checkbox-img"/>
	<label for="checkbox-img"></label>
	
	<ul>
		<li
		<?php if($cp=="home") echo "class='cp'"; ?>
		><a href="<?php echo $path?>index.php"
		>Home</a></li>

		<li
		<?php if($cp=="about") echo "class='cp'"; ?>
		><a href="<?php echo $path?>about.php"
		>About</a></li>

		<li
		<?php if($cp=="team") echo "class='cp'"; ?>
		><a href="<?php echo $path?>team.php"
		>Team</a></li>

		<li
		<?php if($cp=="portfolio") echo "class='cp'"; ?>
		><a href="<?php echo $path?>portfolio.php"
		>Portfolio</a></li>

		<li
		<?php if($cp=="services") echo "class='cp'"; ?>
		><a href="<?php echo $path?>services.php"
		>Services</a>
			<ul class="services-submenu">
				<li><a href="<?php echo $path?>services/custom-software-development.php"
				>Custom Software Development</a></li>
				<li><a href="<?php echo $path?>services/web-application-development.php"
				>Web Application Development</a></li>
				<li><a href="<?php echo $path?>services/mobile-application-development.php"
				>Mobile Application Development</a></li>
			</ul>
		</li>

		<li
		<?php if($cp=="order") echo "class='cp'"; ?>
		><a href="<?php echo $path?>order.php"
		>Order</a></li>

		<li
		<?php if($cp=="contact") echo "class='cp'"; ?>
		><a href="<?php echo $path?>contact.php"
		>Contact</a></li>

<?php
	if(isset($_SESSION["loggedin"])){
		if($_SESSION["loggedin"]){
?>
		<li
		<?php if($cp=="admin-logoff") echo "class='cp'"; ?>
		><a href="<?php echo $path?>admin-logoff.php"
		>Logoff</a></li>

		<li
		<?php if($cp=="admin") echo "class='cp'"; ?>
		><a href="<?php echo $path?>admin.php"
		>Admin</a></li>
<?php
		}
	}
	else{
?>
		<li
		<?php if($cp=="admin-login") echo "class='cp'"; ?>
		><a href="<?php echo $path?>admin-login.php"
		>Login</a></li>
<?php
	}
?>

	</ul>
</nav>