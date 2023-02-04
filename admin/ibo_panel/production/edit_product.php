<?php 
include "config.php";
top_structure('Edit Product', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();
 $mk="SELECT * FROM `product` WHERE `p_id`='".$_GET['id']."'";
    $x=$con->query($mk);
    $fe=$x->fetch_assoc();

?>
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
<!-- page content -->
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
                    <h3>Edit Product</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Edit Product <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="name"  class="form-control " value="<?php echo $fe['name'];?>">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">M.R.P<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="mrp"  class="form-control " value="<?php echo $fe['mrp'];?>">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Discount Price<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="dp"  class="form-control " value="<?php echo $fe['dp'];?>">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Quantity*<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="qty"  class="form-control " value="<?php echo $fe['qty'];?>">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Short Description <span class="required">*</span>
                        </label>
<div class="col-md-8 col-sm-8 ">
    <div class="x_panel">
		<div class="x_title">
			<h2>Edit Short Description<small><8small></h2>
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
    	<textarea id="mytextarea" name="sd"><?php echo $fe[short_description]?></textarea>
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
			<h2>Edit Short Description<small><8small></h2>
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
    	<textarea id="mytextarea" name="ld"><?php echo $fe[long_description]?></textarea>
    </div>
</div>
    <script>
    ClassicEditor.create( document.querySelector( '#editor' ) )
                                .catch( error => {
                console.error( error );
                } );
    </script>								
							
						</div>
					</div>
				</div>
         </div>
                        <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="edit_prod" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
            </form>
            <div class="ln_solid"></div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" va>Image 1<span class="">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 ">
                        <img src="./images/<?php echo $fe['image1'];?>" height="100px" style="border-radius: 10px;">
                          <input type="file" name="new_img"  class="form-control " >
                          <input type="hidden" value="<?php echo $fe['image1'];?>" name="old">
                    </div>
                </div>
                <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="edit_img" class="btn btn-success">Change</button>
                        </div>
                      </div>
            </form>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" va>Image 2<span class="">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 ">
                        <img src="./images/<?php echo $fe['image2'];?>" height="100px" style="border-radius: 10px;">
                          <input type="file" name="new_img2"  class="form-control " >
                          <input type="hidden" value="<?php echo $fe['image2'];?>" name="old2">
                    </div>
                </div>
                <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="edit_img2" class="btn btn-success">Change</button>
                        </div>
                      </div>
            </form>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" va>Image 3<span class="">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 ">
                        <img src="./images/<?php echo $fe['image3'];?>" height="100px" style="border-radius: 10px;">
                          <input type="file" name="new_img3"  class="form-control " >
                          <input type="hidden" value="<?php echo $fe['image3'];?>" name="old3">
                    </div>
                </div>
                <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="edit_img3" class="btn btn-success">Change</button>
                        </div>
                      </div>
            </form>
<?php
if(isset($_POST[edit_img])){
        $id=rand(1000,99999);
        $old=$_POST[old];
        $Mypic=$_FILES['new_img'];
        $filename="pro".$id.".jpg";
        $dir="./images/";
        $NewLocation=$dir.$filename;
        if(move_uploaded_file($Mypic['tmp_name'], $NewLocation)===TRUE){
            $rs=$con->query("UPDATE `product` SET `image1`='$filename'  WHERE `p_id`='$_GET[id]'");
            if($rs===TRUE){
                unlink('images/'.$old);
                echo "<script>location.href='addProduct.php?m=es';</script>";
            }else{
                echo "<script>location.href='addProduct.php?m=es';</script>";
            }
        }else{
            echo "alert('Imagee Not Uploaded');locatio.href='addProduct.php'";
        }
}
if(isset($_POST[edit_img2])){
        $id=rand(1000,99999);
        $old=$_POST[old2];
        $Mypic=$_FILES['new_img2'];
        $filename="pro".$id.".jpg";
        $dir="./images/";
        $NewLocation=$dir.$filename;
        if(move_uploaded_file($Mypic['tmp_name'], $NewLocation)===TRUE){
            $rs=$con->query("UPDATE `product` SET `image2`='$filename'  WHERE `p_id`='$_GET[id]'");
            if($rs===TRUE){
                unlink('images/'.$old);
                echo "<script>location.href='addProduct.php?m=es';</script>";
            }else{
                echo "<script>location.href='addProduct.php?m=es';</script>";
            }
        }else{
            echo "alert('Imagee Not Uploaded');locatio.href='addProduct.php'";
        }
}
if(isset($_POST[edit_img3])){
        $id=rand(1000,99999);
        $old=$_POST[old3];
        $Mypic=$_FILES['new_img3'];
        $filename="pro".$id.".jpg";
        $dir="./images/";
        $NewLocation=$dir.$filename;
        if(move_uploaded_file($Mypic['tmp_name'], $NewLocation)===TRUE){
            $rs=$con->query("UPDATE `product` SET `image3`='$filename'  WHERE `p_id`='$_GET[id]'");
            if($rs===TRUE){
                unlink('images/'.$old);
                echo "<script>location.href='addProduct.php?m=es';</script>";
            }else{
                echo "<script>location.href='addProduct.php?m=es';</script>";
            }
        }else{
            echo "alert('Imagee Not Uploaded');locatio.href='addProduct.php'";
        }
}

?>
            
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<?php 
bottom_structure('ARZOO');
if(isset($_POST[edit_prod])){
        
       // $name=$_POST['upd_name'];
        //$id=rand(1000,99999);
        //$Mypic=$_FILES['new_img'];
        //$filename="product".$id.".jpg";
        //$dir="./images/";
        //$NewLocation=$dir.$filename;
        //move_uploaded_file($Mypic['tmp_name'], $NewLocation);
        
         $res=$con->query("UPDATE `product` SET `name`='$_POST[name]',`mrp`='$_POST[mrp]',`dp`='$_POST[dp]',`qty`='$_POST[qty]',`short_description`='$_POST[sd]',`long_description`='$_POST[ld]' WHERE `p_id`='".$_GET['id']."';");
            if($res>0){
               echo "<script>location.href='addProduct.php?m=es';</script>";
            }else{
               echo "<script>location.href='addProduct.php?m=ef;</script>";
            }             
              
                        
                     
    }
?>