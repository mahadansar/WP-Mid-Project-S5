<?php
include("includes/config.php");
$admin_username = "admin";
$admin_password = '$2y$10$JpUqVZH6jbe2vAa3qcnjeuV/rgpyZ3vypMNvr88gcupxHuJmn0Gxi';

if (isset($_POST["un"]) && isset($_POST["pw"])) {
    $un = $_POST["un"];
    $pw = $_POST["pw"];
    $error = false;

    if(!( (empty($un)) || (empty($pw)) )){
        $sun = sanitizeInput($un);
        $spw = sanitizeInput($pw);

        if($sun == $admin_username)
        {
            if(password_verify($spw,$admin_password)==true)
            {
                $_SESSION["loggedin"]=true;
                $_SESSION["un"]=$sun;
                setcookie("adminusername", $sun, time()+60*60);
                header("Location: admin.php");
            }
            else{
                header("Location: admin-login.php?status=ERRpw");
            }
        }
        else{
            header("Location: admin-login.php?status=ERRun");
        }
    }
    else{
        header("Location: admin-login.php?status=EMP");
    }
}
else{
    header("Location: unauthorized.php");
}