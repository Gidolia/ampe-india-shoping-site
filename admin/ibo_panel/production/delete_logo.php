<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$d=$con->query("SELECT * FROM `logo` WHERE `l_id`='$id';");
	$val=$d->fetch_assoc();
	$del="DELETE FROM `logo` WHERE `l_id`='$id'";
    if($con->query($del)===TRUE){
        unlink('images/'.$val[logo]);
        
    header('Location:./addLogo.php?m=ds');    
    }else{
    header('Location:./addLogo.php?m=df');
    }


?>