<?php
include('config.php');
if(isset($_POST[upd])){
   
    //Fetch PRoduct Detail and update quantity
$sel=$con->query("SELECT * FROM `product` WHERE `p_id`='$_POST[pid]'");
$val=$sel->fetch_assoc();
$mq=$val[qty]-($_POST[qty]-1);
$upd="UPDATE `product` SET `qty`='$mq' WHERE `p_id`='$_POST[pid]'";

//update qty in add to cart
$total1=$_POST[qty]*$_POST[d];

$res="UPDATE `add_cart` SET `p_qty`='$_POST[qty]',`p_total`='$total1' WHERE `ac_id`='$_POST[id]' AND `p_id`='$_POST[pid]'";

if($con->query($res)===TRUE AND $con->query($upd)===TRUE ){
    echo "<script>alert('quantity updated');location.href='checkout.php';</script>";
}else{
    $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Quantity update Query');";
    	        $con->query($fail);
            echo "<script>alert('Quantity Update Failed plz try again'); location.href='checkout.php';</script>";
}

}



if(isset($_POST['remove'])){
    //Fetch PRoduct Detail and update quantity
$sel=$con->query("SELECT * FROM `product` WHERE `p_id`='$_POST[pid]'");
$val=$sel->fetch_assoc();
$mq=$val[qty]+($_POST[qty]);
$upd=$con->query("UPDATE `product` SET `qty`='$mq' WHERE `p_id`='$_POST[pid]'");

//$total1=$_POST[qty]*$_POST[dp];  

//$total=($total1*0.05);
//$total_coin=$d_detail[coins]+$total;    

// $res1=$con->query("UPDATE `costumer` SET `coins`='$total_coin' WHERE `c_id`='$d_detail[c_id]'");

//delete qty in add to cart
$res=$con->query("DELETE FROM `add_cart` WHERE `ac_id`='$_POST[id]'");
if($res===TRUE ){
    echo "<script>alert('Product Removed');location.href='checkout.php';</script>";
}else{
    $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Quantity update Query');";
    	        $con->query($fail);
            echo "<script>alert('Product Remove Failed plz try again'); location.href='checkout.php';</script>";
}

}


?>