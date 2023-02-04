<?php 
include "config.php";
top_structure('Billing Details', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>

  
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Billing Detail List</h3>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                                $au=1;
                                $e="SELECT * FROM `order_bill` WHERE `c_id`='$_GET[id]'";
                                $d=$con->query($e);
                                $au="0";
                                while($R=$d->fetch_assoc()){ 
                            ?>
                                    <tr>
                                <td>
                                    <?php echo ++$au;?>
                                </td>        
                                <td>
                                   <?php echo $R[name];?>
                                </td>
                                <td>
                                  <?php echo $R[email];?>
                                </td>
                                <td>
                                  <?php echo $R[mobile];?>
                                </td>
                                <td>
                                  <?php echo $R[address];?>
                                </td>
                                <td>
                                  <a href="order_details.php?id=<?php echo $R[ob_id]?>"><button class="btn btn-primary">View Order Details</button></a>
                                </td>
                                 
                                </tr>
                                <?php      
                                } ?>
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