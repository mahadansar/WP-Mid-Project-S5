<?php 
	include("./includes/config.php"); 
	$cp="admin-login";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Admin Login Page - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>

	<section id="admin-login-sec">
        <div class="admin-login-box">
            <div class="login-main">
            	<h3 class="login-title">Login</h3>
				<?php
						if(isset($_GET["status"])){
							if(($_GET["status"])=="ERRun"){
								echo "<p class='error'>Wrong username</p>";
							}
							else if(($_GET["status"])=="ERRpw"){
								echo "<p class='error'>Wrong password</p>";
							}
							else if(($_GET["status"])=="EMP"){
								echo "<p class='error'>Fill both fields.</p>";
							}
						}
						else{
							echo "<p>Enter username and password to login</p>";
						}
					?>
            	<form action="admin-login-action.php" method="post">
					<input type="text" name="un"
						<?php
							if(isset($_COOKIE["adminusername"])){
								echo "value='" . $_COOKIE["adminusername"] . "'";
							}
						?>
					placeholder="Enter your username"/>
        			<input type="password" name="pw" placeholder="Enter your password" />
               		<input type="submit" value="Login"/>
              	</form>
          	</div>
          </div>
    </section>

    <?php include("./includes/footer.php"); ?>

</body>
</html>