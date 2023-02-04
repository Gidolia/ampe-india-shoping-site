<?php 
include "config.php";
if($_GET[m]=="as"){
    top_structure('Logo', 1, 'success', 'Added', 'Logo added Successfully');
}elseif($_GET[m]=="af"){
    top_structure('Logo', 1, 'warning', 'Failed', 'Logo added Failed');
}elseif($_GET[m]=="ds"){
    top_structure('Logo', 1, 'success', 'Deleted', 'Logo deleted Successfully');
}elseif($_GET[m]=="df"){
    top_structure('Logo', 1, 'warning', 'Failed', 'Logo deletion Failed');
}else{
    top_structure('Logo', 0, 'warning', 'Success', 'done');    
}

sidebar();
header_bar();?>

   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Logo</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Add New Logo</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                       
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ARZOO Logo <span class="">*</span>
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
        $mk="SELECT MAX(l_id) AS max_id FROM `logo`";
        $x=$con->query($mk);
        $fe=$x->fetch_assoc();
        //$cc=$con->query($mk);
        if (file_exists("logo" .$fe['unqid'].".jpg"))
        {
                unlink("logo" .$fe['unqid'].".jpg");
                  echo "already exists";
        }
      
        if(move_uploaded_file($_FILES['img1']['tmp_name'], "images/logo".$unqid.".jpg") )
		{
		    $file1="logo".$unqid.".jpg";
            $rf="INSERT INTO `logo`(`l_id`,`logo`) VALUES ('null','$file1')";
          
        if($con->query($rf)===TRUE)
            {
                echo "<script>location.href='addLogo.php?m=as';</script>";
            }else{
                echo "<script>location.href='addLogo.php?m=af';</script>";
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
                    <h2>Logo </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
        <table class="table table-striped table-bordered table-responsive" id="datatable">
            <thead><tr><th>S.No</th><th>Logo</th><th>Action</th></tr></thead>
            <?php
            $a=0;
            $g="SELECT * FROM `logo`";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { 
                $a++; ?>
            <tr>
                <td><?php echo $a;?></td>
                <th><img src="./images/<?php echo $d['logo'];?>" height="70px" weight="70px">
                </th>
                
                
                
                <td>
                    <a href="delete_logo.php?id=<?php echo $d['l_id'];?>"><button class="btn btn-danger" >Delete</button></a>
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