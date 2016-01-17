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
                        <a href="admin.php"> <button  class="btn btn-primary btn-md" type="button">GO Back</button></a>
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
        <div class="col-sm-8 text-left " id="product_status">
            <h2 class="well text-center"><b>LIST OF ORDERS</b></h2>
			<div class="table-responsive" id="#order_list">
                <?php

					mysql_connect ("localhost", "root","")  or die (mysql_error());
					mysql_select_db ("nazprinters");
					 
					$term = $_POST['order_code'];
					 
					$sql = mysql_query("select * from orders where order_code like '%$term%'");
					 
					while ($row = mysql_fetch_array($sql)){
						echo 'Order Code: '.$row['order_code'];
						echo '<br/> Buyer Name: '.$row['buyer_name'];
						echo '<br/> Company: '.$row['company'];
						echo '<br/> Approval: '.$row['approved_by'];
						echo '<br/> Quantity: '.$row['quantity'];
						echo '<br/> Rate: '.$row['rate'];
						echo '<br/> Order Date: '.$row['order_date'];
						echo '<br/> Delivery Date: '.$row['delivery_date'];
						echo '<br/> Phone: '.$row['phone'];
						echo '<br/><br/>';
						}
					 
				?>

					<form action="admin.php">
						<button action="" class="btn btn-default" value="Submit" type="submit">Search Another</button>
					</form>
            </div>
            
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
<?php include '../includes/footer.php'; ?>