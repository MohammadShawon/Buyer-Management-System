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
        <div class="col-sm-8 text-left" id="order_list">
            <h2 class="well text-center"><b>Update Bill </b></h2>
            <div class="table-responsive">


            <?php
                /* Change next two lines if using online*/
                $db="nazprinters";
                $link = mysql_connect('localhost', 'root', '');
                if (! $link)
                die(mysql_error());
                mysql_select_db($db , $link)
                or die("Couldn't open $db: ".mysql_error());
                $result = mysql_query( "SELECT * FROM bill" )
                or die("SELECT Error: ".mysql_error());
                $num_rows = mysql_num_rows($result);
                echo "<h3 class='well text-center'>Total Bill = $num_rows  </h3>" ;
                print '<table class="table table-hover">';
                print "<tr><th>BILL No</th><th>Order Code</th><th>Total Price</th></tr>";
                while ($get_info = mysql_fetch_row($result)){
                print "<tr>";
                foreach ($get_info as $field)
                print "<td>$field</td>";
                print "</tr>";
                }
                print "</table>";
                mysql_close($link);
            ?>
                      <div class="form-group well">
                  <form class="form-horizontal " role="form" method="POST" action="up-change-bill.php" enctype="multipart/form-data">
                        <label class="control-label col-sm-4 " for="">Enter Bill No to Edit Bill</label>
                                    <div class="col-sm-8 well"> 
                                      <input type="text" class="form-control " id="" name="bil_no" placeholder="Enter Bill No">
                                      <input type="submit" class="form-control" value="Submit"><input type="reset" class="form-control">
                                    </div>
                          </form>
                        </div>
                                  
                
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