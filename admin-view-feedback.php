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
	
	<title>Customer Feedback - Admin Session - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>
    
    <section id="order-confirmed-padding-top">
        <div class="order-confirmed-blackbar">
            <h3>Customer Feedback:</h3>
        </div>

        <div class="admin-orders">
            <a href="<?php echo $path?>admin.php" id="order-button-mod">Admin Menu</a>
            <div class="admin-orders-table">
    
                <div class="row header">
                    <div class="cell">
                        Name
                    </div>
                    <div class="cell">
                        Email
                    </div>
                    <div class="cell">
                        Message
                    </div>
                </div>
                <?php
	                $order_folder= "./feedback";
	                $myFolder = opendir($order_folder);
	                while (false !== ($myFile= readdir($myFolder))) 
	                {	
		                if (is_file($order_folder."/".$myFile))
		                {
                            include_once("./feedback/".$myFile);
                            ?>
			                <div class="row">
                                <div class="hidden cell">
                                    Name
                                </div>
			                    <div class="cell">
                                    <?php echo wordwrap($uname , 29 , ' ' , true )?>
                                </div>
                                <div class="hidden cell">
                                    Email
                                </div>
                                <div class="cell">
                                    <?php echo wordwrap($uemail , 29 , ' ' , true )?>
                                </div>
                                <div class="hidden cell">
                                    Message
                                </div>
                                <div class="cell">
                                    <?php echo wordwrap($umessage , 29 , ' ' , true )?>
                                </div>
			                </div>
                            <?php
		                }
	                }
	                closedir($myFolder);
                ?>
            </div>
        </div>
        <?php include("./includes/footer.php"); ?>
    </section>
</body>
</html>
<?php
}
else{
    header("Location: unauthorized.php");
}
?>