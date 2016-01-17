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
            <h2 class="well text-center"><b>Update Record of Bill</b></h2>
            
            <?php
            $bill_no=$_POST['ubill_no'];
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "nazprinters";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    
                } 

                $ubill_no=$_POST['ubill_no'];
                $uorder_code=$_POST['uorder_code'];
                $utotal_price=$_POST['utotal_price'];
            


                $sql = "UPDATE bill SET bill_no='$ubill_no',order_code='$uorder_code',total_price='$utotal_price' WHERE bill_no='$ubill_no'";

                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            
        ?>
        <div class="form-group"> 
            <form class="form-horizontal" role="form" method="POST" action="update-bill.php" enctype="multipart/form-data">
                        <div class="col-sm-offset-2 col-sm-10">
                                  <a href="update-bill.php">    <button class="btn btn-default" type="submit">Update</button></a> 
                        </div>
            </form>
                                  </div>
        </div>
        
        <div class="col-sm-2 sidenav"> 
            <div class="well">
                <h2 id="welcome">
                    welcome: <br><i> <?php echo $login_session ."</br>" .' As an '. $login_type. "</br>"; ?></i>
                   <br> <b id="logout"><a href="../logout.php"><button type="button">Logout</button></a></b>
                </h2>
            </div>
            
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>