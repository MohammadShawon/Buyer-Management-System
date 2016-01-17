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
            <h2 class="well text-center"><b>ADD ORDER</b></h2>
            <form class="form-horizontal" role="form" method="POST" action="another-order.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Order Code:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="order_code" placeholder="Enter Order Code" name="order_code">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Buyer Name</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="buyer_name" placeholder="Enter Buyer Name">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Company</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="company" placeholder="Enter Company Name">
                                    </div>
                                  </div>
                              <!--     
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Sample Design</label>
                                    <div class="col-sm-10"> 
                                      <input type="file" class="form-control" id="" name="image">
                                 </div>
                        
                              </div>
                                  -->
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Apporved By</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="approved_by" placeholder="Enter The Name Who Approved Design">
                                    </div>
                                  </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Quantity</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="quantity" placeholder="Enter Quantity">
                                    </div>
                                  </div>
                                    <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Rate</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="rate" placeholder="Enter Quantity">
                                    </div>
                                  </div>
                                     <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Order Date</label>
                                    <div class="col-sm-10"> 
                                      <input type="date" class="form-control" id="" name="order_date" placeholder="Enter Order Date">
                                    </div>
                                  </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Delivery Date</label>
                                    <div class="col-sm-10"> 
                                      <input type="date" class="form-control" id="" name="delivery_date" >
                                    </div>
                                  </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Contact Number</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="phone"  placeholder="Enter Buyer Phone Number">
                                    </div>
                                  </div>
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                         <input type="submit" name="submit" value="Submit" method="post">
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