<?php

session_start();

if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Visits=". $_SESSION['views'];


$old_sessionid = session_id();

session_regenerate_id();

$new_sessionid = session_id();

echo "<br /> Session ID: $new_sessionid<br /> ";

date_default_timezone_set("Europe/London");
echo date("H:i:s  d/m/Y <br />");

$name="";
$pas="";
$dbname="";
$con=mysql_connect("localhost",$name,$pas);
mysql_select_db($dbname,$con);

$xyz = "insert into session values('$new_sessionid')";
 
$agent = $_SERVER['HTTP_USER_AGENT'];

echo "<br /> Connected to MySQL <br />";
 

echo "<br /> This is a redirected page for iPhones <br />";

echo $agent;


?>
