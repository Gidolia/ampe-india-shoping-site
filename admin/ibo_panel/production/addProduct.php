<?php 
include "config.php";
if($_GET[m]=="as"){
    top_structure('Add Product', 1, 'success', 'Added', 'Product added Successfully');
}elseif($_GET[m]=="af"){
    top_structure('Add Product', 1, 'warning', 'Failed', 'Product added Failed');
}elseif($_GET[m]=="asi"){
    top_structure('Add Product', 1, 'warning', 'Failed', 'Image Upload Failed');
}elseif($_GET[m]=="es"){
    top_structure('Add Product', 1, 'success', 'Edited', 'Product edited Successfully');
}elseif($_GET[m]=="ef"){
    top_structure('Add Product', 1, 'warning', 'Failed', 'Product edited Failed');
}elseif($_GET[m]=="ds"){
    top_structure('Add Product', 1, 'success', 'Deleted', 'Product deleted Successfully');
}elseif($_GET[m]=="df"){
    top_structure('Add Product', 1, 'warning', 'Failed', 'Product deletion Failed');
}else{
    top_structure('Add Product', 0, 'warning', 'Success', 'done');    
}

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
                    <h3>Add New Product</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                             <select name="category" class="form-control ">
           <?php
            $yr=0;
            $hfgh="SELECT * FROM `category`";
            $dff=$con->query($hfgh);
            while($tr=$dff->fetch_assoc())
            { $yr++;    ?>
                     <option value="<?php echo $tr['cat_id'];?>"><?php echo $tr['cat_name'];?></option>  

            <?php  }    ?>                
                          </select>
                        </div>
                      </div>
                      <!--  <div class="item form-group">-->
                      <!--  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Type *<span class="required">*</span>-->
                      <!--  </label>-->
                      <!--  <div class="col-md-8 col-sm-8 ">-->
                      <!--    <select name="p_type" class="form-control ">-->
                      <!--      <option value="1">Select Product Type</option>  -->
                      <!--      <option value="2">Most Selling</option>  -->
                      <!--      <option value="3">Top Products</option>  -->
                      <!--      <option value="4">Latest Products</option> -->
                      <!--    </select>-->
                      <!--  </div>-->
                      <!--</div>-->
                     
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="cat_name" required="required" class="form-control ">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image 1<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="file" name="img_1" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image 2<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="file" name="img_2" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image 3<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="file" name="img_3" required="required" class="form-control ">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">MRP <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="mrp" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">DP <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="dp" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Available Qty <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="qty" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Discount <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="discount" required="required" class="form-control ">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Short Description <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
    <div class="x_panel">
		<div class="x_title">
			<h2>Add Short Description<small><small></h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
					</ul>
				<div class="clearfix"></div>
			</div>
		<div class="x_content">
	<div class="item form-group">
    <div class="col-md-12 col-sm-12">
    	<textarea id="mytextarea" name="short_des"><?php echo $fe[short_description]?></textarea>
    </div>
</div>
    <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
    console.error( error );
                } );
    </script>								
							
						</div>
					</div>
				</div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Long Description <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
    <div class="x_panel">
		<div class="x_title">
			<h2>Add Long Description<small><8small></h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
					</ul>
				<div class="clearfix"></div>
			</div>
		<div class="x_content">
	<div class="item form-group">
    <div class="col-md-12 col-sm-12">
    	<textarea id="mytextarea" name="long_des"><?php echo $fe[long_description]?></textarea>
    </div>
</div>
    <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
    console.error( error );
                } );
    </script>								
							
						</div>
					</div>
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
   
    ?>
            
            </div>
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Product List</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
        <table class="table table-striped table-bordered " id="datatable">
            <thead><tr><th>ID</th><th>Name</th><th>Image1</th><th>Image1</th><th>Image1</th><th>Action</th></tr></thead>
            <?php
            $a=0;
            $g="SELECT * FROM `product`";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { $a++; ?>
            <tr>
                <td><?php echo $a;?></td>
                <td><?php echo $d['name'];?></td>
                <th><img src="./images/<?php echo $d['image1'];?>" height="100px" weight="100px"></th>
                <th><img src="./images/<?php echo $d['image2'];?>" height="100px" weight="100px"></th>
                <th><img src="./images/<?php echo $d['image3'];?>" height="100px" weight="100px"></th>
                
                <td><a href="edit_product.php?id=<?php echo $d['p_id'];?> "><button class="btn btn-success">Edit</button></a>
                    <a href="delete_product.php?id=<?php echo $d['p_id'];?>"><button class="btn btn-danger" >Delete</button></a>
                    <a href="view_product_detail.php?id=<?php echo $d['p_id'];?>"><button class="btn btn-primary" >View Detail</button></a>
                    
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
       
       
        if(move_uploaded_file($_FILES["img_1"]["tmp_name"], "images/pro_a".$fe['max_id'].".jpg")){
        
            //Image1
            $img1="pro_a" .$fe['max_id'].".jpg";
            
            //Image2
            if(move_uploaded_file($_FILES["img_2"]["tmp_name"], "images/pro_b".$fe['max_id'].".jpg")){
                $img2="pro_b" .$fe['max_id'].".jpg";
            }else{
                $img2="";   
            }
            
            //Image3
            if(move_uploaded_file($_FILES["img_3"]["tmp_name"], "images/pro_c".$fe['max_id'].".jpg")){
                $img3="pro_c" .$fe['max_id'].".jpg";
            }else{
                $img3="";   
            }
            
            $cid=$_POST['category'];
            $name=$_POST['cat_name'];
            $mrp=$_POST['mrp'];
            $dp=$_POST['dp'];
            $qty=$_POST['qty'];
            $sd=$_POST['short_des'];
            $ls=$_POST['long_des'];
            $dic=$_POST['discount'];
            $unq=$my['unq_id'];
            
            //Category Name
            $sss=$con->query("SELECT * FROM `category` WHERE `cat_id`='$cid'");
            $cct=$sss->fetch_assoc();
            
            
    $hg="INSERT INTO `product`(`p_id`, `cat_id`,`cat_name`, `unq_id`,`name`,`image1`, `image2`, `image3`, `mrp`, `dp`, `qty`, `short_description`, `long_description`, `date`, `time`) VALUES ('Null','$cid','$cct[cat_name]','$unq','$name','$img1','$img2','$img3','$mrp','$dp','$qty','$sd','$ls','$date','$time')";
    
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