<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/*var $username;var $password;
var $server;var $database;var $bymail;
var $byname;var $bycontact;
var $sname;var $scontact;
var $smail;var $bname;
var $bprice;var $aname;
var $fileToUpload;*/
$username="root";
$password="";
$server="localhost";
$database="book2";
$con = @mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
  if (!$con)     {     die('Could not connect: ' . mysql_error());     }     mysql_select_db("$database", $con);

//error_reporting(E_ALL ^ E_DEPRECATED);

/*$bymail=$_POST['bymail'];
$byname=$_POST['byname'];
$bycontact=$_POST['bycontact'];*/
$sname="";
$scontact=0;
$smail="";
$bname="";
$bprice=0;
$aname=NULL;
$fileToUpload=NULL;
    
$sname= isset($_POST['sname']) ? $_POST['sname'] : '';  

$scontact=isset($_POST['scontact']) ? $_POST['scontact'] : ''; 
    
$smail= isset($_POST['smail']) ? $_POST['smail'] : '';            
    
$bname= isset($_POST['bname']) ? $_POST['bname'] : '';            

$bprice= isset($_POST['bprice']) ? $_POST['bprice'] : '';            
   
$aname= isset($_POST['aname']) ? $_POST['aname'] : '';    
    
$fileToUpload= isset($_POST['fileToUpload']) ? $_POST['fileToUpload'] : '';            

  $query="insert into seller values( NULL,'$sname','$scontact','$smail')";
$result=mysql_query($query);
if($result==FALSE)
{
    echo "Error in name/contact/mail";
}


$temp11="select sellerid from seller where sellername='$sname'" ;

$ans11=mysql_query($temp11);
$ans12=mysql_fetch_assoc($ans11);
$sid = $ans12['sellerid'];
$query1="insert into book values( NULL ,'$bname','$aname','$bprice','$sid','$fileToUpload')";
$result1=mysql_query($query1);
if($result1==FALSE)
{
echo "Error in input";
}
else
{
 echo "Data inserted";
    echo "<br>";
    echo "<br>";
    echo "<a href='index.html'>Back to main page</a>";
}

mysql_close();
?>
