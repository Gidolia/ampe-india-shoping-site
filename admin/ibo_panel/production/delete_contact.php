<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	
	$del="DELETE FROM `contact` WHERE `contact_id`='$id'";
    if($con->query($del)===TRUE){
        
        
    header('Location:./contact_list.php?m=cns');    
    }else{
    header('Location:./contact_list.php?ms=cnf');
    }


?>