<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$d=$con->query("SELECT * FROM `banner` WHERE `bid`='$id';");
	$val=$d->fetch_assoc();
	$del="DELETE FROM `banner` WHERE `bid`='$id'";
    if($con->query($del)===TRUE){
        unlink('images/'.$val[image1]);
        
    header('Location:./addBanner.php?m=ds');    
    }else{
    header('Location:./addBanner.php?m=df');
    }


?>