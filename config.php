<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

include("./database_connect.php");
$a=$_SESSION['id'];
$b=$_SESSION['pass'];
$que="SELECT * FROM `costumer` WHERE `email`='$a' AND `password`='$b'";

$res=$con->query($que);
  if ($res->num_rows != 1)
  {     
      echo "<script>location.href='./login.php';</script>";
  }
  else{

	  $d_detail=$res->fetch_assoc();
	 
  }
?>