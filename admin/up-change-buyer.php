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
             <a href="update-buyer.php"> <button  class="btn btn-primary btn-md" type="button">Go Back</button></a> 
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
                    $id=$_POST['buyer_id'];
                    $db="nazprinters";
                    $link = mysql_connect('localhost', 'root', '');
                    if (! $link) die("Couldn't connect to MySQL");

                    mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

                    $query=" SELECT * FROM buyer WHERE buyer_id='$id'";
                    $result=mysql_query($query);
                    $num=mysql_num_rows($result);

                    $i=0;
                    while ($i < $num) {
                    $id=mysql_result($result,$i,"buyer_id");
                    $b_name=mysql_result($result,$i,"buyer_name");
                    $company=mysql_result($result,$i,"company");
                    $email=mysql_result($result,$i,"email");
                    $phone=mysql_result($result,$i,"phone");
                    $address=mysql_result($result,$i,"address");
                        ++$i;
                    }
                    ?>
                 <h2 class="well text-center"><b>Change And Update Delivery Details:</b></h2><br>
             <form class="form-horizontal" id="form" role="form" method="POST" action="up-chrec-buyer.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="buyer_id">Buyer ID:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Buyer ID" name=ubuyer_id value="<?php echo "$id" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="buyer_name">Buyer Name:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=ubuyer_name value="<?php echo "$b_name" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="status"> Company:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=ucompany value="<?php echo "$company" ?>"> 
                     </div>
                 </div>  
                <div class="form-group">
                        <label class="control-label col-sm-2" for="remarks">Email:</label>
                     <div class="col-sm-10">
                    <input type="email" class="form-control" id="" placeholder=" " name=uemail value="<?php echo "$email" ?>"> 
                     </div>
                 </div> 
                        <div class="form-group">
                        <label class="control-label col-sm-2" for="status"> Phone:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=uphone value="<?php echo "$phone" ?>"> 
                     </div>
                 </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="status"> Company:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=uaddress value="<?php echo "$address" ?>"> 
                     </div>
                 </div>
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button form="form" type="submit">Update</button>
                                     
                                    </div>
                                  </div>
                                
                                  
            </form>
            
             <form class="form-horizontal" id="form1" role="form" method="POST" action="del-buyer.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="buyer_id">Buyer ID:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Buyer ID" name=buyer_id value="<?php echo "$id" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="buyer_name">Buyer Name:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=buyer_name value="<?php echo "$b_name" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="status"> Company:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=company value="<?php echo "$company" ?>"> 
                     </div>
                 </div>  
                <div class="form-group">
                        <label class="control-label col-sm-2" for="remarks">Email:</label>
                     <div class="col-sm-10">
                    <input type="email" class="form-control" id="" placeholder=" " name=email value="<?php echo "$email" ?>"> 
                     </div>
                 </div> 
                        <div class="form-group">
                        <label class="control-label col-sm-2" for="status"> Phone:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=phone value="<?php echo "$phone" ?>"> 
                     </div>
                 </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="status"> Company:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=address value="<?php echo "$address" ?>"> 
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