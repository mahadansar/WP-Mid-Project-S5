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
            <div id="image-backup-box">
            	<h3 class="login-title">Backup Image</h3>
                <form action="admin-backup-image-action.php" method="post">
                    <select id="img-select-tag" name="img-selection">
 						<option value="main-page-cover">Main Page Cover</option>
  						<option value="admin-page-cover">Admin Page Cover</option>
                        <option value="contact-page-cover">Contact Page Cover</option>
                        <option value="top-cover">Top Cover (Other Pages)</option>
                    </select>
                    
                    <input class="admin-main-menu-button" type="submit" value="Restore">

                    <?php
						if(isset($_GET["status"])){
							if(($_GET["status"])=="ERR"){
								echo "<p class='error'>Backup Image not found.</p>";
							}
							else if(($_GET["status"])=="success"){
								echo "<p id='success'>Restored backup successfully.</p>";
							}
						}
						else{
							echo "";
						}
				?>
                </form>
				<a href="admin-upload-image.php" class="button" id="aui-button-mod">Back</a>
				
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