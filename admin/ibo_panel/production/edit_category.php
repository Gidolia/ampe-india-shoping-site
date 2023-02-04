<?php 
include "config.php";
top_structure('Edit Category', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();
 
    $mk="SELECT * FROM `category` WHERE `id`='".$_GET['id']."'";
    $x=$con->query($mk);
    $fe=$x->fetch_assoc();

?>
<!-- page content -->
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <!--<div class="title_left">-->
              <!--  <h3>Edit Category </h3>-->
              <!--</div>-->
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Edit Category</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="upd_name"  class="form-control " value="<?php echo $fe['cat_name'];?>">
                        </div>
                      </div>
                      
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="cat_name" class="btn btn-success">Submit</button>
                        </div>
                    </div>
            </form>
<?php
if(isset($_POST[cat_name])){
    $rs=$con->query("UPDATE `category` SET `cat_name`='$_POST[upd_name]'  WHERE `id`='$_GET[id]'");
    if($rs===TRUE){
        echo "<script>location.href='addCategory.php?m=es';</script>";
    }else{
        echo "<script>location.href='addCategory.php?m=es';</script>";
    }
}
?>
                    <div class="ln_solid"></div>
                    
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                    <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" va>Category Image <span class="">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 ">
                            <img src="./images/<?php echo $fe['cat_image'];?>" height="100px" style="border-radius: 10px;">
                          <input type="file" name="new_img"  class="form-control " >
                          <input type="hidden" value="<?php echo $fe['cat_image'];?>" name="old">
                        </div>
                      </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="cat_img" class="btn btn-success">Change</button>
                        </div>
                      </div>
                      
            </form>
<?php
if(isset($_POST[cat_img])){
        $id=rand(1000,99999);
        $old=$_POST[old];
        $Mypic=$_FILES['new_img'];
        $filename="cat".$id.".jpg";
        $dir="./images/";
        $NewLocation=$dir.$filename;
        if(move_uploaded_file($Mypic['tmp_name'], $NewLocation)===TRUE){
            $rs=$con->query("UPDATE `category` SET `cat_image`='$filename'  WHERE `id`='$_GET[id]'");
            if($rs===TRUE){
                unlink('images/'.$old);
                echo "<script>location.href='addCategory.php?m=es';</script>";
            }else{
                echo "<script>location.href='addCategory.php?m=es';</script>";
            }
        }else{
            echo "alert('Imagee Not Uploaded');locatio.href='addCategory.php'";
        }
}

?>
                    <div class="ln_solid"></div>
           

 
            
            </div>
            </div>
            </div>
            </div>
<!-- page content -->
<?php 
bottom_structure('ARZOO');

?>