<?php
include("includes/config.php");

if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-99999, '/');
}
session_destroy();

header("Location: index.php");