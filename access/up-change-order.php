<?php
require '../session.php';
if($_SESSION['user_type']!=='Employee'){
header("location:../index.php"); } 
    include '../includes/style-link.php';
    include '../includes/header.php';
?> 
   <div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <aside class="well">
             <a href="update-order.php"> <button  class="btn btn-primary btn-md" type="button">Go Back</button></a> 
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
        <div class="col-sm-8 text-left well" id="add_order">
                <?php
$order_code=$_POST['order_code'];
$db="nazprinters";
$link = mysql_connect('localhost', 'root', '');
if (! $link) die("Couldn't connect to MySQL");

mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

$query=" SELECT * FROM orders WHERE order_code='$order_code'";
$result=mysql_query($query);
$num=mysql_num_rows($result);

$i=0;
while ($i < $num) {
$order_code=mysql_result($result,$i,"order_code");
$buyer_name=mysql_result($result,$i,"buyer_name");
$company=mysql_result($result,$i,"company");
$approve=mysql_result($result,$i,"approved_by");
$rate=mysql_result($result,$i,"rate");
$quantity=mysql_result($result,$i,"quantity");
$o_date=mysql_result($result,$i,"order_date");
$d_date=mysql_result($result,$i,"delivery_date");
$phone=mysql_result($result,$i,"phone");
    ++$i;
}
?>
                 <h2 class="well text-center"><b>Change And Update  Order:</b></h2><br>
             <form class="form-horizontal" id="form" role="form" method="POST" action="up-chrec-order.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="order_no">Order No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Order No" name=uorder_code value="<?php echo "$order_code" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="buyer_name">Buyer Name:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=ubuyer_name value="<?php echo "$buyer_name" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="company">Company</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=ucompany value="<?php echo "$company" ?>"> 
                     </div>
                 </div>  
                <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Approval</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Approval Person Name" name=uapprove value="<?php echo "$approve" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Approval</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Approval Person Name" name=urate value="<?php echo "$rate" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Approval</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=uquantity value="<?php echo "$quantity" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Approval</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=uo_date value="<?php echo "$o_date" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Approval</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Approval Person Name" name=ud_date value="<?php echo "$d_date" ?>"> 
                     </div>
                 </div>  
                
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Approval</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=uphone value="<?php echo "$phone" ?>"> 
                     </div>
                 </div> 
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button form="form" type="submit">Update</button>
                                     
                                    </div>
                                  </div>
                                
                                  
            </form>
            
             <form class="form-horizontal" id="form1" role="form" method="POST" action="del-order.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="order_no">Order No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Order No" name=order_code value="<?php echo "$order_code" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="buyer_name">Buyer Name:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=buyer_name value="<?php echo "$buyer_name" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="company">Company</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder=" " name=company value="<?php echo "$company" ?>"> 
                     </div>
                 </div>  
                <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Approval:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Approval Person Name" name=uapprove value="<?php echo "$approve" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Rate:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=rate value="<?php echo "$rate" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Quantity:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=quantity value="<?php echo "$quantity" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Order Date</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=o_date value="<?php echo "$o_date" ?>"> 
                     </div>
                 </div>   <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Delivery Date</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=d_date value="<?php echo "$d_date" ?>"> 
                     </div>
                 </div>  
                
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="approve">Contact Number:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="" name=phone value="<?php echo "$phone" ?>"> 
                     </div>
                 </div> 
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button form="form1" type="submit">Delete</button>
                                     
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