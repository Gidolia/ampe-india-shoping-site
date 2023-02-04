<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$d=$con->query("SELECT * FROM `brand` WHERE `br_id`='$id';");
	$val=$d->fetch_assoc();
	$del="DELETE FROM `brand` WHERE `br_id`='$id'";
    if($con->query($del)===TRUE){
        unlink('images/'.$val[brand_image]);
        
    header('Location:./addBrand.php?m=ds');    
    }else{
    header('Location:./addBrand.php?m=df');
    }


?>