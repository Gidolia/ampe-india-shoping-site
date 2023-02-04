<?php 
include "config.php";

    top_structure('All Products ', 0, 'warning', 'Success', 'done');    


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
         
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Products</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <br>
        <table class="table table-striped table-bordered table-responsive" id="datatable">
            <thead><tr><th>ID</th><th>Name</th><th>Image1</th><th>Action</th></tr></thead>
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
                <!--<th><img src="./images/<?php echo $d['image2'];?>" height="100px" weight="100px"></th>-->
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
