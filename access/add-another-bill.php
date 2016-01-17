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
             <a href="employee.php"> <button  class="btn btn-primary btn-md" type="button">Go Back</button></a> 
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
                 <h2 class="well text-center"><b>ADD Bill Details:</b></h2><br>
                 <?php

                    $host="localhost"; // Host name 
                    $username="root"; // Mysql username 
                    $password=""; // Mysql password 
                    $db_name="nazprinters"; // Database name 
                    $tbl_name="bill"; // Table name 

                    // Connect to server and select database.
                    mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
                    mysql_select_db("$db_name")or die("cannot select DB");

                    // Get values from form 
                    $bill_no=$_POST['bill_no'];
                    $order_code=$_POST['order_code'];
                    $total_price=$_POST['total_price'];


                    // Insert data into mysql 
                    $sql=mysql_query("INSERT INTO $tbl_name VALUES('$bill_no', '$order_code', '$total_price')");
                    //$result=mysql_query($sql);

                    // if successfully insert data into database, displays message "Successful".

                    if($sql){
                    echo "Bill has been Stroed";
                    echo "<BR>";
                    echo "<a href='add-bill.php'>Add Another</a>";
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
                    welcome: <br> <i> <?php echo $login_session .' As an '. $login_type . "</br>"; ?></i>
                   <br> <b id="logout"><a href="../logout.php">Logout</a></b>
                </h2>
            </div>
        </div>
    </div>
</div>




<?php include '../includes/footer.php'; ?>