<?php
include("includes/config.php");

if ((isset($_POST["name"])) && (isset($_POST["email"])) && (isset($_POST["phone"])) && (isset($_POST["subject"])) && (isset($_POST["message"]))) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $package = $_POST["package"];
    $service = $_POST["service"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    if(!( (empty($name)) || (empty($email)) || (empty($phone)) || (empty($subject)) || (empty($message)) )){
        $sname = sanitizeInput($name);
        $semail = sanitizeInput($email);
        $sphone = sanitizeInput($phone);
        $ssubject = sanitizeInput($subject);
        $smessage = sanitizeInput($message);

        $_SESSION["tusername"]=$sname;
        $_SESSION["temail"]=$semail;
        $_SESSION["tphone"]=$sphone;
        $_SESSION["tpackage"]=$package;
        $_SESSION["tservice"]=$service;
        $_SESSION["tsubject"]=$ssubject;
        $_SESSION["tmessage"]=$smessage;
        $_SESSION["torder"]=true;

        setcookie("ordercustomername", $sname, time()+60*60*24);
        setcookie("ordercustomeremail", $semail, time()+60*60*24);
        setcookie("ordercustomerphone", $sphone, time()+60*60*24);

        $scost = 0;
        $_SESSION["tcustomcharges"]=$customcharges;
        if($package=="basic"){
            $_SESSION["tpackagecost"]=$basiccost;
            if($service=="service-sd"){
                $scost = $basiccost + $sdcost + $customcharges;
                $_SESSION["tservicecost"]=$sdcost;
            }
            else if($service=="service-wad"){
                $scost = $basiccost + $wadcost + $customcharges;
                $_SESSION["tservicecost"]=$wadcost;
            }
            else if($service=="service-mad"){
                $scost = $basiccost + $madcost + $customcharges;
                $_SESSION["tservicecost"]=$madcost;
            }
        }
        else if($package=="advanced"){
            $_SESSION["tpackagecost"]=$advancedcost;
            if($service=="service-sd"){
                $scost = $advancedcost + $sdcost + $customcharges;
                $_SESSION["tservicecost"]=$sdcost;
            }
            else if($service=="service-wad"){
                $scost = $advancedcost + $wadcost + $customcharges;
                $_SESSION["tservicecost"]=$wadcost;
            }
            else if($service=="service-mad"){
                $scost = $advancedcost + $madcost + $customcharges;
                $_SESSION["tservicecost"]=$madcost;
            }
        }
        else if($package=="premium"){
            $_SESSION["tpackagecost"]=$advancedcost;
            if($service=="service-sd"){
                $scost = $premiumcost + $sdcost + $customcharges;
                $_SESSION["tservicecost"]=$sdcost;
            }
            else if($service=="service-wad"){
                $scost = $premiumcost + $wadcost + $customcharges;
                $_SESSION["tservicecost"]=$wadcost;
            }
            else if($service=="service-mad"){
                $scost = $premiumcost + $madcost + $customcharges;
                $_SESSION["tservicecost"]=$madcost;
            }
        }

        $_SESSION["tcost"]=$scost;

        $strippedsubject = str_replace(' ', '', $ssubject);
        $strippedsubject = strtolower($strippedsubject);
        
        $file = fopen("orders/" .$service. "-" .$package. "-" .$semail. "-" .$strippedsubject. ".php","w") or die("Unable to open file!");
        $txt = '<?php' . "\n";

        fwrite($file, $txt);
        $txt = '$uname ="' .$sname. '";'."\n";
        fwrite($file, $txt);
        $txt = '$uemail ="' .$semail. '";'."\n";
        fwrite($file, $txt);
        $txt = '$uphone ="' .$sphone. '";'."\n";
        fwrite($file, $txt);
        $txt = '$upackage ="' .$package. '";'."\n";
        fwrite($file, $txt);
        $txt = '$uservice ="' .$service. '";'."\n";
        fwrite($file, $txt);
        $txt = '$usubject ="' .$ssubject. '";'."\n";
        fwrite($file, $txt);
        $txt = '$umessage ="' .$smessage. '";'."\n";
        fwrite($file, $txt);
        $txt = '$ucost ="' .$scost."$". '";'."\n";
        fwrite($file, $txt);

        $txt = '?>';
        fwrite($file, $txt);
        fclose($file);

        header("Location: order-confirmed.php");
    }
    else{
        header("Location: order.php?order-status=EMP");
    }
}
else{
    header("Location: unauthorized.php");
}