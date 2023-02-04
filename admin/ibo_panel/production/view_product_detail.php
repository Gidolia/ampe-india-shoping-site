<?php 
include "config.php";
top_structure('Product Detail', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>
<!--Page Content-->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script>
<!--Page Content-->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product Detail </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product Detail</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
<?php
$r=$con->query("SELECT * FROM `product` WHERE `p_id` ='$_GET[id]'");
$val=$r->fetch_assoc();
?>
        <table class="table table-bordered table-responsive " >
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th><?php echo $val[p_id]?></th>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <th><?php echo $val[name]?></th>
                </tr>
                <tr>
                    <th>Product Image</th>
                    <th><img src="images/<?php echo $val[image1]?>" style="height:80px;width:100px;">&nbsp;&nbsp;<img src="images/<?php echo $val[image2]?>" style="height:80px;width:100px;">&nbsp;&nbsp;<img src="images/<?php echo $val[image3]?>" style="height:80px;width:100px;"></th>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <th><?php echo $val[qty]?></th>
                </tr>
                <tr>
                    <th>M.R.P</th>
                    <th><?php echo "$".$val[mrp]?></th>
                </tr>
                <tr>
                    <th>Discount Price (D.P)</th>
                    <th><?php echo "$".$val[dp]?></th>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <th><?php echo $val[short_description]?></th>
                </tr>
                <tr>
                    <th>Long Descriotion</th>
                    <th><?php echo $val[long_description]?></th>
                </tr>
                <tr>
                    <th>Date / Time</th>
                    <th><?php echo $val[date]?>/<?php echo $val[time]?></th>
                </tr>
              <thead>      
          
         
            
        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
<!--Page Content-->
<?php 
bottom_structure('ARZOO');
if(isset($_POST[ad_cat])){
        
        $cid=$_POST[category];
        $abc=$con->query("SELECT * FROM `category` WHERE `cat_id`='$cid'");
        $my=$abc->fetch_assoc();
        $mk="SELECT MAX(p_id) AS max_id FROM `product` ";
        $x=$con->query($mk);
        $fe=$x->fetch_assoc();
       
        if (file_exists("pro1" .$fe['max_id'].".jpg"))
        {
        unlink("pro1" .$fe['max_id'].".jpg");
          echo $fe['max_id'].".jpg" . " already exists. ";
        }
        if(move_uploaded_file($_FILES["img_1"]["tmp_name"], "images/pro1".$fe['max_id'].".jpg"))
    {
        
            $img1="pro1" .$fe['max_id'].".jpg";
            $img2="pro2" .$fe['max_id'].".jpg";
          //  $pid=$fe['p_id'];
            $cid=$_POST['category'];
            $name=$_POST['cat_name'];
            $mrp=$_POST['mrp'];
            $dp=$_POST['dp'];
            $qty=$_POST['qty'];
            $sd=$_POST['short_des'];
            $ls=$_POST['long_des'];
            $dic=$_POST['discount'];
            $unq=$my['unq_id'];
            
    $hg="INSERT INTO `product`(`p_id`, `cat_id`, `unq_id`, `name`, `image1`,  `mrp`, `dp`, `qty`, `short_description`, `long_description`, `date`, `time`) VALUES (NULL,'$cid','$unq','$name','$img1','$mrp','$dp','$qty','$sd','$ls','$date','$time');";
            if($con->query($hg)==TRUE)
            {
                echo "<script>
                       location.href='addProduct.php?m=as';</script>";
            }
            else{ 
                echo "<script>
                      location.href='addProduct.php?m=af';</script>";
            }
              
            }else{ 
            echo "<script>
    location.href='addProduct.php?m=asi';</script>";
                
            }
    }
    
?>