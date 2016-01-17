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
              <a href="employee.php"> <button  class="btn btn-primary btn-md" type="button">Home</button></a>
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
        <div class="col-sm-8 text-left" id="">
            <h2 class="well text-center"><b>Delete Record of Delivery</b></h2>
              <?php       
            $del_no=$_POST['del_no'];
            // Create connection
$db="nazprinters";
$link = mysql_connect('localhost', 'root', '');
if (! $link)
die(mysql_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());
mysql_query("DELETE FROM  delivery where delivery_id=$del_no")or die("Delete Error: ".mysql_error());
mysql_close($link);
print "Record Removed.";
           
                ?>
                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                    <a href="update-del-status.php">  <button class="btn btn-default" type="submit">Delete</button></a> 
                                     
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