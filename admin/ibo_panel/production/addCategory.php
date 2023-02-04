<?php 
include "config.php";
if($_GET[m]=="as"){
    top_structure('Add Category', 1, 'success', 'Added', 'Category added Successfully');
}elseif($_GET[m]=="af"){
    top_structure('Add Category', 1, 'warning', 'Failed', 'Category added Failed');
}elseif($_GET[m]=="es"){
    top_structure('Add Category', 1, 'success', 'Edited', 'Category edited Successfully');
}elseif($_GET[m]=="ef"){
    top_structure('Add Category', 1, 'warning', 'Failed', 'Category edited Failed');
}elseif($_GET[m]=="ds"){
    top_structure('Add Category', 1, 'success', 'Deleted', 'Category deleted Successfully');
}elseif($_GET[m]=="df"){
    top_structure('Add Category', 1, 'warning', 'Failed', 'Category deletion Failed');
}else{
    top_structure('Add Category', 0, 'warning', 'Success', 'done');    
}

sidebar();
header_bar();?>

   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Category</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Add New Category</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Add Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="cat_name" required="required" class="form-control " placeholder="Add Category">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Image <span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img" required="required" class="form-control ">
                        </div>
                      </div>
                      <!--<div class="item form-group">-->
                      <!--  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Banner Image <span class="">*</span>-->
                      <!--  </label>-->
                      <!--  <div class="col-md-6 col-sm-6 ">-->
                      <!--    <input type="file" name="img1" required="required" class="form-control ">-->
                      <!--  </div>-->
                      <!--</div>-->
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="ad_cat" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
            </form>
<?php

/////////////////////// Enter New Category///////////////////////////
function lp_name($bin) 
{
  $data = 'abcdefghijklmnopqrst';
  return substr(str_shuffle($data), 0, $bin);
}
for($x=0; $x<100; $x++)
{
    //echo $x;
    $hfuy=lp_name(1);  

    $ismd="SELECT * FROM `category` WHERE `cat_id`='$hfuy'";
    $qr=$con->query($ismd);
    if(mysqli_num_rows($qr)==0)
    {
        break;
    }
}

/////////////////////// end Enter New Category///////////////////////////
    
    if(isset($_POST['ad_cat']))
    {
        $unqid=rand(10000,99999);
        $mk="SELECT MAX(id) AS max_id FROM `category`";
        $x=$con->query($mk);
        $fe=$x->fetch_assoc();
        //$cc=$con->query($mk);
        if (file_exists("cat" .$fe['max_id'].".jpg"))
        {
                unlink("cat" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
         if (file_exists("banner" .$fe['max_id'].".jpg"))
         {
                unlink("banner" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
        if(move_uploaded_file($_FILES['img']['tmp_name'], "images/cat".$unqid.".jpg") )
		{
		  
		    $file="cat".$unqid.".jpg";
		    $file1="banner".$unqid.".jpg";
		    $category=$_POST['cat_name'];
            
            $rf="INSERT INTO `category`(`id`, `cat_name`, `cat_image`, `unq_id`, `cat_id`) VALUES ('null','$category','$file','$unqid','$hfuy')";
          
        if($con->query($rf)===TRUE)
            {
                echo "<script>location.href='addCategory.php?m=as';</script>";
            }else{
                echo "<script>location.href='addCategory.php?m=af';</script>";
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
        <table class="table table-striped table-bordered " id="datatable">
            <thead><tr><th>S.No</th><th>Name</th><th>Images</th><th>Action</th></tr></thead>
            <?php
            $a=0;
            $g="SELECT * FROM `category`";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { 
                $a++; ?>
            <tr>
                <td><?php echo $a;?></td>
                
                <td><?php echo $d['cat_name'];?></td>
                <th><img src="./images/<?php echo $d['cat_image'];?>" height="70px" weight="70px">
                <?php echo $d['image'];?></th>
               
                <td><a href="product_lists.php?id=<?php echo $d[cat_id]?>"><button class="btn btn-success">View Product List</button></a>
                    <a href="edit_category.php?id=<?php echo $d['id'];?>"> <button class="btn btn-success">Edit</button></a>
                    <a href="delete_category.php?id=<?php echo $d['id'];?>"><button class="btn btn-danger" >Delete</button></a></td>
                
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