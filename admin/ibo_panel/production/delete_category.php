
<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$d=$con->query("SELECT * FROM `category` WHERE `id`='$id';");
	$val=$d->fetch_assoc();
	$del="DELETE FROM `category` WHERE `id`='$id'";
    if($con->query($del)===TRUE){
        unlink('images/'.$val[cat_image]);
        
    header('Location:./addCategory.php?m=ds');    
    }else{
    header('Location:./addCategory.php?ms=df');
    }


?>