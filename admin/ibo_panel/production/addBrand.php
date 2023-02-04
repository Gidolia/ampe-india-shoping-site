<?php 
include "config.php";
if($_GET[m]=="as"){
    top_structure('Brand', 1, 'success', 'Added', 'Brand added Successfully');
}elseif($_GET[m]=="af"){
    top_structure('Brand', 1, 'warning', 'Failed', 'Brand added Failed');
}elseif($_GET[m]=="ds"){
    top_structure('Brand', 1, 'success', 'Deleted', 'Brand deleted Successfully');
}elseif($_GET[m]=="df"){
    top_structure('Brand', 1, 'warning', 'Failed', 'Brand deletion Failed');
}else{
    top_structure('Brand', 0, 'warning', 'Success', 'done');    
}

sidebar();
header_bar();?>

   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Brand</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Add New Brand</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                       
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Brand Logo <span class="">*</span>
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
        $mk="SELECT MAX(br_id) AS max_id FROM `brand`";
        $x=$con->query($mk);
        $fe=$x->fetch_assoc();
        //$cc=$con->query($mk);
        if (file_exists("brand" .$fe['unqid'].".jpg"))
        {
                unlink("brand" .$fe['unqid'].".jpg");
                  echo "already exists";
        }
      
        if(move_uploaded_file($_FILES['img1']['tmp_name'], "images/brand".$unqid.".jpg") )
		{
		    $file1="brand".$unqid.".jpg";
            $rf="INSERT INTO `brand`(`br_id`,`brand_image`) VALUES ('null','$file1')";
          
        if($con->query($rf)===TRUE)
            {
                echo "<script>location.href='addBrand.php?m=as';</script>";
            }else{
                echo "<script>location.href='addBrand.php?m=af';</script>";
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
                    <h2>Brand List</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
        <table class="table table-striped table-bordered" id="datatable">
            <thead><tr><th>S.No</th><th>Brand Logo</th><th>Action</th></tr></thead>
            <?php
            $a=0;
            $g="SELECT * FROM `brand`";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { 
                $a++; ?>
            <tr>
                <td><?php echo $a;?></td>
                <th><img src="./images/<?php echo $d['brand_image'];?>" height="70px" weight="70px">
                </th>
                
                
                
                <td>
                    <a href="delete_brand.php?id=<?php echo $d['br_id'];?>"><button class="btn btn-danger" >Delete</button></a>
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
bottom_structure('ToyMyBoy');

?>