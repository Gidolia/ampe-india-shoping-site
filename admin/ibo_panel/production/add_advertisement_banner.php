<?php 
include "config.php";
if($_GET[m]=="as"){
    top_structure('Advertisement Banner', 1, 'success', 'Added', 'Bottom Banner added Successfully');
}elseif($_GET[m]=="af"){
    top_structure('Advertisement Banner', 1, 'warning', 'Failed', 'Bottom Banner added Failed');
}elseif($_GET[m]=="es"){
    top_structure('Advertisement Banner', 1, 'success', 'Edited', 'Bottom Banner edited Successfully');
}elseif($_GET[m]=="ef"){
    top_structure('Advertisement Banner', 1, 'warning', 'Failed', 'Bottom Banner edited Failed');
}elseif($_GET[m]=="ds"){
    top_structure('Advertisement Banner', 1, 'success', 'Deleted', 'Bottom Banner deleted Successfully');
}elseif($_GET[m]=="df"){
    top_structure('Advertisement Banner', 1, 'warning', 'Failed', 'Bottom Banner deletion Failed');
}else{
    top_structure('Advertisement Banner', 0, 'warning', 'Success', 'done');    
}

sidebar();
header_bar();?>

   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Advertisement Banner</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Add Advertisement Banner</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 1* <span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img1" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 2*<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img2" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 3*<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img3" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 4*<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img4" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 5*<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img5" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 6*<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img6" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 7*<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img7" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Advertisement Image 8*<span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="img8" required="required" class="form-control ">
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

/////////////////////// Enter New Category///////////////////////////
// function lp_name($bin) 
// {
//   $data = 'abcdefghijklmnopqrst';
//   return substr(str_shuffle($data), 0, $bin);
// }
// for($x=0; $x<100; $x++)
// {
//     //echo $x;
//     $hfuy=lp_name(1);  

//     $ismd="SELECT * FROM `category` WHERE `cat_id`='$hfuy'";
//     $qr=$con->query($ismd);
//     if(mysqli_num_rows($qr)==0)
//     {
//         break;
//     }
// }

/////////////////////// end Enter New Category///////////////////////////
    
    if(isset($_POST['ad_cat']))
    {
        $unqid=rand(100,99999);
        $mk="SELECT MAX(ad_id) AS max_id FROM `advertisement`";
        $x=$con->query($mk);
        $fe=$x->fetch_assoc();
        //$cc=$con->query($mk);
        if (file_exists("adv1" .$fe['max_id'].".jpg"))
        {
                unlink("adv1" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
        if (file_exists("adv2" .$fe['max_id'].".jpg"))
        {
                unlink("adv2" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
         if (file_exists("adv3" .$fe['max_id'].".jpg"))
        {
                unlink("adv3" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
         if (file_exists("adv4" .$fe['max_id'].".jpg"))
        {
                unlink("adv4" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
         if (file_exists("adv5" .$fe['max_id'].".jpg"))
        {
                unlink("adv5" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
         if (file_exists("adv6" .$fe['max_id'].".jpg"))
        {
                unlink("adv6" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
         if (file_exists("adv7" .$fe['max_id'].".jpg"))
        {
                unlink("adv7" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
         if (file_exists("adv8" .$fe['max_id'].".jpg"))
        {
                unlink("adv8" .$fe['max_id'].".jpg");
                  echo $fe['max_id']."jpg"."already exists";
        }
        if(move_uploaded_file($_FILES['img1']['tmp_name'], "advertisement/adv1".$unqid.".jpg") AND move_uploaded_file($_FILES['img2']['tmp_name'], "advertisement/adv2".$unqid.".jpg") AND move_uploaded_file($_FILES['img3']['tmp_name'], "advertisement/adv3".$unqid.".jpg") AND move_uploaded_file($_FILES['img4']['tmp_name'], "advertisement/adv4".$unqid.".jpg") AND move_uploaded_file($_FILES['img5']['tmp_name'], "advertisement/adv5".$unqid.".jpg") AND move_uploaded_file($_FILES['img6']['tmp_name'], "advertisement/adv6".$unqid.".jpg") AND move_uploaded_file($_FILES['img7']['tmp_name'], "advertisement/adv7".$unqid.".jpg") AND move_uploaded_file($_FILES['img8']['tmp_name'], "advertisement/adv8".$unqid.".jpg"))
		{
		  
		    $file1="adv1".$unqid.".jpg";
		    $file2="adv2".$unqid.".jpg";
            $file3="adv3".$unqid.".jpg";
            $file4="adv4".$unqid.".jpg";
            $file5="adv5".$unqid.".jpg";
            $file6="adv6".$unqid.".jpg";
            $file7="adv7".$unqid.".jpg";
            $file8="adv8".$unqid.".jpg";
            
            $rf="INSERT INTO `advertisement`(`ad_id`, `adv1`, `adv2`, `adv3`, `adv4`, `adv5`, `adv6`,`adv7`, `adv8`, `date`, `time`) VALUES (NULL,'$file1','$file2','$file3','$file4','$file5','$file6','$file7','$file8','$date','$time')";
          
        if($con->query($rf)===TRUE)
            {
                echo "<script>location.href='add_advertisement_banner.php?m=as';</script>";
            }else{
                echo "<script>location.href='add_advertisement_banner.php?m=af';</script>";
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
                    <h2>add bottom banner List</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
        <table class="table table-striped table-bordered table-responsive" id="datatable">
            <thead><tr><th>Adv1</th><th>Adv2</th><th>Adv3</th><th>Adv4</th><th>Adv5</th><th>Adv6</th><th>Adv7</th><th>Adv8</th><th>Action</th></tr></thead>
            <?php
            $a=0;
            $g="SELECT * FROM `advertisement`";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { 
                $a++; ?>
            <tr>
                
                <th><img src="./advertisement/<?php echo $d['adv1'];?>" height="70px" weight="70px">
                <th><img src="./advertisement/<?php echo $d['adv2'];?>" height="70px" weight="70px">
                <th><img src="./advertisement/<?php echo $d['adv3'];?>" height="70px" weight="70px">
                <th><img src="./advertisement/<?php echo $d['adv4'];?>" height="70px" weight="70px">
                <th><img src="./advertisement/<?php echo $d['adv5'];?>" height="70px" weight="70px">
                <th><img src="./advertisement/<?php echo $d['adv6'];?>" height="70px" weight="70px">
                <th><img src="./advertisement/<?php echo $d['adv7'];?>" height="70px" weight="70px">
                <th><img src="./advertisement/<?php echo $d['adv8'];?>" height="70px" weight="70px">
                <td>
                    <a href="delete_advertisement_banner.php?id=<?php echo $d['ad_id'];?>"><button class="btn btn-danger" >Delete</button></a>
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