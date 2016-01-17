<?php
require '../session.php';
if($_SESSION['user_type']!=='Employee'){
header("location:../index.php"); } 
    include '../includes/style-link.php';
    include '../includes/header.php';
?> <div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <aside class="well">
                        <a href="employee.php"> <button  class="btn btn-primary btn-md" type="button">GO Back</button></a>
                <ul>
                   <li><a href="add-buyer.php">Add Buyer</a></li>
                    <li><a href="add-order.php">Add Order</a></li>
                    <li><a href="update-order.php">Update Order</a></li>
                    <li><a href="order-list.php">Order List</a></li>
                    <li><a href="add-bill.php">ADD Bill</a></li>
                    <li><a href="update-bill.php">Update Bill</a></li>
                    <li><a href="delivery-status.php">ADD Delivery Status</a></li>
                    <li><a href="update-del-status.php">Update Delivery Status</a></li>
                    <li><a href="deliver-list.php">View Delivery Status</a></li>
                </ul>
            </aside>
        </div>
        <div class="col-sm-8 text-left" id="product_status">
            <h2 class="well text-center"><b>ADD BUYER</b></h2>
                <form class="form-horizontal" role="form" method="POST" action="another-buyer.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Buyer ID:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="buyer_id" placeholder="Enter Buyer ID" name="buyer_id">
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
                                   <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Email</label>
                                    <div class="col-sm-10"> 
                                      <input type="email" class="form-control" id="" name="email" placeholder="Enter Mail Address">
                                    </div>
                                  </div>

                                 <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Contact Number</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="phone"  placeholder="Enter Buyer Phone Number">
                                    </div>
                                  </div>
                                   
                                   <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Address</label>
                                    <div class="col-sm-10"> 
                                 <textarea class="form-control" name="address" id="" cols="30" rows="5" placeholder="Enter Address"></textarea>   
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