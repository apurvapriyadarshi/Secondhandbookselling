<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$username="root";
$password="";
$server="localhost";
$database="book2";
$con = @mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
  if (!$con)     {     die('Could not connect: ' . mysql_error());     }     mysql_select_db("$database", $con);

/*$bymail=$_POST['bymail'];
$byname=$_POST['byname'];
$bycontact=$_POST['bycontact'];*/
    
$byname= isset($_POST['byname']) ? $_POST['byname'] : '';  
$bycontact=isset($_POST['bycontact']) ? $_POST['bycontact'] : ''; 
$bymail= isset($_POST['bymail']) ? $_POST['bymail'] : '';            

  $query="insert into buyer values( NULL,'$byname','$bycontact','$bymail')";
$result=mysql_query($query);
if($result==NULL)
{
    echo "Error in name/contact/mail";
}
else
{
    echo "SUbmission Sucessful";
    echo "<br>";
    echo "<br>";
    echo "<a href='index.html'>Back to main page</a>";
}

mysql_close();
?>
