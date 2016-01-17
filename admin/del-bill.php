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
              <a href="admin.php"> <button  class="btn btn-primary btn-md" type="button">Home</button></a>
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
        <div class="col-sm-8 text-left" id="">
            <h2 class="well text-center"><b>Delete Record of Bill</b></h2>
              <?php       
            $bill_no=$_POST['bill_no'];
            // Create connection
$db="nazprinters";
$link = mysql_connect('localhost', 'root', '');
if (! $link)
die(mysql_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());
mysql_query("DELETE FROM  bill where bill_no=$bill_no")or die("Delete Error: ".mysql_error());
mysql_close($link);
print "Record Removed.";
           
                ?>
                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                    <a href="update-bill.php">  <button class="btn btn-default" type="submit">Delete</button></a> 
                                     
                                    </div>
                                  </div>
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