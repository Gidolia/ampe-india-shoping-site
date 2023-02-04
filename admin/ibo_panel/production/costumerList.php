<?php 
include "config.php";
top_structure('Costumer List', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>

  
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Costumer List</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Costumer Lists</h2>
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
                        <th>Password</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                                $au=1;
                                $e="SELECT * FROM `costumer`";
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
                                  <?php echo $R[password];?>
                                </td>
                                <td>
                                  <a href="billing_details.php?id=<?php echo $R[c_id]?>"><button class="btn btn-primary">View Order</button></a>
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