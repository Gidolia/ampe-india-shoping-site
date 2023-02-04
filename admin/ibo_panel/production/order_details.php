<?php 
include "config.php";
top_structure('Order Details', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>

  
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Order Detail List</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="card-box table-responsive"> 
                     <table id="datatable-buttons" class="table table-striped jambo_table" >
                      <thead>
                        <tr class="headings">
                        <th>S.No</th>
                        <th>Product</th>
                        <th>Prduct name</th>
                        <th>Quantity</th>
                        
                        <th>Price</th>
                        <th>Total</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                                $au=1;
                                $e="SELECT * FROM `order_bill_detail` WHERE `ob_id`='$_GET[id]' ";
                                $d=$con->query($e);
                                
                                while($Rs=$d->fetch_assoc()){ 
                                    $ef="SELECT * FROM `product` WHERE `p_id`='$Rs[p_id]' ";
                                $de=$con->query($ef);
                               $au="0";
                                while($R=$de->fetch_assoc()){ 
                                    
                            ?>
                                    <tr>
                                <td>
                                    <?php echo ++$au;?>
                                </td>        
                                <td>
                                   <img src="images/<?php echo $R[image1];?>" style="height:70px;width:150px">
                                </td>
                                <td>
                                  <?php echo $R[name];?>
                                </td>
                                <td>
                                  <?php echo $Rs[p_qty];?>
                                </td>
                                
                                <td>
                                  <?php echo "$".$Rs[p_dp];?>
                                </td>
                                <td>
                                  <?php echo "$".$Rs[p_total];?>
                                </td>
                                 
                                </tr>
                                <?php      
                                }
                                }
                                ?>
                      </tbody>
                    </table>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php 
bottom_structure('ARZOO');

?>