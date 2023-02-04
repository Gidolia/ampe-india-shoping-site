<?php 
include "config.php";
if($_GET[m]=="as"){
    top_structure('Banner', 1, 'success', 'Added', 'Banner added Successfully');
}elseif($_GET[m]=="af"){
    top_structure('Banner', 1, 'warning', 'Failed', 'Banner added Failed');
}elseif($_GET[m]=="ds"){
    top_structure('Banner', 1, 'success', 'Deleted', 'Banner deleted Successfully');
}elseif($_GET[m]=="df"){
    top_structure('Banner', 1, 'warning', 'Failed', 'Banner deletion Failed');
}else{
    top_structure('Banner', 0, 'warning', 'Success', 'done');    
}

sidebar();
header_bar();?>

   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Banner</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Add New Banner</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                      <!--  <div class="item form-group">-->
                      <!--  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Banner Position<span class="">*</span>-->
                      <!--  </label>-->
                      <!--  <div class="col-md-6 col-sm-6 ">-->
                      <!--    <select required="required" class="form-control " name="b_pos"> -->
                      <!--        <option value="1">Home</option>-->
                      <!--        <option value="2">Shop</option>-->
                      <!--        <option value="3">Contact</option>-->
                      <!--        <option value="4">Order</option>-->
                      <!--        <option value="5">My Account</option>-->
                      <!--        <option value="6">Product Detail</option>-->
                      <!--    </select>-->
                      <!--  </div>-->
                      <!--</div>-->
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Banner Image 1<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img1" required="required" class="form-control ">
                        </div>
                      </div>
                 
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="ad_cat" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
            </form>
<?php
    if(isset($_POST['ad_cat']))
    {
        $unqid=rand(10000,99999);
        $mk="SELECT MAX(bid) AS max_id FROM `banner`";
        $x=$con->query($mk);
        $fe=$x->fetch_assoc();
        //$cc=$con->query($mk);
        if (file_exists("banner" .$fe['unqid'].".jpg"))
        {
                unlink("banner" .$fe['unqid'].".jpg");
                  echo "already exists";
        }
      
        if(move_uploaded_file($_FILES['img1']['tmp_name'], "images/banner".$unqid.".jpg") )
		{
		    $file1="banner".$unqid.".jpg";
            $rf="INSERT INTO `banner`(`bid`, `banner_position`,`image1`,`unqid`) VALUES ('null','','$file1','$unqid')";
          
        if($con->query($rf)===TRUE)
            {
                echo "<script>location.href='addBanner.php?m=as';</script>";
            }else{
                echo "<script>location.href='addBanner.php?m=af';</script>";
            }
		}
        
    }
    ?>
            
            </div>
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category List</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
        <table class="table table-striped table-bordered table-responsive" id="datatable">
            <thead><tr><th>S.No</th><th>Banner</th><th>Banner Position</th><th>Action</th></tr></thead>
            <?php
            $a=0;
            $g="SELECT * FROM `banner`";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { 
                $a++; ?>
            <tr>
                <td><?php echo $a;?></td>
                <th><img src="./images/<?php echo $d['image1'];?>" height="70px" weight="70px">
                </th>
                <th>
                    <?php
                    if($d[banner_position]=="1"){
                        echo "Home";
                    }elseif($d[banner_position]=="2"){
                        echo "Shop";
                    }elseif($d[banner_position]=="3"){
                        echo "Contact";
                    }elseif($d[banner_position]=="4"){
                        echo "Order";
                    }elseif($d[banner_position]=="5"){
                        echo "My Account";
                    }elseif($d[banner_position]=="6"){
                        echo "Product Detail";
                    }
                    ?>
                </th>
                
                
                <td>
                    <a href="delete_banner.php?id=<?php echo $d['bid'];?>"><button class="btn btn-danger" >Delete</button></a>
                </td>
                
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
       
<?php 
bottom_structure('ARZOO');

?>