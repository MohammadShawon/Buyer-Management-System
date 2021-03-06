<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <aside class="well">
                <a href="admin.php"> <button  class="btn btn-primary btn-md" type="button">HOME</button></a>
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
        <div class="col-sm-8 text-left" id="product_status">
            
             <div class="table-responsive" id="delivery_list">
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
            <div class="table-responsive" id="order_list">
				<?php
					$db="nazprinters";
					$link = mysql_connect('localhost', 'root', '');
					if (! $link)
					die(mysql_error());
					mysql_select_db($db , $link)
					or die("Couldn't open $db: ".mysql_error());
					$result = mysql_query( "SELECT * FROM orders" )
					or die("SELECT Error: ".mysql_error());
					$num_rows = mysql_num_rows($result);
					   echo "<h3 class='well text-center'>Total Order = $num_rows  </h3>" ;
					print '<table class="table table-hover">';
					print "<tr><th>Order No</th><th>Buyer Name</th><th>Comapny</th><th>Approval</th><th>Quantity</th><th>Rate</th><th>Order Date</th><th>Delivery Date</th><th>Phone</th></tr>";
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
                <h3 class="well text-center">Bill Generator</h3>
                <form  role="form" method="post" action="bill-gen.php" enctype="multipart/form-data">
                <input type="text" class="form-control" id="order_code" placeholder="Enter Order Code" name="order_code">
              <button type="submit" class="btn btn-default" value="Submit" >Generate Bill</button> 
                </form>
            </div>
			<div class="well">
				<form action="search-order.php" method="post">
				 Search: <input type="number" name="order_code" class="form-control" placeholder="Order Code" /><br />
				<input type="submit" name="submit" value="Submit" />
				</form>
			</div>
            <div class="well">
                <h2 id="welcome">
                    welcome: <br><i> <?php echo $login_session .' As an '. $login_type; ?></i>
                   <br> <b id="logout"><a href="../logout.php">Logout</a></b>
                </h2>
            </div>
        </div>
    </div>
</div>
