<?php
include('config.php');
if(isset($_POST['btn_reg'])){
    
  
    
    $r="INSERT INTO `order_bill`(`ob_id`, `c_id`,`name`, `email`, `mobile`, `address`,`r_date`, `r_time`,`bill_price`) VALUES (NULL ,'$d_detail[c_id]','$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[address]','$date','$time','$_POST[price]');";
    
    $m="SELECT * FROM `order_bill` WHERE `c_id`='$d_detail[c_id]' ORDER BY `ob_id` DESC;";
    
    // $mn=$con->query($m);
    // echo "abc";
    if($con->query($r)==TRUE AND $mn=$con->query($m)){
    
    // echo "a";
    $val2=$mn->fetch_assoc();
    // echo "b";
    $qry="SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]'";
    // echo "c";
    $res=$con->query($qry);
    // echo "d";
    $n=$res->num_rows;
    // echo "e";
    $total_price=0;
    $total_mrp=0;
    $total_dp=0;
    while($val=$res->fetch_assoc()){
        
        
        $total_mrp=$total_mrp+$val['p_mrp'];
        $total_dp=$total_dp+$val['p_dp'];
        $total_price=$total_price+$val['p_total'];
        
        
       $f="INSERT INTO `order_bill_detail`(`obd_id`, `ob_id`, `c_id`,`p_id`, `p_qty`, `p_mrp`, `p_dp`, `p_total`, `r_date`, `r_time`) VALUES (NULL,'$val2[ob_id]','$d_detail[c_id]','$val[p_id]','$val[p_qty]','$val[p_mrp]','$val[p_dp]','$val[p_total]','$date','$time');";
       
        $admn="SELECT * FROM `admin_wallet` WHERE `idaa`='1'";
         $ad_val=$con->query($admn);
         $aad_num=$ad_val->num_rows;
         
         
        if($con->query($f)==TRUE  AND $aad_num>0){
           
            $value=$ad_val->fetch_assoc();
            $val_ad=$value[admin_wallet]+$total_price;
            $s="DELETE FROM `add_cart` WHERE `c_id`='$d_detail[c_id]';";
            $ad="UPDATE `admin_wallet` SET `admin_wallet`='$val_ad'";
             
            if( $con->query($s)===TRUE AND $con->query($ad)===TRUE ){
                echo"<script>alert('Ordered Successfull');location.href='index.php';</script>";
            }else{
                $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Order Fail Query');";
    	        $con->query($fail);
            echo "<script>alert('Order Failed plz try again'); location.href='index.php?q=2';</script>";
           }
        
            }else{
                $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Order Fail Query');";
    	        $con->query($fail);
            echo "<script>alert('Order Failed plz try again'); location.href='index.php?q=1';</script>";
    }
}
}
}
?>