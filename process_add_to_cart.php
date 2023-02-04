<?php
include('config.php');

//If Same product added again in cart 
$mm="SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]' AND `p_id`='$_GET[id]'"; 
$st=$con->query($mm);
$mms=$st->fetch_assoc();
if($mms['p_id']==$_GET['id']){
    if($_POST['quantity']!="" AND isset($_POST['quantity'])){
        $p_qty=$_POST['quantity'];
    }else{
        $p_qty="1";
    }

    $r=$con->query("SELECT * FROM `product` WHERE `p_id`='$_GET[id]'");
    $res=$r->fetch_assoc();
    $qty=$res['qty']-$p_qty;
    $myqty=$mms['p_qty']+$p_qty;
    $myto=$myqty * $res['dp'];
    
    $qry="UPDATE `add_cart` SET `p_qty`='$myqty',`p_total`='$myto' WHERE `c_id`='$mms[c_id]' AND `p_id`='$_GET[id]'";
   
    $upd="UPDATE `product` SET `qty`='$qty' WHERE `p_id`='$_GET[id]'";
    
        if($con->query($qry)===TRUE AND $con->query($upd)===TRUE){
            echo "<script>alert('Added To Cart');location.href='checkout.php';</script>";
        }else{
            $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Added to cart Query');";
    	        $con->query($fail);
            echo "<script>alert('Failed ! Added To Cart plz try again'); location.href='index.php';</script>";
        }
    
}else{

if($_POST['quantity']!="" AND isset($_POST['quantity'])){
    $p_qty=$_POST['quantity'];
}else{
    $p_qty="1";
}

$r=$con->query("SELECT * FROM `product` WHERE `p_id`='$_GET[id]'");
$res=$r->fetch_assoc();
$qty=$res['qty']-1;

$s=$con->query("SELECT * FROM `category` WHERE `cat_id`='$res[cat_id]'");
$res1=$s->fetch_assoc();

$r=$con->query("INSERT INTO `add_cart`(`ac_id`, `c_id`, `cat_id`, `cat_name`, `p_id`, `p_name`, `p_image`,`p_mrp`, `p_dp`, `p_qty`, `p_total`,`date`, `time`) VALUES (NULL,'$d_detail[c_id]','$res1[cat_id]','$res1[cat_name]','$_GET[id]','$res[name]','$res[image1]','$res[mrp]','$res[dp]','$p_qty','$res[dp]','$date','$time');");

$upd=$con->query("UPDATE `product` SET `qty`='$qty' WHERE `p_id`='$_GET[id]'");
if($r===TRUE AND $upd===TRUE){
    echo "<script>alert('Added To Cart');location.href='checkout.php';</script>";
}else{
    $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Added to cart Query');";
    	        $con->query($fail);
            echo "<script>alert('Failed ! Added to cart plz try again'); location.href='index.php';</script>";
}
}
?>