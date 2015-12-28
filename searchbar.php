<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$username="root";
$password="";
$server="localhost";
$database="book2";
$con = @mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
  if (!$con)     {     die('Could not connect: ' . mysql_error());     }     mysql_select_db("$database", $con);




mysql_close();
?>
