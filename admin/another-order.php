<?php
require '../session.php';
if($_SESSION['user_type']!=='Admin'){
header("location:../index.php"); } 
    include '../includes/style-link.php';
    include '../includes/header.php';
?>
<div class="container-fluid text-center">
    <div class="row content" id="content">
        <div class="col-sm-2 sidenav">
            <aside class="well">
             <a href="add-order.php"> <button  class="btn btn-primary btn-md" type="button">Go Back</button></a> 
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
        
       <div class="col-sm-8 common text-center well " id="">
                <?php

                $host="localhost"; // Host name 
                $username="root"; // Mysql username 
                $password=""; // Mysql password 
                $db_name="nazprinters"; // Database name 
                $tbl_name="orders"; // Table name 

                // Connect to server and select database.
                mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysql_select_db("$db_name")or die("cannot select DB");

                // Get values from form 
                $order_code=$_POST['order_code'];
                $buyer_name=$_POST['buyer_name'];
                $company=$_POST['company'];
               // $sample=$_FILES['image'];
                $approve=$_POST['approved_by'];
                $quantity=$_POST['quantity'];
                $rate=$_POST['rate'];
                $o_date=$_POST['order_date'];
                $d_date=$_POST['delivery_date'];
                $phone=$_POST['phone'];


                // Insert data into mysql 
                $sql=mysql_query("INSERT INTO $tbl_name VALUES('$order_code', '$buyer_name','$company', '$approve', '$quantity', '$rate', '$o_date', '$d_date', '$phone')");
                //$result=mysql_query($sql);

                // if successfully insert data into database, displays message "Successful".

                if($sql){
                echo "Saved Successfully";
                echo "<BR>";
                echo " <a href='add-order.php'>Add Another</a>";
                echo "<BR>";


                }

                else {
                echo "ERROR";
                }
                ?> 
               
      </div>
      
     <div class="col-sm-2 sidenav">
            <div class="well">
                <h2 id="welcome">
                    welcome: <br> <br> <i> <?php echo $login_session .' As an '. $login_type; ?></i> <br>
                    <br><b id="logout"><a href="../logout.php">Logout</a></b>
                </h2>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>