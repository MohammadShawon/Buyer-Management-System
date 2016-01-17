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
                        <a href="admin.php"> <button  class="btn btn-primary btn-md" type="button">GO Back</button></a>
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
        <div class="col-sm-8 text-left" id="product_status">
            <h2 class="well text-center"><b>ADD DELIVERY STATUS</b></h2>
            <form class="form-horizontal" role="form" method="POST" action="another-del-status.php" enctype="multipart/form-data">
               <div class="form-group">
                    <label class="control-label col-sm-2" for="">Delivery No:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="order_code" placeholder="Enter Delivery Number" name="delivery_id">
                     </div>
                 </div>
                  
                   
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">Order Code:</label>
                    <div class="col-sm-10">  
                     <?php  
                        include '../connection.php';
$result = mysql_query("SELECT order_code FROM orders ORDER BY order_code ASC"); ?>
            <SELECT required  autofocus NAME=order_code>
      <OPTION VALUE=>Choose
      <?php 
          if(is_resource($result)){
      while($row = mysql_fetch_array($result))
     {
      $order_code= $row["order_code"];
      echo "<OPTION VALUE =\"$order_code\">".$order_code.'</OPTION>';
      }}
     ?> </OPTION></SELECT> 
                     </div>
                 </div>
                    
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="">Production Status</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" placeholder="Enter Production Status" name="status">
                     </div>
                    </div> 
            
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="">Remarks</label>
                     <div class="col-sm-10">
                     <textarea class="form-control" name="remarks" id="" cols="20" rows="5" placeholder="Enter Remarks as like Paid or Unpaid or production comments if not fully completed"></textarea>
                    
                     </div>
                    </div>
                    
                    <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <?php  echo '<input type="submit" name=submit value="Save">'; ?>
                                    </div>
                      </div>
                 
               </form>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <h2 id="welcome">
                    welcome: <br><i> <?php echo $login_session .' As an '. $login_type; ?></i>
                   <br> <b id="logout"><a href="../logout.php">Logout</a></b>
                </h2>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>