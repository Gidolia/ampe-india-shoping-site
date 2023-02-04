<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$d=$con->query("SELECT * FROM `advertisement` WHERE `ad_id`='$id';");
	$val=$d->fetch_assoc();
	$del="DELETE FROM `advertisement` WHERE `ad_id`='$id'";
    if($con->query($del)===TRUE){
        unlink('advertisement/'.$val[adv1]);
        unlink('advertisement/'.$val[adv2]);
        unlink('advertisement/'.$val[adv3]);
        unlink('advertisement/'.$val[adv4]);
        unlink('advertisement/'.$val[adv5]);
        unlink('advertisement/'.$val[adv6]);
        unlink('advertisement/'.$val[adv7]);
        unlink('advertisement/'.$val[adv8]);
        
    header('Location:./add_advertisement_banner.php?m=ds');    
    }else{
    header('Location:./add_advertisement_banner.php?m=df');
    }


?>