<?php 
	include("./includes/config.php"); 
    $cp="order";
    
    if(isset($_SESSION["torder"])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Order Completed - WS Technologies</title>
	<?php include("./includes/css-js.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>
    <section id="order-confirmed-padding-top">
        <div class="order-confirmed-blackbar">
            <h3>Your Order:</h3>
        </div>
        <div id="order-confirmed-sec1">
            <div id="order-confirmed-div1">
                <h3>Personal Details:</h3>
                <p>• Name: 
                    <?php if(isset($_SESSION["tusername"]))
                        echo $_SESSION["tusername"] ?>
                </p>
                <p>• Email: 
                    <?php if(isset($_SESSION["temail"]))
                        echo $_SESSION["temail"] ?>
                </p>
                <p>• Phone: 
                    <?php if(isset($_SESSION["tphone"]))
                        echo $_SESSION["tphone"] ?>
                </p>
                <h3>Service Details:</h3>
                <p>• Package: 
                <?php if(isset($_SESSION["tpackage"])){
                        if($_SESSION["tpackage"] == "basic"){
                            echo "Basic";
                        }
                        else if($_SESSION["tpackage"] == "advanced"){
                            echo "Advanced";
                        }
                        else if($_SESSION["tpackage"] == "premium"){
                            echo "Premium";
                        }
                        else{
                            echo "Undefined";
                        }
                    }
                    ?>
                </p>
                <p>• Service: 
                    <?php if(isset($_SESSION["tservice"])){
                        if($_SESSION["tservice"] == "service-sd"){
                            echo "Software Development";
                        }
                        else if($_SESSION["tservice"] == "service-wad"){
                            echo "Web Application Development";
                        }
                        else if($_SESSION["tservice"] == "service-mad"){
                            echo "Mobile Application Development";
                        }
                        else{
                            echo "Undefined";
                        }
                    }
                    ?>
                </p>
                <p>• Subject: 
                    <?php if(isset($_SESSION["tsubject"]))
                        echo $_SESSION["tsubject"] ?>
                </p>
                <h3>Payment Details:</h3>
                <p>• Package Charges: 
                    <?php if(isset($_SESSION["tpackagecost"]))
                        echo $_SESSION["tpackagecost"]."$" ?>
                </p>
                <p>• Service Charges: 
                    <?php if(isset($_SESSION["tservicecost"]))
                        echo $_SESSION["tservicecost"]."$" ?>
                </p>
                <p>• Custom Charges: 
                    <?php if(isset($_SESSION["tcustomcharges"]))
                        echo $_SESSION["tcustomcharges"]."$" ?>
                </p>

                <h4>Total Bill: 
                    <?php if(isset($_SESSION["tcost"]))
                        echo $_SESSION["tcost"]."$" ?>
                </h4>
            </div>
        </div>
        <div class="clear-fix"></div>
        <div class="order-confirmed-blackbar" id="bottom-blackbar-mod">
            <h4>Thanks for your order. An email will be sent upon completion!</h4>
        </div>
    </section>

    <?php include("./includes/footer.php"); ?>

</body>
</html>
<?php
    unset($_SESSION["torder"]);
    unset($_SESSION["tusername"]);
    unset($_SESSION["temail"]);
    unset($_SESSION["tphone"]);
    unset($_SESSION["tpackage"]);
    unset($_SESSION["tservice"]);
    unset($_SESSION["tsubject"]);
    unset($_SESSION["tservicecost"]);
    unset($_SESSION["tpackagecost"]);
    unset($_SESSION["tcustomcharges"]);
    unset($_SESSION["tcost"]);
}
else{
    header("Location: unauthorized.php");
}
?>