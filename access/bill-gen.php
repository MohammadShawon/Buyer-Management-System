<?php
require '../session.php';
if($_SESSION['user_type']!=='Employee'){
header("location:../index.php"); } 
    include '../includes/style-link.php';
    include '../includes/header.php';
?>
<script type="text/javascript" src="../js/bill.js"></script>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <aside class="well">
                            <a href="employee.php"> <button  class="btn btn-primary btn-md" type="button">HOME</button></a>
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
        
        <div class="col-sm-8 text-left well" id="order_list">
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
            $bname=mysql_result($result,$i,"buyer_name");
            $company=mysql_result($result,$i,"company");
            $quantity=mysql_result($result,$i,"quantity");
            $rate=mysql_result($result,$i,"rate");
            $d_date=mysql_result($result,$i,"delivery_date");
                ++$i;
            }
                $t_price= $quantity * $rate;

            ?>
            
            <div class="table-responsive" id="bill">
                 <h3 class="well text-center"><b> Naz Printers </b></h3>
                 <h4 class="text-center"><b> Bill Copy</b></h4>
                  <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Details</th>
                            <th>Value</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Order Code</td>
                            <td><?php echo $order_code; ?></td>
                        </tr>
                        <tr>
                            <td>Buyer Name</td>
                            <td><?php echo $bname; ?></td>
                        </tr>
                        <tr>
                            <td>Company</td>
                            <td><?php echo $company; ?></td>
                            
                        </tr>
                        <tr>
                            <td>Order Quantity</td>
                            <td><?php echo $quantity; ?></td>
                        </tr>
                        <tr>
                            <td>Rate</td>
                            <td><?php echo $rate; ?></td>
                        </tr>
                        <tr>
                            <td>Delivery Date</td>
                            <td><?php echo $d_date; ?></td>
                        </tr>
                        <tr>
                            <td>Total Price</td>
                            <td><?php echo $t_price. " ". 'Tk'; ?></td>
                        </tr>
                    </tbody>
                  </table>
                  
            </div>
			<button class="right btn btn-primary" onclick="JavaScript:printbill('bill')">Print Bill</button>
            
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










