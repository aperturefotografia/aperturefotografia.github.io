<?php

session_start ();
  
include("config.php"); 
if(isset($_REQUEST['sub'])){
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];

$res = mysqli_query($mysqli,"select* from cadastro where username='$a'and password='$b'");
$result=mysqli_fetch_array($res);

if($result>0){
	
	$_SESSION["login"]="1";
	header("location:../index.php");
}
else	{
	header("location:/view/login.php?err=1");
	
}
}
?>
