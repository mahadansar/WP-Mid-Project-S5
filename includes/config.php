<?php
session_start();

function sanitizeInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    $cp = "";
    $path = "http://localhost:8080/project/";
    

    $basiccost=500;
    $advancedcost=1000;
    $premiumcost=1500;
    $sdcost=1350;
    $wadcost=600;
    $madcost=1050;
    $customcharges=400;