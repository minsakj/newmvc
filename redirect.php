<?php

   header('Location: http://minsakj.com/session.php') ;

$agent = $_SERVER['HTTP_USER_AGENT']; // Put browser name into local variable

if (preg_match("/iPhone/", $agent)) { // Apple iPhone Device
    // Send them to iphone sized homepage for mobile
    header("location: http://minsakj.com/iphone_home.php");

} else if (preg_match("/android/", $agent)) { // Google Device using Android OS
    // Send them to android sized homepage for mobile
    header("location: http://minsakj.com/android_home.php");
   
}
?>
