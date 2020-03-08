<?php 
	include("./includes/config.php"); 
	$cp="admin";

	if(isset($_SESSION["loggedin"])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Admin Main Page - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>

	<section id="admin-login-sec">
        <div class="admin-login-box">
            <div class="login-main">
            	<h3 class="login-title">Admin Menu</h3>
               		<a class="admin-main-menu-button" href="<?php echo $path?>admin-view-orders.php">View Orders</a>
                    <a href="<?php echo $path?>admin-view-feedback.php" class="admin-main-menu-button">View Feedback</a>
                    <a href="<?php echo $path?>admin-upload-image.php" class="admin-main-menu-button">Upload Image</a>
          	</div>
          </div>
    </section>

    <?php include("./includes/footer.php"); ?>

</body>
</html>
<?php
}
else{
    header("Location: unauthorized.php");
}
?>