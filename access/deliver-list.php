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
                        <a href="employee.php"> <button  class="btn btn-primary btn-md" type="button">GO Back</button></a>
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
        <div class="col-sm-8 text-left" id="product_status">
            <h2 class="well text-center"><b>STATUS OF DELIVERY</b></h2>
			<div class="table-responsive" id="deliver_list">
                    <?php
                $db="nazprinters";
                $link = mysql_connect('localhost', 'root', '');
                if (! $link)
                die(mysql_error());
                mysql_select_db($db , $link)
                or die("Couldn't open $db: ".mysql_error());
                $result = mysql_query( "SELECT * FROM delivery" )
                or die("SELECT Error: ".mysql_error());
                $num_rows = mysql_num_rows($result);
                   echo "<h3 class='well text-center'>Total Delivery = $num_rows  </h3>" ;
                print '<table class="table table-hover">';
                print "<tr><th>Delivery No</th><th>Order Code</th><th>Status</th><th>Comments</th></tr>";
                while ($get_info = mysql_fetch_row($result)){
                print "<tr>";
                foreach ($get_info as $field)
                print "<td>$field</td>";
                print "</tr>";
                }
                print "</table>";
                mysql_close($link);
            ?>
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