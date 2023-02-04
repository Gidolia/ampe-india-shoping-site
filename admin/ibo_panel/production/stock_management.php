<?php 
include "config.php";
if($_GET['m']=="success"){
    top_structure('Stock Management', 1, 'success', 'Updated', 'Quantity updated successfully'); 
}elseif($_GET['m']=="fail"){
    top_structure('Stock Management', 1, 'warning', 'Failed', 'Quantity updated Failed'); 
}else{
    top_structure('Stock Management', 1, 'warning', 'Success', 'done'); 
}
// top_structure('Stock Management', 0, 'warning', 'Success', 'done'); 
sidebar();
header_bar();
?>
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
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>All Products</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                <div class="x_content">
                  <div class="card-box table-responsive"> 
                    <table class="table table-striped table-bordered  jambo_table" id="datatable">
                      <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image1</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
                      <tbody>
            <?php
            $a=0;
            $g="SELECT * FROM `product` ORDER BY `p_id` DESC";
            $dc=$con->query($g);
            while($d=$dc->fetch_assoc())
            { $a++; ?>
            
            <tr>
                <td><?php echo $a;?></td>
                <td><?php echo $d['name'];?></td>
                <th><img src="./images/<?php echo $d['image1'];?>" height="100px" weight="100px"></th>
                <th><?php echo $d['qty'];?></th>
                <td>
                    <form method="post">
                        <input value="<?php echo $d['p_id'];?>" type="hidden" name="p_id">
                        <input class="form-control" name="qty_upd1" type="number" min="1" required value="<?php echo $d['qty'];?>">
                        <button class="btn btn-success" name="qty_upd">Update</button>
                    </form>
                </td>
            </tr>
            
            <?php
            }?>
            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!--Page Content-->
<?php 
bottom_structure('ARZOO');
if(isset($_POST['qty_upd'])){
    $qry="UPDATE `product` SET `qty`='$_POST[qty_upd1]'  WHERE `p_id`='$_POST[p_id]'";
    $rs=$con->query("$qry");
    if($rs===TRUE){
        echo "<script>location.href='stock_management.php?m=success';</script>";
    }else{
        echo "<script>location.href='stock_management.php?m=fail';</script>";
    }
}
?>
