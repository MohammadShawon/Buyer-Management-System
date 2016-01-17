<?php
require '../session.php';
if($_SESSION['user_type']!=='Admin'){
header("location:../index.php"); } 
    include '../includes/style-link.php';
    include '../includes/header.php';
?> 
   <div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <aside class="well">
             <a href="update-del-status.php"> <button  class="btn btn-primary btn-md" type="button">Go Back</button></a> 
                <ul>
                    <li><a href="buyer-list.php">Buyer List</a></li> <br>
                    <li><a href="add-buyer.php">ADD Buyer</a></li> <br>
                    <li><a href="update-buyer.php">Update Buyer</a></li> <br>
                    <li><a href="add-order.php">ADD Order</a></li> <br>
                    <li><a href="update-order.php">Update Order</a></li> <br>
                    <li><a href="order-list.php">Order List</a></li> <br>
                    <li><a href="add-del-status.php">ADD Delivery Status</a></li> <br>
                    <li><a href="update-del-status.php">Update Delivery Status</a></li> <br>
                    <li><a href="show-del-status.php">View Delivery Status</a></li> <br>
                    <li><a href="add-bill.php">ADD Bill</a></li> <br>
                    <li><a href="update-bill.php">Update Bill</a></li> <br>
                    <li><a href="bill-list.php">Show Bill</a></li>
                </ul>
            </aside>
        </div>
        <div class="col-sm-8 text-left well" id="add_order">
                <?php
                    $del_no=$_POST['delivery_id'];
                    $db="nazprinters";
                    $link = mysql_connect('localhost', 'root', '');
                    if (! $link) die("Couldn't connect to MySQL");

                    mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

                    $query=" SELECT * FROM delivery WHERE delivery_id='$del_no'";
                    $result=mysql_query($query);
                    $num=mysql_num_rows($result);

                    $i=0;
                    while ($i < $num) {
                    $del_no=mysql_result($result,$i,"delivery_id");
                    $order_code=mysql_result($result,$i,"order_code");
                    $status=mysql_result($result,$i,"status");
                    $remark=mysql_result($result,$i,"remarks");
                        ++$i;
                    }
                    ?>
                 <h2 class="well text-center"><b>Change And Update Delivery Details:</b></h2><br>
             <form class="form-horizontal" id="form" role="form" method="POST" action="up-chrec-delstatus.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="bill_no">Delivery No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Delivery No" name=udel_no value="<?php echo "$del_no" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="order_code">Order No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=uorder_code value="<?php echo "$order_code" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="status">Delivery Status</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=ustatus value="<?php echo "$status" ?>"> 
                     </div>
                 </div>  
                <div class="form-group">
                        <label class="control-label col-sm-2" for="remarks">Remarks</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Total bill" name=uremark value="<?php echo "$remark" ?>"> 
                     </div>
                 </div> 
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button form="form" type="submit">Update</button>
                                     
                                    </div>
                                  </div>
                                
                                  
            </form>
            
             <form class="form-horizontal" id="form1" role="form" method="POST" action="del-deliver.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="bill_no">Delivery No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Delivery No" name=del_no value="<?php echo "$del_no" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="order_code">Order No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=order_code value="<?php echo "$order_code" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="status">Delivery Status</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=status value="<?php echo "$status" ?>"> 
                     </div>
                 </div>  
                <div class="form-group">
                        <label class="control-label col-sm-2" for="remarks">Remarks</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Total bill" name=remark value="<?php echo "$remark" ?>"> 
                     </div>
                 </div> 
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button type="submit">Delete</button>
                                     
                                    </div>
                                  </div>
                                
                                  
            </form>
           
            
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <h2 id="welcome">
                    welcome: <i> <?php echo $login_session .'As an '. $login_type; ?></i>
                    <b id="logout"><a href="../logout.php">Logout</a></b>
                </h2>
            </div>
        </div>
    </div>
</div>


<?php include '../includes/footer.php'; ?>