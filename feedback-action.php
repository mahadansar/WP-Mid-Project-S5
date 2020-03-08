<?php
include("includes/config.php");


if ((isset($_POST["name"])) && (isset($_POST["email"])) && (isset($_POST["message"]))) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if(!( (empty($name)) || (empty($email)) || (empty($message)) )){
        $sname = sanitizeInput($name);
        $semail = sanitizeInput($email);
        $smessage = sanitizeInput($message);

        setcookie("feedbackcustomername", $sname, time()+60*60*24);
        setcookie("feedbackcustomeremail", $semail, time()+60*60*24);

        $tempMessage = substr($smessage,0,5);

        $_SESSION["tfeedback"]=true;

        $strippedname = str_replace(' ', '', $sname);
        $strippedname = strtolower($strippedname);
        $strippedemail = str_replace(' ', '', $semail);
        $strippedemail = strtolower($strippedemail);
        $strippedMessage = str_replace(' ', '', $tempMessage);
        $strippedMessage = strtolower($strippedMessage);

        $file = fopen("feedback/" .$strippedname. "-" .$strippedemail. "-" .$strippedMessage. ".php","w") or die("Unable to open file!");
        $txt = '<?php' . "\n";
        
        fwrite($file, $txt);
        $txt = '$uname ="' .$sname. '";'."\n";
        fwrite($file, $txt);
        $txt = '$uemail ="' .$semail. '";'."\n";
        fwrite($file, $txt);
        $txt = '$umessage ="' .$smessage. '";'."\n";
        fwrite($file, $txt);

        $txt = '?>';
        fwrite($file, $txt);
        fclose($file);

        header("Location: contact.php?feedback-status=success");
    }
    else{
        header("Location: contact.php?feedback-status=EMP");
    }
}
else{
    header("Location: unauthorized.php");
}