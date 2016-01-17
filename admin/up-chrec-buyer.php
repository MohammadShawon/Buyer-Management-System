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
            <h2 class="well text-center"><b>Update Record of Buyer</b></h2>
            
            <?php
            $uid=$_POST['ubuyer_id'];
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

                $uid=$_POST['ubuyer_id'];
                $ubuyer_name=$_POST['ubuyer_name'];
                $ucompany=$_POST['ucompany'];
                $uemail=$_POST['uemail'];
                $uphone=$_POST['uphone'];
                $uaddress=$_POST['uaddress'];
            


                $sql = "UPDATE buyer SET buyer_id='$uid',buyer_name='$ubuyer_name',company='$ucompany', email='$uemail', phone='$uphone', address='$uaddress' WHERE buyer_id='$uid'";

                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            
        ?>
        <div class="form-group"> 
            <form class="form-horizontal" role="form" method="POST" action="update-buyer.php" enctype="multipart/form-data">
                        <div class="col-sm-offset-2 col-sm-10">
                                  <a href="update-buyer.php">    <button class="btn btn-default" type="submit">Update</button></a> 
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