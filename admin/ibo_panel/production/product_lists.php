<?php 
include "config.php";
top_structure('Product By Category', 0, 'warning', 'Success', 'done');
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
                <h3>Product </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product List</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
        <table class="table table-striped table-bordered table-responsive" id="datatable">
            <thead><tr><th>ID</th><th>Name</th><th>Image1</th><th>Action</th></tr></thead>
            <?php
            $a=0;
            $g="SELECT * FROM `product` WHERE `cat_id`='$_GET[id]'";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { $a++; ?>
            <tr>
                <td><?php echo $a;?></td>
                <td><?php echo $d['name'];?></td>
                <th><img src="./images/<?php echo $d['image1'];?>" height="100px" weight="100px"></th>
                <!--<th><img src="./images/<?php echo $d['image2'];?>" height="100px" weight="100px"></th>-->
                <td><a href="edit_product.php?id=<?php echo $d['p_id'];?> "><button class="btn btn-success">Edit</button></a>
                    <a href="delete_product.php?id=<?php echo $d['p_id'];?>"><button class="btn btn-danger" >Delete</button></a>
                    <a href="view_product_detail.php?id=<?php echo $d['p_id'];?>"><button class="btn btn-primary" >View Detail</button></a></td>
                
            </tr>
            <?php
            }?>
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