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
             <a href="admin.php"> <button  class="btn btn-primary btn-md" type="button">Go Back</button></a> 
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
$bill_no=$_POST['bil_no'];
$db="nazprinters";
$link = mysql_connect('localhost', 'root', '');
if (! $link) die("Couldn't connect to MySQL");

mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

$query=" SELECT * FROM bill WHERE bill_no='$bill_no'";
$result=mysql_query($query);
$num=mysql_num_rows($result);

$i=0;
while ($i < $num) {
$bill_no=mysql_result($result,$i,"bill_no");
$order_code=mysql_result($result,$i,"order_code");
$t_price=mysql_result($result,$i,"total_price");
    ++$i;
}
?>
                 <h2 class="well text-center"><b>Change And Update Order Details:</b></h2><br>
             <form class="form-horizontal" id="form" role="form" method="POST" action="up-chrec-bill.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="bill_no">Bill No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Bill Copy Serial No" name=ubill_no value="<?php echo "$bill_no" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="order_code">Order No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=uorder_code value="<?php echo "$order_code" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="total_price">Total Price:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Total bill" name=utotal_price value="<?php echo "$t_price" ?>"> 
                     </div>
                 </div> 
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button form="form" name="update">Update</button>
                                     
                                    </div>
                                  </div>
                                
                                  
            </form>
            
                         <form class="form-horizontal" id="form1" role="form" method="POST" action="del-bill.php" enctype="multipart/form-data">
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="bill_no">Bill No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="Enter Bill Copy Serial No" name=bill_no value="<?php echo "$bill_no" ?>">
                     </div>
                 </div> 
                 <div class="form-group">
                        <label class="control-label col-sm-2" for="order_code">Order No:</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="" placeholder="" name=order_code value="<?php echo "$order_code" ?>">
                     </div>
                 </div> 
                 
                 
             <div class="form-group">
                        <label class="control-label col-sm-2" for="total_price">Total Price:</label>
                     <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Enter Total bill" name=total_price value="<?php echo "$t_price" ?>"> 
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