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
	
	<title>Customer Orders - Admin Session - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>
    
    <section id="order-confirmed-padding-top">
        <div class="order-confirmed-blackbar">
            <h3>All Customer Orders:</h3>
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
                        Phone
                    </div>
                    <div class="cell">
                        Package
                    </div>
                    <div class="cell">
                        Service
                    </div>
                    <div class="cell">
                        Subject
                    </div>
                    <div class="cell">
                        Payment
                    </div>
                </div>
                <?php
	                $order_folder= "./orders";
	                $myFolder = opendir($order_folder);
	                while (false !== ($myFile= readdir($myFolder))) 
	                {	
		                if (is_file($order_folder."/".$myFile))
		                {
                            include_once("./orders/".$myFile);
                            ?>
			                <div class="row">
                                <div class="hidden cell">
                                    Name
                                </div>
			                    <div class="cell">
                                    <?php echo wordwrap($uname , 10 , ' ' , true )?>
                                </div>
                                <div class="hidden cell">
                                    Email
                                </div>
                                <div class="cell">
                                    <?php echo wordwrap($uemail , 29 , ' ' , true )?>
                                </div>
                                <div class="hidden cell">
                                    Phone
                                </div>
                                <div class="cell">
                                    <?php echo wordwrap($uphone , 10 , ' ' , true )?>
                                </div>
                                <div class="hidden cell">
                                    Package
                                </div>
                                <div class="cell">
                                <?php
                                    if($upackage == "basic"){
                                        echo "Basic";
                                    }
                                    else if($upackage == "advanced"){
                                        echo "Advanced";
                                    }
                                    else if($upackage == "premium"){
                                        echo "Premium";
                                    }
                                    else{
                                        echo "Undefined";
                                    }
                                ?>
                                </div>
                                <div class="hidden cell">
                                    Service
                                </div>
                                <div class="cell">
                                    <?php 
                                        if($uservice == "service-sd"){
                                            echo "Software Development";
                                        }
                                        else if($uservice == "service-wad"){
                                            echo "Web Application Development";
                                        }
                                        else if($uservice == "service-mad"){
                                            echo "Mobile Application Development";
                                        }
                                        else{
                                            echo "Undefined";
                                        }
                                    ?>
                                </div>
                                <div class="hidden cell">
                                    Subject
                                </div>
                                <div class="cell">
                                <?php echo wordwrap($usubject , 29 , ' ' , true )?>
                                </div>
                                <div class="hidden cell">
                                    Payment
                                </div>
                                <div class="cell">
                                    <?php echo $ucost?>
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